<?php
class EquipamentoTiposController extends AppController {

	var $name = 'EquipamentoTipos';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->EquipamentoTipo->recursive = 0;
		$this->set('equipamentoTipos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid EquipamentoTipo.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('equipamentoTipo', $this->EquipamentoTipo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EquipamentoTipo->create();
			if ($this->EquipamentoTipo->save($this->data)) {
				$this->Session->setFlash(__('The EquipamentoTipo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EquipamentoTipo could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid EquipamentoTipo', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->EquipamentoTipo->save($this->data)) {
				$this->Session->setFlash(__('The EquipamentoTipo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EquipamentoTipo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EquipamentoTipo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for EquipamentoTipo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EquipamentoTipo->del($id)) {
			$this->Session->setFlash(__('EquipamentoTipo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>