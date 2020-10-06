function PopupCenter(url, title, w, h) { //PopupCenter('link.html', 'title', '970', '600');
    // Fixes dual-screen position                         Most browsers      Firefox  
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

    width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 2) - (h / 2)) + dualScreenTop;
    var newWindow = window.open(url, title, 'resizable=0, scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    // Puts focus on the newWindow  
    if (window.focus) {
        newWindow.focus();
    }
}

function isPopupAllow(){
    var newWin = window.open(window.location.href,'_self');

    if(!newWin || newWin.closed || typeof newWin.closed=='undefined') 
    { 
        return false;
    }else{
        return true;
    }
    newWin.stopPropagation();
}

function browserDetect(){
    // Opera 8.0+
    var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

    // Firefox 1.0+
    var isFirefox = typeof InstallTrigger !== 'undefined';

    // Safari 3.0+ "[object HTMLElementConstructor]" 
    var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification));

    // Internet Explorer 6-11
    var isIE = /*@cc_on!@*/false || !!document.documentMode;

    // Edge 20+
    var isEdge = !isIE && !!window.StyleMedia;

    // Chrome 1+
    var isChrome = !!window.chrome && !!window.chrome.webstore;

    // Blink engine detection
    var isBlink = (isChrome || isOpera) && !!window.CSS;


    if(isOpera){
        return 'opera';
    }

    if(isFirefox){
        return 'firefox';
    }

    if(isSafari){
        return 'safari';
    }

    if(isIE){
        return 'ie';
    }

    if(isEdge){
        return 'edge';
    }

    if(isChrome){
        return 'chrome';
    }

    if(isBlink){
        return 'blink';
    }
}

$('[data-toggle="tooltip"]').tooltip();

$('[data-list]').click(function(){
    var list = $(this).data('list');
    sessionStorage.setItem('tab-main',list);
});

function getAlert(alert){

  switch(alert){
    case 1:
      $.notify({
        icon: 'fa fa-check',
        message: 'Successfully Saved!'
      },{
        z_index: 1031,
        allow_dismiss: true,
        type: "success",
        spacing: 10,
        delay: 500,
        offset: {
          x: 10,
          y: 10
        },
        animate: {
          enter: 'animated fadeInRight',
          exit: 'animated fadeOutRight'
        },
        placement: {
          from: "top",
          align: "right"
        }
      });
    break;

    case 2:
      $.notify({
        icon: 'fa fa-times',
        message: 'Error. Please save product list first.'
      },{
        z_index: 1031,
        allow_dismiss: true,
        type: "danger",
        spacing: 10,
        delay: 2000,
        offset: {
          x: 10,
          y: 10
        },
        animate: {
          enter: 'animated fadeInRight',
          exit: 'animated fadeOutRight'
        },
        placement: {
          from: "top",
          align: "right"
        }
      });
    break;

  }
}

function isCSV(file){
  var file_type = file.substr(file.lastIndexOf('.')).toLowerCase();

  if (file_type === '.csv') {
      return true;
  }else{
    return false;
  }
}

function scrollToDiv(div){
  $('html, body').animate({
      scrollTop: $(div).offset().top
  }, 500);
}

function cdBar(timeleft, timetotal, $element) {
    var progressBarWidth = timeleft * $element.width() / timetotal;
    $element.find('.bar').animate({ width: progressBarWidth }, 500).html(Math.floor(timeleft/60) + ":"+ timeleft%60);
    if(timeleft > 0) {
        setTimeout(function() {
            cdBar(timeleft - 1, timetotal, $element);
        }, 1000);
    }
};

$('.dt').datetimepicker(
  {
    format: 'YYYY/MM/DD'
  }
);

// $('.list-group').scrollbar();