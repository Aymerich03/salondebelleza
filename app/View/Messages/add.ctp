<div class="popular" id="services">
	<h3>Contáctanos</h3>
	<div class="contact" id="contact">
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.91163207516!2d2.3470599!3d48.85885894999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1436340519910"
			allowfullscreen=""></iframe>
		</div>
		<div class="container">
			<?php echo $this->Form->create('Message'); ?>
			<div class=" contact-box">
				<div class="col-md-6 contact-info">
					<h3 style= "text-align: left">Vísítenos:</h3>
					<p>Estamos 150 Norte del Centro Comercial Decosure</p>
					<p>Nuestro horario es de 9 am a 6 pm, de lunes a sábado</p>
				</div>
				<div class="col-md-6 contact-form">
					<form>
						<div class="col-md-6 your-name">
							<span>TU NOMBRE:</span>
							<?php echo $this->Form->input('autor', array( 'id' => 'autor', 'label' => false, 'placeholder' => 'Escribe tu nombre')); ?>
						</div>
						<div class="col-md-6 your-name">
							<span>TU CORREO:</span>
							<?php echo $this->Form->input('email', array( 'type' => 'text', 'label' => false, 'placeholder' => 'Escribe tu correo electrónico' )); ?>
						</div>
						<div class="clearfix"> </div>
						<div class=" your-msg">
							<span>TU MENSAJE:</span>
							<?php echo $this->Form->input('body', array( 'id' => 'body', 'placeholder' => 'Escribe tu mensaje', 'type' => 'textarea', 'rows' => 5, 'label' => false)); ?>
						</div>
						<div class="your-submit">
							<?php echo $this->Form->input(__('Enviar mensaje'), array('type' => 'submit', 'label' => false)) ?>
						</div>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<?=$this->Form->end() ?>
		</div>
	</div>
</div>