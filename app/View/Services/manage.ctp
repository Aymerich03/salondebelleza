<div class="content-mid-top">
    <div class="popular" id="mss">
        <h3>Administración del sitio web</h3>
        <div class="container">
            <div class="news">
                <div class="col-md-6 new-more-at">
                    <div class=" new-more-at1">
                        <div class="col-md-3 about">
                            <img class="img-responsive" src="/imagess/images.png" alt="">
                        </div>
                        <div class="col-md-9 about1">
                            <h5>Administración de imágenes</h5>
                            <li>
                                <small>
                                    <?=$this->Html->link(__('Agregar imagen de una promoción o de algún servicio.'), array('controller' => 'images', 'action' => 'add')) ?>
                                </small>
                            </li>
                            <li>
                                <small> 
                                    <?=$this->Html->link(__('Editar la información de una imagen o borrarla.'), array('controller' => 'images', 'action' => 'index')) ?> 
                                </small>
                            </li>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 new-more-at">
                    <div class=" new-more-at1">
                        <div class="col-md-3 about">
                            <img class="img-responsive" src="/imagess/messages.png" alt="">
                        </div>
                        <div class="col-md-9 about1">
                            <h5>Administración de mensajes</h5>
                            <li>
                                <small>
                                    <?=$this->Html->link(__('Ver mensajes que los clientes han enviado'), array('controller' => 'messages', 'action' => 'index')) ?>
                                </small>
                            </li>
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
                            <img class="img-responsive" src="/imagess/services.png" alt="">
                        </div>
                        <div class="col-md-9 about1">
                            <h5>Administración de servicios</h5>
                            <li>
                                <small>
                                    <?=$this->Html->link(__('Agregar una servicio a una categoría (ejem: agregar "Corte para hombre" a "Cabello")'), array('controller' => 'services', 'action' => 'add')) ?> 
                                </small>
                            </li>
                            <li> 
                                <small>
                                    <?=$this->Html->link(__('Editar la información de un servicio o borrarlo'), array('controller' => 'services', 'action' => 'index')) ?>
                                </small>
                            </li>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 new-more-at">
                    <div class=" new-more-at1">
                        <div class="col-md-3 about">
                            <img class="img-responsive" src="/imagess/users.png" alt="">
                        </div>
                        <div class="col-md-9 about1">
                            <h5>Administración de usuarios</h5>
                            <li>
                                <small>
                                    <?=$this->Html->link(__('Agregar un nuevo administrador'), array('controller' => 'users', 'action' => 'add')) ?>
                                </small>
                            </li>
                            <li>
                                <small>
                                    <?=$this->Html->link(__('Editar nombre de usuario o borrar algún administrador'), array('controller' => 'users', 'action' => 'index')) ?> 
                                </small>
                            </li>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>