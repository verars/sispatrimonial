<?php
class AcessorioTiposController extends AppController {

	var $name = 'AcessorioTipos';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AcessorioTipo->recursive = 0;
		$this->set('acessorioTipos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AcessorioTipo.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('acessorioTipo', $this->AcessorioTipo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AcessorioTipo->create();
			if ($this->AcessorioTipo->save($this->data)) {
				$this->Session->setFlash(__('The AcessorioTipo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AcessorioTipo could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AcessorioTipo', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AcessorioTipo->save($this->data)) {
				$this->Session->setFlash(__('The AcessorioTipo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AcessorioTipo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AcessorioTipo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AcessorioTipo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AcessorioTipo->del($id)) {
			$this->Session->setFlash(__('AcessorioTipo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>