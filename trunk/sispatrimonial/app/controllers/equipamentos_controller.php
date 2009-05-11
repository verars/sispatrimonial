<?php
class EquipamentosController extends AppController {

	var $name = 'Equipamentos';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Equipamento->recursive = 0;
		$this->set('equipamentos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Equipamento.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('equipamento', $this->Equipamento->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Equipamento->create();
			if ($this->Equipamento->save($this->data)) {
				$this->Session->setFlash(__('The Equipamento has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Equipamento could not be saved. Please, try again.', true));
			}
		}
		$marcas = $this->Equipamento->Marca->find('list');
		$catEquipamentos = $this->Equipamento->CatEquipamento->find('list');
		$this->set(compact('marcas', 'catEquipamentos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Equipamento', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Equipamento->save($this->data)) {
				$this->Session->setFlash(__('The Equipamento has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Equipamento could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Equipamento->read(null, $id);
		}
		$marcas = $this->Equipamento->Marca->find('list');
		$catEquipamentos = $this->Equipamento->CatEquipamento->find('list');
		$this->set(compact('marcas','catEquipamentos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Equipamento', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Equipamento->del($id)) {
			$this->Session->setFlash(__('Equipamento deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>