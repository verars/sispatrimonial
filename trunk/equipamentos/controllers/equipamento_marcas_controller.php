<?php
class EquipamentoMarcasController extends AppController {

	var $name = 'EquipamentoMarcas';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->EquipamentoMarca->recursive = 0;
		$this->set('equipamentoMarcas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid EquipamentoMarca.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('equipamentoMarca', $this->EquipamentoMarca->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EquipamentoMarca->create();
			if ($this->EquipamentoMarca->save($this->data)) {
				$this->Session->setFlash(__('The EquipamentoMarca has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EquipamentoMarca could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid EquipamentoMarca', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->EquipamentoMarca->save($this->data)) {
				$this->Session->setFlash(__('The EquipamentoMarca has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EquipamentoMarca could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EquipamentoMarca->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for EquipamentoMarca', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EquipamentoMarca->del($id)) {
			$this->Session->setFlash(__('EquipamentoMarca deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>