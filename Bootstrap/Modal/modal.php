    <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Secure Contact</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	    <p>Cliquez sur le bouton ci-dessous pour valider que vous êtes pas un robot.</p>
    <form method="POST" action="<?php echo $realdir;?>front/inc/contact/">
    <input type="text" id="contact_mail_modal" name="contact_mail_modal"/>

      <input type="submit" class="btn btn-md mr-2 btn-success" value="Cliquez pour continuer"/>
    </form>

	</div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
