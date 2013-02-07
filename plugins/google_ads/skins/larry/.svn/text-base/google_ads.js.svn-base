function google_ads_adjust(){
  var task = rcmail.env.task;
  var action = rcmail.env.action;
  if(action)
    action = rcmail.env.action.replace('.','_');
  if((self.location != parent.location && parent.roundcube_wrapper == false) || $(document).width() < 1024){
    $('#google_ads_' + task + '_' + action + '_0').attr('style','display:none;');
    $('#google_ads_' + task + '_' + action + '_1').attr('style','display:none;');
  }
  else{
    switch(task){
      case 'login':
      case 'logout':
        if(action == 'plugin_nabble'){
          $('#google_ads_' + task + '_' + action + '_0').attr('style','display:none;');
          $('#google_ads_' + task + '_' + action + '_1').attr('style','display:none;');
        }
        else{
          $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:85px;left:40px');
          $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:85px;right:40px');
          $('#logo').css('right','150px')
        }
        break;
      case 'mail':
        if(action == 'plugin_summary'){
          $('#summary').css('margin-left','-372px');
          $('#summary').css('width','744px');
          $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:75px;left:10px');
          $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:75px;right:10px');
        }
        else if(action == 'compose'){
          if(!rcmail.env.compose_newwindow){
            $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:130px;left:10px');
            $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:130px;right:10px');
            if(bw.ie){
              var style = $('#composeview-right').attr('style');
              style = style.split(';');
              $('#composeview-right').attr('style', style[0]);
            }
            $('#mainscreen').css('right','140px');
            if($(document).width() > 1024){
              $('#mainscreen').css('left','140px');
              $('#messagetoolbar').css('left','315px');
            }
            else{
              $('#google_ads_' + task + '_' + action + '_0').attr('style','display:none;');
            }
          }
        }
        else{
          $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:130px;left:10px');
          $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:130px;right:10px');
          if($(document).width() >= 1300){
            if(bw.ie){
              var style = $('#mailview-right').attr('style');
              style = style.split(';');
              $('#mailview-right').attr('style', style[0]);
            }
            $('#mainscreen').css('right','140px');
            $('#mainscreen').css('left','140px');
            $('#messagetoolbar').css('left','315px');
            var sf = $('.searchfilter').offset();
            if(sf)
              $('#accounts').css('left', (sf.left + $('.searchfilter').width() + 10) + 'px');
            $('#calendaroverlay').css('left','141px');
            $('#upcoming-content').css('left','140px');
            $('#quicksearchbar').css('right','140px');
            $('#rss').css('right','140px');
          }
          else{
            $('#google_ads_' + task + '_' + action + '_0').attr('style','display:none;');
            $('#quicksearchbar').css('right','140px');
          }
          $('#mainscreen').css('right','140px');
          $('#showusername').css('left','140px');
        }
        break;
      case 'addressbook':
        if(bw.ie){
          var style = $('#addressview-right').attr('style');
          style = style.split(';');
          $('#addressview-right').attr('style', style[0]);
          $('#contacts-box').css('right', '280px');
          $('#contacts-box').attr('style', '');
        }
        $('#mainscreen').css('left','140px');
        $('#mainscreen').css('right','140px');
        $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:130px;left:10px');
        $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:130px;right:10px');
        break;
      case 'settings':
        $('#mainscreen').css('left','140px');
        //$('#mainscreen').css('right','140px');
        $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:130px;left:10px');
        //$('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:130px;right:10px');
        break;
      case 'dummy':
        if(action == 'plugin_sticky_notes'){
          $('#notes').css('margin-left','140px');
          $('#notes').css('margin-right','140px');
          if(sticky_notes.resizetimer){
            window.clearTimeout(sticky_notes.resizetimer);
          }
          sticky_notes.resizetimer = window.setTimeout("sticky_notes.startup();",100);
          $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:75px;left:10px');
          $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:75px;right:10px');
        }
        else if(action == 'plugin_calendar' || action == 'plugin_calendar_tests'){
          if(action != 'plugin.calendar_tests'){
            $('#todaybutton').css('left','140px');
            $('#calsearchset').css('right','165px');
            $('#mainscreen').css('right','140px');
            $('#mainscreen').css('left','140px');
            $('#calendaroverlay').css('left','140px');
            $('#calendaroverlay').css('right','140px');
            $('#messagetoolbar').attr('style','');
            $('#messagetoolbar').css('left','350px');
            $('#calquicksearchbar').css('right','145px');
            $("#calsearchdialog").dialog({
              autoOpen: false,
              modal: false,
              resizable: false,
              width: 285,
              height: 250,
              position: [$('#calquicksearchbar').position().left - 127,$('#calquicksearchbar').position().top + 30]
            });
            $('#calendar-header').css('right','146px');
            $('#calendar-header').css('left','360px');
            $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:110px;left:10px');
            $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:110px;right:10px');
          }
        }
        else if(action == 'plugin_nabble'){
          $('#google_ads_' + task + '_' + action + '_0').attr('style','display:none;');
          $('#google_ads_' + task + '_' + action + '_1').attr('style','display:none;');
        }
        else{
          $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:75px;left:10px');
          $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:75px;right:10px');
          $('#google_ads_login' + '_' + action + '_0').attr('style','position:absolute;top:85px;left:10px');
          $('#google_ads_login' + '_' + action + '_1').attr('style','position:absolute;top:85px;right:10px');
        }
        break;
      default:
        $('#google_ads_' + task + '_' + action + '_0').attr('style','display:none;');
        $('#google_ads_' + task + '_' + action + '_1').attr('style','display:none;');
    }
  }
}

$(document).ready(function(){
  if(window.rcmail){
    rcmail.addEventListener('init', function(evt){
      google_ads_adjust();
    });
  }
  else{
    $('#google_ads_' + task + '_' + action + '_0').attr('style','display:none;');
    $('#google_ads_' + task + '_' + action + '_1').attr('style','display:none;');
  }
});