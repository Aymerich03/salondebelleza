<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<div class="content-mid-top">
	<h3>Administración de servicios</h3>
</div>
<div class="container">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>
						<?php echo $this->Paginator->sort('Categoría'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('Tipo'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('Descripción'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('Precio'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('Creado'); ?></th>
					<th><?php echo $this->Paginator->sort('modificado'); ?></th>
					<th class="actions">
						<?php echo __( 'Acciones'); ?>
					</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($services as $service): ?>
				<tr>
					<td>
						<?php echo h($service[ 'Service'][ 'category']); ?>&nbsp;</td>
					<td>
						<?php echo h($service[ 'Service'][ 'type']); ?>&nbsp;</td>
					<td>
						<?php echo h($service[ 'Service'][ 'description']); ?>&nbsp;</td>
					<td>
						<?php echo h($service[ 'Service'][ 'price']); ?>&nbsp;</td>
					<td>
						<?php echo h($service[ 'Service'][ 'created']); ?>&nbsp;</td>
					<td>
						<?php echo h($service[ 'Service'][ 'modified']); ?>&nbsp;</td>

					<td class="actions">
						<!--?php echo $this->Html->link(__('View'), array('action' => 'view', $service['Service']['id'])); ?-->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $service['Service']['id'])); ?>
						<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $service['Service']['id']), array(), __('¿Desea eliminar el servicio %s?', $service['Service']['type'] , $service['Service']['id'])); ?>
					</td>

				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	 <nav>
	    <ul class="pagination">
			<li class="previous"><?php echo $this->Paginator->prev(__(' Anteriores'), array(), null); ?></li>
			<li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
			<li class="next"><?php echo $this->Paginator->next(__('Siguientes'), array(), null); ?></li>
		</ul>
	</nav>
</div>
