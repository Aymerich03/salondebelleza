<div class="popular" id="services">
	<h3>Agregar un nuevo servicio</h3>
	</br>
	<div class="container2">
		<?php echo $this->Form->create('Service'); ?>
		<form>
			<div class="col-md-6 your-name" style="width : 100%">
				<span>CATEGORÍA:</span>
				<?php echo $this->Form->input('category', array('class' => 'your-name', 'options' => [ 'Uñas' => 'Uñas', 'Cabello' => 'Cabello', 'Micropicmentación' => 'Micropicmentación', 'Dermoabrasion' => 'Dermoabrasion', 'Limpieza facial' => 'Limpieza facial', 'Depilación láser'
				=> 'Depilación láser', 'Masajes' => 'Masajes', 'Ultracavitación' => 'Ultracavitación', 'Radiofrecuencia facial' => 'Radiofrecuencia facial', 'Vacumterapia' => 'Vacumterapia' ], 'id' => 'category', 'label' => false, 'placeholder' => 'Elija la categoría
				global')); ?> </div>


			<div class="col-md-6 your-name" style="width : 100%">
				<span>TIPO:</span>
				<?php echo $this->Form->input('name', array('id' => 'type', 'label' => false, 'placeholder' => 'Escriba el nombre del servicio de la categoría anterior.')); ?>
			</div>
			<div class="col-md-6 your-msg" style="width : 100%">
				<span>DESCRIPCIÓN:</span>
				<?php echo $this->Form->input('description', array( 'id' => 'description', 'type' => 'textarea', 'rows' => 5, 'label' => false, 'placeholder' => 'Escriba la descripción de qué es el servicio.' )); ?>
			</div>
			<div class="col-md-6 your-name" style="width : 100%">
				<span>PRECIO:</span>
				<?php echo $this->Form->input('price', array('type' => 'number', 'label' => false, 'placeholder' => 'Ingrese un número, el precio del servicio.')); ?>
			</div>
			<div class="your-submit">
				<?php echo $this->Form->input(__('Agregar servicio'), array('type' => 'submit', 'label' => false)) ?>
			</div>
		</form>
		<?=$this->Form->end() ?>
	</div>
</div>