<div class="content-mid-top">
	<h3>Ingresa una nueva imagen</h3>
</div>

<div class="container2">
	<?php echo $this->Form->create('Image', array('type' => 'file',  'novalidate' => 'novalidate')); ?>
	<form>
		<div class="col-md-6 your-name" style="width : 100%">
			<span>TIPO:</span>
			<?php echo $this->Form->input('category', array('class' => 'your-name', 'id' => 'category', 'options' => [ $servicios, 'Promociones' => 'Promociones'] , 'label' => false, 'placeholder' => 'Elige la categoría global')); ?>	</div>
		<div class="col-md-6 your-msg" style="width : 100%">
			<span>DESCRIPCIÓN:</span>
			<?php echo $this->Form->input('description', array( 'id' => 'description', 'type' => 'textarea', 'rows' => 5, 'label' => false, 'placeholder' => 'Escribe cualquier info adicional que quieres decir de la foto' )); ?>
		</div>
		
		<div class="col-md-6 your-name" style="width : 100%">
			<span>PRECIO:</span>
			<?php echo $this->Form->input('price', array('type' => 'number', 'label' => false, 'placeholder' => 'Ingrese el precio, si es distinto a la categoría principal')); ?>
		</div>
		<div class="col-md-6 your-name" style="width : 100%">
			<span>IMAGEN:</span>
			<?php echo $this->Form->input('pic', array('type' => 'file', 'label' => false, 'placeholder' => 'Ingrese la imagen')); ?>
		</div>
		<?php	echo $this->Form->input('pic_dir', array('type' => 'hidden')); ?>
		<div class="your-submit">
			<?php echo $this->Form->input(__('Agregar imagen'), array('type' => 'submit', 'label' => false)) ?>
		</div>
	</form>
	<?= $this->Form->end() ?>
</div>