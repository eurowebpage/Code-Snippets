<?php
date_default_timezone_set("Europe/Brussels");
$locale = 'fr_FR.utf8'; 
setlocale(LC_ALL, $locale);  
$sys_date = date("Y-m-d | H:i:s");
$date_h2  = date("d-m-Y");
$jour_lang = date("D M j G:i:s T Y");  
$jour_nom = date("l");
$jour = date("d");
$mois = date("m");
$mois_nom = date("M");
$annee = date("Y");
$date_simple = date("Y-m-d");
?>
<!-- Html -->
<h2 class="mb-3">2. Lang - Pays</h2>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
<p>A. SYSTEM : <?php echo $sys_date; ?><br> <?php  echo strftime("%A"); ?></p>
</div>
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
<p>B. USA : <?php echo $usa_date; ?><br> <?php  $locale = 'en_US.utf8'; setlocale(LC_ALL, $locale); echo strftime('%A',strtotime($jour_lang));
 ?></p>
</div>
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
<p>C. Bruxelles : <?php echo $bxl_date; ?><br> <?php  $locale = 'fr_FR.utf8'; setlocale(LC_ALL, $locale); echo strftime('%A',strtotime($jour_lang)); ?></p>
</div>
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
<p>D. Athens : <?php echo $gr_date; ?><br> <?php   $locale2 = 'el_GR.UTF-8'; setlocale(LC_ALL, $locale2); echo strftime('%A',strtotime($jour_lang)); ?></p>
</div>
</div>
