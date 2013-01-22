<?php 
/**
* 
*/

App::uses('AuthComponent', 'Controller/Component');


class Usuario extends AppModel
{
	//public $name = 'Usuario';

		public $validate = array(
			'login'=>array(
			'rule'=>'notEmpty'
			),
			'senha'=>array(
				'rule'=>'notEmpty'
				)
			);

		public function beforeSave($options = array()) {
			if (isset($this->data['Usuario']['senha'])) {
				$password = &$this->data['Usuario']['senha'];
				$password = AuthComponent::password($password);
			}
			return parent::beforeSave($options);
			}
		}


?>