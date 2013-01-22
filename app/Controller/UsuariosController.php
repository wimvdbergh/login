<?php

/**
* 
*/
class UsuariosController extends AppController
{
	

	

	public function index(){
		
	}

	 public function add() {
        if ($this->request->is('post')) {
            $this->Usuario->create();
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash(__('Usuario salvo com sucesso.'));
                $this->redirect(array('controller'=>'pages','action' => 'index'));
            } else {
                $this->Session->setFlash(__('Usuario não foi salvo.tente novamente.'));
            }
        }
    }

	public function login(){
		$isPost = $this->request->isPost();
		if($isPost && !empty($this->request->data)){
			if($this->Auth->login()){
				$this->redirect($this->Auth->redirect());
			}else{
				$this->Session->setFlash('dados incorretos.');
			}

		}else{
			$this->Session->setFlash('Não foi enviado dados');
		}

	}

	public function logout(){
		$this->redirect($this->Auth->logout());

	}
}



?>
