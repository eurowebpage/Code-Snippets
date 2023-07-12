<style>
 #google_translate_element{
  display: none;
}
.skiptranslate{   display: none; }
.goog-te-banner-frame.skiptranslate {
    display: none !important;
    } 
body {
    top: 0px !important; 
    } 
</style>
<div id="google_translate_element"></div>
<script>
function googleTranslateElementInit() {
new google.translate.TranslateElement({ pageLanguage: 'fr',autoDisplay: false }, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Lang<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="#" class="flag_link nl notranslate" data-lang="nl">Nl</a></li>
<li><a href="#" class="flag_link eng notranslate" data-lang="en">Eng</a></li>
<li><a href="#" class="flag_link taj notranslate" data-lang="es">ES</a></li>
<li><a href="#" class="flag_link rus notranslate" data-lang="ru">RS</a></li>
</ul>
</div>

<input type="text" class="form-control translate" translate id="'.$var.'_id"  name="'.$var.'" value="'.($value_span).'">

<script>
var flags = document.getElementsByClassName('flag_link');
Array.prototype.forEach.call(flags, function(e){
  e.addEventListener('click', function(){
    var lang = e.getAttribute('data-lang'); 
    var languageSelect = document.querySelector("select.goog-te-combo");
    languageSelect.value = lang; 
    languageSelect.dispatchEvent(new Event("change"));
  }); 
});

</script>
