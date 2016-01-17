<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<div class="popular" id="us">
	<h3>Administración de usuarios</h3>
	<div class="container">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>
							<?php echo $this->Paginator->sort('Usuario'); ?></th>
						<th>
							<?php echo $this->Paginator->sort('Contraseña'); ?></th>
						<th>
							<?php echo $this->Paginator->sort('Creado'); ?></th>
						<th>
							<?php echo $this->Paginator->sort('Modificado'); ?></th>
						<th class="actions">
							<?php echo __( 'Acciones'); ?>
						</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($users as $user): ?>
					<tr>

						<td>
							<?php echo h($user[ 'User'][ 'username']); ?>&nbsp;</td>
						<td>
							<?php echo h($user[ 'User'][ 'password']); ?>&nbsp;</td>

						<td>
							<?php echo h($user[ 'User'][ 'created']); ?>&nbsp;</td>
						<td>
							<?php echo h($user[ 'User'][ 'modified']); ?>&nbsp;</td>
						<td class="actions">

							<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?>
							<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $user['User']['id']), array(), __('Está seguro que desea borrar # %s?', $user['User']['username'])); ?>
						</td>


					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<nav>
			<ul class="pagination">
				<li class="previous">
					<?php echo $this->Paginator->prev(__(' Anteriores'), array(), null); ?></li>
				<li>
					<?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
				<li class="next">
					<?php echo $this->Paginator->next(__('Siguientes'), array(), null); ?></li>
			</ul>
		</nav>
	</div>
</div>
