<div class="popular" id="services">
    <h3>Ingreso al sitio</h3>



<div class="container2">
    <?php echo $this->Form->create('User'); ?>
    <form>
        <div class="col-md-6 your-name" style="width : 100%">
            <span>USUARIO:</span>
            <?php echo $this->Form->input('username', array('id' => 'username', 'class' => 'your-name', 'label' => false, 'placeholder' => 'Ingrese nombre de usuario')); ?> </div>

        <div class="col-md-6 your-name" style="width : 100%">
            <span>PASSWORD:</span>
            <?php echo $this->Form->input('password', array('type' => 'password','id' => 'password', 'label' => false, 'placeholder' => 'Ingrese contraseña')); ?>
        </div>
        <div class="your-submit">
            <?php echo $this->Form->input(__('Ingresar'), array('type' => 'submit', 'label' => false)) ?>
        </div>
    </form>
    <?= $this->Form->end() ?>
</div>
</div>