<?php 
//messagens de erro
//echo $this->Session->setFlash();
//messagens de erro do authcomponent


echo $this->Form->create('Usuario');
echo $this->Form->input('nome');
echo $this->Form->input('login');
echo $this->Form->input('senha',array('type'=>'password'));
echo $this->Form->end('Enviar Dados');

?>