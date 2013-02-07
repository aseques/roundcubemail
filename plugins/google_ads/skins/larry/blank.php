<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title></title>
  <!--[if IE]>
  <style type="text/css">
    body { width: expression((parseInt(document.documentElement.clientWidth)-20)+'px'); }
  </style>
  <![endif]-->
</head>

<body style="background-color:#fff;" onload="parent.focus()">
<div id="hidden_content" style="display:none;">
  <!-- here follows your google ads content ... ->
  <!-- google_ad_section_start --> 
    <div id="main"> 
        <div id="header"> 
                <div id="mainnav"> 
                        <a href="news">News</a> 
                        <a href="about">About</a> 
                        <a href="screens">Screenshots</a> 
                        <a href="download">Download</a> 
                        <a href="support">Support</a> 
                        <a href="contribute">Contribute</a> 
                </div> 
        </div> 
        <div id="rightcol"> 
                <h1>Roundcube webmail...</h1> 
                <p> 
                        ...is a browser-based multilingual IMAP client with an application-like user interface. 
                        It provides full functionality you expect from an e-mail client, including MIME support, 
                        address book, folder manipulation, message searching and spell checking. 
                        <a href="/about">More information...</a> 
                </p> 
                
                <p style="height:46px"> 
                        <a href="download" class="downloadButton" title="Download now!">0.3-stable (1.8MB)</a>
                </p> 
                
                <h2>Features</h2> 
                <ul> 
                        <li>Multilingual capabilities</li> 
                        <li>Full support for HTML messages</li> 
                        <li>Multiple sender identities</li> 
                        <li>Find-as-you-type address book</li> 
                        <li>Richtext/HTML message composing</li> 
                        <li>Searching messages and contacts</li> 
                        <li>IMAP folder management</li> 
                        <li>Spell checking</li> 
                        <li>Extensible using the Plug-in API</li> 
                </ul> 
                <a href="">Complete list of features</a>                
        </div> 
        <div id="footer"> 
                Hosted by <a href="http://sourceforge.net/">Sourceforge.net</a><br /> 
                <span>&copy; 2009 Roundcube.net, all rights reserved.</span> 
                <span><a href="support">Support</a> &#x2022; <a href="contact">Contact</a> &#x2022; <a href="http://trac.roundcube.net/wiki/Howto_ReportIssues">Found a bug?</a></span> 
                <span>Site design by <a href="http://bueroflint.com/" style="border:0"><img src="" class="pngimage" width="38" height="8" alt="FLINT - Büro für Gestaltung" /></a></span> 
        </div>
    </div>
  <!-- google_ad_section_end -->
</div>
<?php
if(file_exists('../../../global_config/config.inc.php')){
  include('../../../global_config/config.inc.php');
}
else if(file_exists('../../config.inc.php')){
  include('../../config.inc.php');
}
else{
  include('../../config.inc.php.dist');
}
$credentials = $rcmail_config['google_ads_blank']['litecube-f'];
if($_SERVER['HTTPS']){
  $https = 's';
}
else{
  $https = '';
}
?>
<div style="position: absolute; top:20px; left:20px">
<script type="text/javascript"><!--
google_ad_client = "<?php echo $credentials[0]['google_ad_client'] ?>";
google_ad_slot = "<?php echo $credentials[0]['google_ad_slot'] ?>";
google_ad_width = <?php echo $credentials[0]['google_ad_width'] ?>;
google_ad_height = <?php echo $credentials[0]['google_ad_height'] ?>;
//-->
</script>
<script type="text/javascript"
src="http<?php echo $https ?>://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<div style="margin:20px auto; text-align:center">
<img src="images/watermark.jpg" width="280" height="280" alt="" />
</div>
<div style="position: absolute; top:20px; right:20px">
<script type="text/javascript"><!--
google_ad_client = "<?php echo $credentials[1]['google_ad_client'] ?>";
google_ad_slot = "<?php echo $credentials[1]['google_ad_slot'] ?>";
google_ad_width = <?php echo $credentials[1]['google_ad_width'] ?>;
google_ad_height = <?php echo $credentials[1]['google_ad_height'] ?>;
//-->
</script>
<script type="text/javascript"
src="http<?php echo $https ?>://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
</body>
</html>