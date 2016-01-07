<?php
App::uses('AppController', 'Controller');
App::uses('Image', 'Model');
/**
 * Services Controller
 *
 * @property Service $Service
 * @property PaginatorComponent $Paginator
 */
class ServicesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('nails', 'mp');
	}

public function nails(){
	$manos = $this->Service->find('all', array(
        'conditions' => array('Service.category' => 'Uñas')
    ));
  	$imageModel = new Image();
    $imagenes = $imageModel->find('all');
    
    $this->set('nails', $manos);
    $this->set('imagenes', $imagenes);
}

public function mp(){
	$micropicmentacion = $this->Service->find('all', array(
        'conditions' => array('Service.category' => 'Micropicmentación')
    ));
  	$imageModel = new Image();
    $imagenes = $imageModel->find('all');
    
    $this->set('mp', $micropicmentacion);
    $this->set('imagenes', $imagenes);
}

public function da(){
	$dermoabrasion = $this->Service->find('all', array(
        'conditions' => array('Service.category' => 'Dermoabrasión')
    ));
  	$imageModel = new Image();
    $imagenes = $imageModel->find('all');
    
    $this->set('da', $dermoabrasion);
    $this->set('imagenes', $imagenes);
}

public function facialcleansing(){
	$limpiezafacial = $this->Service->find('all', array(
        'conditions' => array('Service.category' => 'Limpieza facial')
    ));
  	$imageModel = new Image();
    $imagenes = $imageModel->find('all');
    
    $this->set('fc', $limpiezafacial);
    $this->set('imagenes', $imagenes);
}

public function hair(){
		$cabello = $this->Service->find('all', array(
        'conditions' => array('Service.category' => 'Cabello')
    ));
  	$imageModel = new Image();
    $imagenes = $imageModel->find('all');
    
    $this->set('hr', $cabello);
    $this->set('imagenes', $imagenes);
}

public function hairremoval(){
		$depilacion = $this->Service->find('all', array(
        'conditions' => array('Service.category' => 'Depilación láser')
    ));
  	$imageModel = new Image();
    $imagenes = $imageModel->find('all');
    
    $this->set('hrrl', $depilacion);
    $this->set('imagenes', $imagenes);
}

public function massages(){
		$masajes = $this->Service->find('all', array(
        'conditions' => array('Service.category' => 'Masajes')
    ));
  	$imageModel = new Image();
    $imagenes = $imageModel->find('all');
    
    $this->set('ms', $masajes);
    $this->set('imagenes', $imagenes);
}

public function ultracavitacion(){
		$ultracavitacion = $this->Service->find('all', array(
        'conditions' => array('Service.category' => 'Ultracavitación')
    ));
  	$imageModel = new Image();
    $imagenes = $imageModel->find('all');
    
    $this->set('uc', $ultracavitacion);
    $this->set('imagenes', $imagenes);
}

public function vacumterapia(){
		$vacumterapia = $this->Service->find('all', array(
        'conditions' => array('Service.category' => 'Vacumpetapia')
    ));
  	$imageModel = new Image();
    $imagenes = $imageModel->find('all');
    
    $this->set('vt', $vacumterapia);
    $this->set('imagenes', $imagenes);
}


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Service->recursive = 0;
		$this->set('services', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Service->exists($id)) {
			throw new NotFoundException(__('Invalid service'));
		}
		$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));
		$this->set('service', $this->Service->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Service->create();
			if ($this->Service->save($this->request->data)) {
				$this->Session->setFlash(__('The service has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The service could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Service->exists($id)) {
			throw new NotFoundException(__('Invalid service'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Service->save($this->request->data)) {
				$this->Session->setFlash(__('The service has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The service could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));
			$this->request->data = $this->Service->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Service->id = $id;
		if (!$this->Service->exists()) {
			throw new NotFoundException(__('Invalid service'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Service->delete()) {
			$this->Session->setFlash(__('The service has been deleted.'));
		} else {
			$this->Session->setFlash(__('The service could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
