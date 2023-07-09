<?php
$exp_session_time = 300;
$urlpage = $protocolsite.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<head>
<script>
$(function() {
if($(location).attr('hash') === '#ExpSessReturn') {
$('#ExpSess').modal('show');
}
});
</script>
<?php
if (!isset($_SESSION['ExpSess'])){
$_SESSION['ExpSess'] = time();
}else{
//$_SESSION['ExpSess'] = false;
};
if(time() - $_SESSION['ExpSess'] > $exp_session_time) { //subtract new timestamp from the old one
//echo"<script>alert('15 Minutes over!');< /script>";
unset($_SESSION['ExpSess']);
header("Location: ".$urlpage."#ExpSessReturn ");
//header("Location: " . index.php); //redirect to index.php
exit;
} else {
$_SESSION['ExpSess'] = time(); //set new timestamp
}
?>
</head>

<!-- Footer -->
<script>
function refreshScript(){
window.location = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#ok3";
changeButton();
} 
</script> 
 <!-- Exp -->
<div class="modal" id="ExpSess">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title alert alert-danger">Session Refresh</h4>
<button type="submit" onClick="refreshPage()" class="btn btn-sm btn-danger">close</button>
</div>
<div class="modal-body">
<p class="lead">Message d'avertissement pour les sessions utilisateur inactives</p>
<p class="lead">Session time seconds : <?php echo $exp_session_time; ?> seconds</p>
</div>
<div class="modal-footer">
</div>
</div>
</div>
</div>
<!-- ScriptResponse -->

