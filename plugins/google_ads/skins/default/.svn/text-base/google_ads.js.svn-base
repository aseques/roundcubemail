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
        }
        break;
      case 'mail':
        if(action == 'plugin_summary'){
          $('#summary').css('margin-left','-372px');
          $('#summary').css('width','744px');
          $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:65px;left:10px');
          $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:65px;right:10px');
        }
        else if(action == 'compose'){
          $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:55px;left:10px');
          $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:55px;right:10px');
          $('#mainscreen').css('right','140px');
          if($(document).width() > 1024){
            $('#mainscreen').css('left','140px');
            $('#messagetoolbar').css('left','325px');
          }
          else{
            $('#google_ads_' + task + '_' + action + '_0').attr('style','display:none;');
          }
        }
        else{
          $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:85px;left:10px');
          $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:85px;right:10px');
          if($(document).width() >= 1300){
            $('#mainscreen').css('left','140px');
            $('#messagetoolbar').css('left','305px');
            $('#accounts').css('left','140px');
            $('#calendaroverlay').css('left','141px');
            $('#upcoming-content').css('left','140px');
            $('#quicksearchbar').css('right','130px');
            $('#rss').css('left','175px');
          }
          else{
            $('#google_ads_' + task + '_' + action + '_0').attr('style','display:none;');
            $('#quicksearchbar').css('right','130px');
          }
          $('#mainscreen').css('right','140px');
          $('#showusername').css('left','140px');
        }
        break;
      case 'addressbook':
        $('#mainscreen').css('left','140px');
        $('#mainscreen').css('right','140px');
        $('#abooktoolbar').css('left','345px');
        $('#quicksearchbar').css('right','130px');
        $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:85px;left:10px');
        $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:85px;right:10px');
        break;
      case 'settings':
        $('#mainscreen').css('left','140px');
        $('#mainscreen').css('right','140px');
        $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:85px;left:10px');
        $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:85px;right:10px');
        break;
      case 'dummy':
        if(action == 'plugin_sticky_notes'){
          $('#notes').css('margin-left','140px');
          $('#notes').css('margin-right','140px');
          if(sticky_notes.resizetimer){
            window.clearTimeout(sticky_notes.resizetimer);
          }
          sticky_notes.resizetimer = window.setTimeout("sticky_notes.startup();",100);
          $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:65px;left:10px');
          $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:65px;right:10px');
        }
        else if(action == 'plugin_calendar' || action == 'plugin_calendar_tests'){
          if(action != 'plugin.calendar_tests'){
            $('#todaybutton').css('left','140px');
            $('#calsearchset').css('right','155px');
            $('#mainscreen').css('left','140px');
            $('#mainscreen').css('right','140px');
            $('#calendaroverlay').css('left','140px');
            $('#calendaroverlay').css('right','140px');
            $('#messagetoolbar').css('left','360px');
            $('#calquicksearchbar').css('right','145px');
            $("#calsearchdialog").dialog({
              autoOpen: false,
              modal: false,
              resizable: false,
              width: 285,
              height: 250,
              position: [$('#calquicksearchbar').position().left,$('#calquicksearchbar').position().top + 27]
            });
            $('#calendar-header').css('right','146px');
            $('#calendar-header').css('left','362px');
            $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:85px;left:10px');
            $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:85px;right:10px');
          }
        }
        else if(action == 'plugin_nabble'){
          $('#google_ads_' + task + '_' + action + '_0').attr('style','display:none;');
          $('#google_ads_' + task + '_' + action + '_1').attr('style','display:none;');
        }
        else{
          $('#google_ads_' + task + '_' + action + '_0').attr('style','position:absolute;top:85px;left:10px');
          $('#google_ads_' + task + '_' + action + '_1').attr('style','position:absolute;top:85px;right:10px');
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