<!-- JS

============================================ -->



<!-- jQuery JS -->

<script src="/js/vendor/jquery-1.12.0.min.js"></script>

<!-- Popper JS -->

<script src="/js/popper.min.js"></script>

<!-- Bootstrap JS -->

<script src="/js/bootstrap.min.js"></script>

<!-- Plugins JS -->

<script src="/js/plugins.js"></script>

<!-- ycp JS -->

<script src="/js/ycp.js"></script>

<!-- Ajax Mail JS -->

<script src="/js/ajax-mail.js"></script>

<!-- Main JS -->

<script src="/js/main.js"></script>

<!--Temperature API-->

<script src="/js/temp.js"></script>

<!-- Date in Azerbaijan -->
@if(\Illuminate\Support\Facades\App::isLocale('az'))
    <script src="/js/datein_az.js"></script>
@elseif(\Illuminate\Support\Facades\App::isLocale('en'))
    <script src="/js/datein_en.js"></script>
@elseif(\Illuminate\Support\Facades\App::isLocale('ru'))
    <script src="/js/datein_ru.js"></script>
@elseif(\Illuminate\Support\Facades\App::isLocale('ar'))
    <script src="/js/datein_ar.js"></script>
@elseif(\Illuminate\Support\Facades\App::isLocale('tr'))
    <script src="/js/datein_tr.js"></script>
@endif


    <script language="JavaScript">
  /**
    * 
    */
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>

<script src='demo-to-prevent-copy-paste-on-blogger_files/googleapis.
js'></script><script type='text/javascript'> if(typeof document.onselectstart!="undefined" ) 
{document.onselectstart=new Function ("return false" ); } else{document.onmousedown=new Function ("return false" );
document.onmouseup=new Function ("return false"); } </script>  

