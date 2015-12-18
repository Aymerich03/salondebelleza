<div class="content-mid-top">
	<h3>Edita el servicio seleccionado</h3>
</div>

<div class="container2">
	<?php echo $this->Form->create('Service'); ?>
	<form>
		<div class="col-md-6 your-name" style="width : 100%">
			<span>CATEGORÍA:</span>
			<?php echo $this->Form->input('id'); ?>
			<?php echo $this->Form->input('category', array('class' => 'your-name', 'options' => [ 'Uñas' => 'Uñas', 
																							'Cabello' => 'Cabello', 'Micropicmentación' => 'Micropicmentación', 
																							'Dermoabrasion' => 'Dermoabrasion', 'Limpieza facial' => 'Limpieza facial', 
																							'Depilación láser' => 'Depilación láser', 'Masajes' => 'Masajes', 
																							'Ultracavitación' => 'Ultracavitación',	'Radiofrecuencia facial' => 'Radiofrecuencia facial', 				
																							'Vacumterapia' => 'Vacumterapia' ], 'id' => 'category', 'label' => false, 'placeholder' => 'Elige la categoría global')); ?>	</div>
		<div class="col-md-6 your-name" style="width : 100%">
			<span>TIPO:</span>
			<?php echo $this->Form->input('type', array('id' => 'type', 'label' => false, 'placeholder' => 'Elije el tipo de servicio de la categoría anterior')); ?>
		</div>
		<div class="col-md-6 your-msg" style="width : 100%">
			<span>DESCRIPCIÓN:</span>
			<?php echo $this->Form->input('description', array( 'id' => 'description', 'type' => 'textarea', 'rows' => 5, 'label' => false, 'placeholder' => 'Escribe la descripción de qué es el servicio' )); ?>
		</div>
		<div class="col-md-6 your-name" style="width : 100%">
			<span>PRECIO:</span>
			<?php echo $this->Form->input('price', array('type' => 'number', 'label' => false, 'placeholder' => 'Ingrese un número, el precio del servicio')); ?>
		</div>
		<div class="your-submit">
			<?php echo $this->Form->input(__('Editar servicio'), array('type' => 'submit', 'label' => false)) ?>
		</div>
	</form>
	<?= $this->Form->end() ?>
</div>