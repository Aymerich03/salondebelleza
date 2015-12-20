<div class="content-mid-top">
	<h3>Ver el mensaje de <?php echo $message['Message']['autor'] ?> </h3>
</div>
<div class="container">
	<form>
		<div class="col-md-6 your-name">
			<span>TU NOMBRE:</span>
			<?php echo $this->Form->input('autor', array( 'id' => 'autor', 'label' => false, 'value' => $message['Message']['autor'], 'disabled' => 'disabled')); ?>
		</div>
		<div class="col-md-6 your-name">
			<span>TU CORREO:</span>
			<?php echo $this->Form->input('email', array( 'type' => 'text', 'label' => false, 'value' => $message['Message']['email'], 'disabled' => true )); ?>
		</div>
		<div class="clearfix"> </div>
		<div class=" your-msg">
			<span>TU MENSAJE:</span>
			<?php echo $this->Form->input('body', array( 'id' => 'body', 'value' => $message['Message']['body'], 'type' => 'textarea', 'rows' => 5, 'label' => false, 'disabled' => true)); ?>
		</div>
	</form>
	<div class="clearfix"> </div>
</div>