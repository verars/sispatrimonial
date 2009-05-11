<?php
class CatEquipamentosController extends AppController {

	var $name = 'CatEquipamentos';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->CatEquipamento->recursive = 0;
		$this->set('catEquipamentos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid CatEquipamento.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('catEquipamento', $this->CatEquipamento->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CatEquipamento->create();
			if ($this->CatEquipamento->save($this->data)) {
				$this->Session->setFlash(__('The CatEquipamento has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The CatEquipamento could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid CatEquipamento', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->CatEquipamento->save($this->data)) {
				$this->Session->setFlash(__('The CatEquipamento has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The CatEquipamento could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CatEquipamento->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for CatEquipamento', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CatEquipamento->del($id)) {
			$this->Session->setFlash(__('CatEquipamento deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>