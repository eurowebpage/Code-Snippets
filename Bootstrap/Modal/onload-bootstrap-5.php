
<footer class="container-fluid mt-5 p-4 bg-dark text-white text-center">
<p>Footer</p>
</footer>
<div class="container-fluid">
<div class="button2 ml-2 mb-2"><a data-bs-toggle="modal" data-bs-target="#myModal"><img src="<?php echo $realdir;?>front/img/phone.webp" alt='btn contact'></div>
</a>
</div>
<?php
if (isset($_GET['onload'])){
echo"<script>
var myModal = new bootstrap.Modal(document.getElementById('myModal'), {})
myModal.show()
</script>";
}
?>
</body>
</html>
