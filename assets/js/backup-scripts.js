var globalScale = 1;

function nsZoomZoom($) {
  htmlWidth = $('html').innerWidth();
  bodyWidth = 1920;
  //if (htmlWidth < bodyWidth){scale = 1} else {scale = htmlWidth / bodyWidth;}
  if (htmlWidth < 992){scale = 1} else {scale = htmlWidth / bodyWidth;}
  //var cssAdd = '.viewSection{-moz-transform:scale(' + scale + '); zoom:' + scale + ';}';
  var cssAdd = '.viewSection{-moz-transform:scale(' + scale + '); zoom:' + scale + ';}.loader{opacity:0;}';

  //cssAdd += '.main-banner{height:'+100/scale+'vh;}';
  $('#nsZoom').remove();
  $('head').append('<style id="nsZoom">'+cssAdd+'</style>');
  globalScale = scale;
}


//scaling webpage
window.addEventListener("load", (event) => {
    nsZoomZoom($);
});
$(window).resize(function(){
    nsZoomZoom($);
});