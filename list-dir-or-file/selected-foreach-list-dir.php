<div class="form-group">
<label for="sel1"><h2>Push E-mail address</h2></label>
<select class="form-control" id="sampleSelect">
<option  value="">Select</option>	
      <?php
	  
$dirs = array_filter(glob('*'), 'is_dir');
foreach($dirs as $dir){
	echo "<option  value='".$dir."/index.php'>".$dir."</option>";
	}

	  ?>
</select> 
<script>
$("select").click(function() {
  var open = $(this).data("isopen");
  if(open) {
    window.location.href = $(this).val()
  }
  
  $(this).data("isopen", !open);
});
</script>           
        </div>
