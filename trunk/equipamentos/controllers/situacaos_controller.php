<?php
class SituacaosController extends AppController {

	var $name = 'Situacaos';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Situacao->recursive = 0;
		$this->set('situacaos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Situacao.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('situacao', $this->Situacao->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Situacao->create();
			if ($this->Situacao->save($this->data)) {
				$this->Session->setFlash(__('The Situacao has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Situacao could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Situacao', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Situacao->save($this->data)) {
				$this->Session->setFlash(__('The Situacao has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Situacao could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Situacao->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Situacao', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Situacao->del($id)) {
			$this->Session->setFlash(__('Situacao deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>