<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<div class="content-mid-top">
	<h3>Administración de imágenes</h3>
</div>
<div class="container">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('Tipo'); ?></th>
					<th><?php echo $this->Paginator->sort('Descripción'); ?></th>
					<th><?php echo $this->Paginator->sort('Precio'); ?></th>
					<th><?php echo $this->Paginator->sort('Imagen'); ?></th>
					<th><?php echo $this->Paginator->sort('Creado'); ?></th>
					<th><?php echo $this->Paginator->sort('Modificado'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
				</tr>
			</thead>

		<tbody>
			<?php foreach ($images as $image): ?>
				<tr>
					<td><?php echo h($image['Image']['category']); ?>&nbsp;</td>
					<td><?php echo h($image['Image']['description']); ?>&nbsp;</td>
					<td><?php echo h($image['Image']['price']); ?>&nbsp;</td>
					<td><?php echo h($image['Image']['pic']); ?>&nbsp;</td>
					<td><?php echo $this->Html->image('/files/image/pic/' . $image['Image']['pic_dir']. '/' . 'thumb_' . $image['Image']['pic'])?>
					<td><?php echo h($image['Image']['created']); ?>&nbsp;</td>
					<td><?php echo h($image['Image']['modified']); ?>&nbsp;</td>
					<td class="actions">
						<!--?php echo $this->Html->link(__('View'), array('action' => 'view', $image['Image']['id'])); ?-->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $image['Image']['id'])); ?>
						<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $image['Image']['id']), array(), __('Are you sure you want to delete # %s?', $image['Image']['id'])); ?>
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
