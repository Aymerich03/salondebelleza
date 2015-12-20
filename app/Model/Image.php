<?php
App::uses('AppModel', 'Model');
/**
 * Image Model
 *
 */
class Image extends AppModel {

	public $actsAs = array(
		'Upload.Upload' => array(
			'pic' => array(
				'fields' => array(
					'dir' => 'pic_dir'
				),
				'thumbnailMethod' => 'php',
				'thumbnailSizes' => array(
					'vga' => '640x480',
					'thumb' => '600x337'
				),
				'deleteOnUpdate' => true,
				'deleteFolderOnDelete' => true
			)
		)
		
	);
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'category' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	
	);
}
