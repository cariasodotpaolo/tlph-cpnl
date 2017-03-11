function popUpVideo(title, videoUrl) {

    var height = 540;
    var width = 1220;
    var left = (screen.width/2)-(width/2);
    var top = (screen.height/2)-(height/2);

    var popupWindow = window.open('', '_blank', 'width=' + width + ',height=' + height + ',top='+ top +',left='+left +',fullscreen=no,status=no,resizable=no,border=0,toolbar=0,location=0,menubar=0');
    var iframe = '<iframe id="video-frame" width="1200" height="520" src="' + videoUrl + '?vq=hd720&autoplay=1" frameborder="0" allowscriptaccess allowfullscreen></iframe>';

    $(popupWindow.document.body).html(iframe);
    popupWindow.document.title = title;
    popupWindow.document.body.style.background = 'black';

}

