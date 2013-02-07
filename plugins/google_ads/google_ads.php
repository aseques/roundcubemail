<?php
/**
 * google_ads
 *
 * @version 2.1.2 - 02.06.2012
 * @author Roland 'rosali' Liebl
 * @website http://myroundcube.googlecode.com
 * @licence GNU GPL
 * 
 **/
 
/**
 *
 * Usage: http://mail4us.net/myroundcube/
 *
 **/    
 
class google_ads extends rcube_plugin
{
  public $rcmail;
  
  /* unified plugin properties */
  static private $plugin = 'google_ads';
  static private $author = 'myroundcube@mail4us.net';
  static private $authors_comments = null;
  static private $download = 'http://myroundcube.googlecode.com';
  static private $version = '2.1.2';
  static private $date = '02-06-2012';
  static private $licence = 'GPL';
  static private $requirements = array(
    'Roundcube' => '0.8',
    'PHP' => '5.2.1'
  );
  static private $prefs = null;
  static private $config_dist = 'config.inc.php.dist';
  
  function init()
  { 
    $this->rcmail = rcmail::get_instance();
    if($_SERVER['HTTPS'] || $this->rcmail->action == 'plugin.plugin_manager_update') // find me: https://www.google.com/support/adsense/bin/answer.py?answer=10528 
      return;
    $plugins = $this->rcmail->config->get('plugins');
    $plugins = array_flip($plugins);
    if(!isset($plugins['global_config'])){
      $this->load_config();
    }
    if(is_array($this->rcmail->config->get('google_ads_templates'))){
      $skin = $this->rcmail->config->get('skin','default');
      if(file_exists('plugins/google_ads/skins/' . $skin . '/google_ads.js')){
        $this->include_script('skins/' . $skin . '/google_ads.js');
      }
      else{
        return;
      }
      $this->add_hook('render_page', array($this, 'render_page'));
    }
  }
  
  static public function about($keys = false){
    $requirements = self::$requirements;
    foreach(array('required_', 'recommended_') as $prefix){
      if(is_array($requirements[$prefix.'plugins'])){
        foreach($requirements[$prefix.'plugins'] as $plugin => $method){
          if(class_exists($plugin) && method_exists($plugin, 'about')){
            /* PHP 5.2.x workaround for $plugin::about() */
            $class = new $plugin(false);
            $requirements[$prefix.'plugins'][$plugin] = array(
              'method' => $method,
              'plugin' => $class->about($keys),
            );
          }
          else{
             $requirements[$prefix.'plugins'][$plugin] = array(
               'method' => $method,
               'plugin' => $plugin,
             );
          }
        }
      }
    }
    $rcmail_config = array();
    if(is_string(self::$config_dist)){
      if(is_file($file = INSTALL_PATH . 'plugins/' . self::$plugin . '/' . self::$config_dist))
        include $file;
      else
        write_log('errors', self::$plugin . ': ' . self::$config_dist . ' is missing!');
    }
    $ret = array(
      'plugin' => self::$plugin,
      'version' => self::$version,
      'date' => self::$date,
      'author' => self::$author,
      'comments' => self::$authors_comments,
      'licence' => self::$licence,
      'download' => self::$download,
      'requirements' => $requirements,
    );
    if(is_array(self::$prefs))
      $ret['config'] = array_merge($rcmail_config, array_flip(self::$prefs));
    else
      $ret['config'] = $rcmail_config;
    if(is_array($keys)){
      $return = array('plugin' => self::$plugin);
      foreach($keys as $key){
        $return[$key] = $ret[$key];
      }
      return $return;
    }
    else{
      return $ret;
    }
  }

  function render_page($args){
    if(get_input_value('_framed', RCUBE_INPUT_GPC) || $this->rcmail->action == 'print' || $args['template'] == 'sticky_notes.add_note')
      return $args;
    $blankpages = $this->rcmail->config->get('blankpage','blank.php');
    if(is_array($blankpages)){
      $blankpage = $blankpages[$this->rcmail->config->get('skin','default')];
    }
    // issue adblocks
    if($args['template'] != 'settings'){
      $args['content'] = str_replace('skins/' . $this->rcmail->config->get('skin','default') . '/watermark.html','plugins/google_ads/skins/' . $this->rcmail->config->get('skin','default') . '/' . $blankpage,$args['content']);
      if($args['template'] == 'login'){
        $this->add_texts('localization/', true);
        $content = $args['content'];
if($this->rcmail->config->get('allow_adblock')){
	$script="";
} else { 
	$script="<script>
function block_check(){
  if(!document.getElementById('aswift_1_anchor') && !document.getElementById('google_ads_frame1')){
    rcmail.display_message(rcmail.gettext('google_ads.ads_error'),'error');
    $('#taskbar').remove();
    $('.button').prop('disabled', true);
    window.setTimeout('block_check()', 2000);
  }
}
$(document).ready(function(){
  window.setTimeout('block_check()', 500);
});
</script>";
}
        $content = str_replace('</html>', $script . '</html>', $content);
        $args['content'] = $content;
      }
    }
    else{
      $script = 'try{document.getElementById("prefs-frame").src="plugins/google_ads/skins/' . $this->rcmail->config->get('skin','default') . '/' . $blankpage . '"} catch(e){document.getElementById("preferences-frame").src="plugins/google_ads/skins/' . $this->rcmail->config->get('skin','default') . '/' . $blankpage . '"}';
      $this->rcmail->output->add_script($script,'foot');
    }
    $this->rcmail->output->set_env('blankpage','plugins/google_ads/skins/' . $this->rcmail->config->get('skin','default') . '/' . $blankpage);
    $credentials = $this->rcmail->config->get('google_ads_templates', array());
    if(is_array($credentials[$this->rcmail->config->get('skin','default')])){
      $credentials = $credentials[$this->rcmail->config->get('skin','default')];
    }
    $this->rcmail->output->set_env('google_ads', true);
    if($_SERVER['HTTPS'])
      $https = 's';
    else
      $https = '';
    $left = 0;
    foreach($credentials as $key => $credential){
      $this->rcmail->output->add_footer(
        '<script type="text/javascript">
        google_ad_client = "' . $credential['google_ad_client'] . '";
        google_ad_slot = "' . $credential['google_ad_slot'] . '";
        google_ad_width = ' . $credential['google_ad_width'] . ';
        google_ad_height = ' . $credential['google_ad_height'] . ';
        </script>'
      );
      $left = ($left + 10) + $key * (int) $credential['google_ad_width'];
      $this->rcmail->output->add_footer('<div style="display:none;position:absolute; top:85px; left:' . $left . 'px;z-index:' . (9999 + $key) . '" id="google_ads_' . $this->rcmail->task . '_' . str_replace('.','_',$this->rcmail->action) . '_' . $key . '"><script type="text/javascript" src="http' . $https . '://pagead2.googlesyndication.com/pagead/show_ads.js"></script></div>');
    }
    return $args;
  }
}
?>
