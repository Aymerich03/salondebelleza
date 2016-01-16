<div class="content-middle" id="about">
    <div class="content-mid-top">
        <h3> Administración de la página web</h3>
    </div>
    <div class="news">
        <div class="col-md-6 new-more-at">
            <div class=" new-more-at1">
                <div class="col-md-3 about">
                    <img class="img-responsive" src="/imagess/ev.jpg" alt="">
                </div>
                <div class="col-md-9 about1">
                    <h5>Administración de imágenes</h5>
                    <li><?= $this->Html->link(__('Agregar imagen de una promoción o de algún servicio'), array('controller' => 'images', 'action' => 'add')) ?></li>
                    <li><?= $this->Html->link(__('Editar información de una imagen, o borrar una imagen'), array('controller' => 'images', 'action' => 'index')) ?></li>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-6 new-more-at">
            <div class=" new-more-at1">
                <div class="col-md-3 about">
                    <img class="img-responsive" src="/imagess/ev1.jpg" alt="">
                </div>
                <div class="col-md-9 about1">
                    <h5>Administración de mensajes</h5>
                     <li><?= $this->Html->link(__('Ver mensajes que los clientes han enviado'), array('controller' => 'messages', 'action' => 'index')) ?></li>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="news">
        <div class="col-md-6 new-more-at">
            <div class=" new-more-at1">
                <div class="col-md-3 about">
                    <img class="img-responsive" src="/imagess/ev2.jpg" alt="">
                </div>
                <div class="col-md-9 about1">
                    <h5>Administración de servicios</h5>
                     <li><?= $this->Html->link(__('Administrar los servicios'), array('controller' => 'services', 'action' => 'index')) ?></li>
                     <li><?= $this->Html->link(__('Agregar una servicio a una categoría (ejem: agregar "corte de hombre" a "cabello")'), array('controller' => 'services', 'action' => 'add')) ?></li>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-6 new-more-at">
            <div class=" new-more-at1">
                <div class="col-md-3 about">
                    <img class="img-responsive" src="/imagess/ev3.jpg" alt="">
                </div>
                <div class="col-md-9 about1">
                    <h5>Administración de usuarios</h5>
                    <li><?= $this->Html->link(__('Agregar un nuevo administrador'), array('controller' => 'users', 'action' => 'add')) ?></li>
                     <li><?= $this->Html->link(__('Editar nombre de usuarios o borrar algún administrador'), array('controller' => 'users', 'action' => 'index')) ?></li>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>