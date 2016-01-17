<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<div class="popular" id="services">
    <h3>Administración de mensajes</h3>
    
<div class="container">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('Autor'); ?></th>
					<th><?php echo $this->Paginator->sort('Correo'); ?></th>
					<th><?php echo $this->Paginator->sort('Mensaje'); ?></th>
					<th><?php echo $this->Paginator->sort('Fecha'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($messages as $message): ?>
					<tr>
						<td><?php echo h($message['Message']['autor']); ?>&nbsp;</td>
						<td><?php echo h($message['Message']['email']); ?>&nbsp;</td>
						<td><?php echo h($message['Message']['body']); ?>&nbsp;</td>
						<td><?php echo h($message['Message']['created']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $message['Message']['id'])); ?>
							<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $message['Message']['id']), array(), __('Seguro que desea borrar el mensaje de %s?', $message['Message']['autor'])); ?>
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
</div>