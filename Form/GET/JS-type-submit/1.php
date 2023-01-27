<form class="myForm">
<button type="submit" name="theme" value="1">Theme 1 </button><!-- value="first submit" --> 
<button type="submit" name="theme" value="2">Theme 2 </button><!-- value="first submit" --> 
</form>
<script>
$('button[type="submit"]').on('click', function(){
$('.myForm').data('button', this.name);
});
/*
$(".myForm").on('submit', function(){
var submitButton = $(this).data('button') || $('input[type="submit"]').get(0).name;
});
*/
</script>
<?php
if(isset($_GET['theme'])){
$theme = $_GET['theme'];
if($theme == 1){
echo "<p>Theme $theme sélectionné</p>";
$theme = "1";
}
if($theme == 2){
echo "<p>Theme $theme sélectionné</p>";	
$theme = "2";
}
}
?>
