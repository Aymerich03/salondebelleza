<div class="popular" id="services">
	<h3>Editar el administrador seleccionado</h3>
	</br>
	<div class="container2">
		<?php echo $this->Form->create('User'); ?>
		<form>
			<div class="col-md-6 your-name" style="width : 100%">
				<span>NOMBRE DE USUARIO:</span>
				<?php echo $this->Form->input('id'); ?>
				<?php echo $this->Form->input('username', array('class' => 'your-name', 'id' => 'username', 'label' => false, 'placeholder' => 'Escriba el nombre del nuevo administrador.')); ?> </div>
			<div class="your-submit">
				<?php echo $this->Form->input(__('Aceptar'), array('type' => 'submit', 'label' => false)) ?>
			</div>
		</form>
		<?=$this->Form->end() ?>
	</div>
</div>