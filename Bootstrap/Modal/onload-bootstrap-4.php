
<?php
if (isset($_GET['onload'])){
echo"<script>
$(window).on('load', function() {
$('#myModal').modal('show');
});
</script>";
}
?>

<style>
.modal{
    pointer-events: none;
}
.modal-dialog{
    pointer-events: all;
 }
   .button2{ position: fixed; bottom: 0px; right: 0px; }
pre {
  white-space: pre-wrap;
  word-wrap: break-word;
  text-align: justify;
}
 </style>

</head>
<body>

<footer class="container-fluid mt-5 p-4 bg-dark text-white text-center">
<p>Footer</p>
</footer>
<div class="container-fluid">
<div class="button2 ml-2 mb-2"><a data-bs-toggle="modal" data-bs-target="#myModal"><img src="<?php echo $realdir;?>front/img/phone.webp" alt='btn contact'></div>
</a>
</div>
</body>
</html>
