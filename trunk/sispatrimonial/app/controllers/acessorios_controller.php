<?php
class AcessoriosController extends AppController {

	var $name = 'Acessorios';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Acessorio->recursive = 0;
		$this->set('acessorios', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Acessorio.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('acessorio', $this->Acessorio->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Acessorio->create();
			if ($this->Acessorio->save($this->data)) {
				$this->Session->setFlash(__('The Acessorio has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Acessorio could not be saved. Please, try again.', true));
			}
		}
		$situacaos = $this->Acessorio->Situacao->find('list');
		$acessorioTipos = $this->Acessorio->AcessorioTipo->find('list');
		$equipamentos = $this->Acessorio->Equipamento->find('list');
		$this->set(compact('situacaos', 'acessorioTipos', 'equipamentos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Acessorio', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Acessorio->save($this->data)) {
				$this->Session->setFlash(__('The Acessorio has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Acessorio could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Acessorio->read(null, $id);
		}
		$situacaos = $this->Acessorio->Situacao->find('list');
		$acessorioTipos = $this->Acessorio->AcessorioTipo->find('list');
		$equipamentos = $this->Acessorio->Equipamento->find('list');
		$this->set(compact('situacaos','acessorioTipos','equipamentos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Acessorio', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Acessorio->del($id)) {
			$this->Session->setFlash(__('Acessorio deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>