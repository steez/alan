<?php
class SnapticsController extends AppController {

	var $name = 'Snaptics';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Snaptic->recursive = 0;
		$this->set('snaptics', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Snaptic', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('snaptic', $this->Snaptic->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Snaptic->create();
			if ($this->Snaptic->save($this->data)) {
				$this->Session->setFlash(__('The Snaptic has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Snaptic could not be saved. Please, try again.', true));
			}
		}
		$snapticUsers = $this->Snaptic->SnapticUser->find('list');
		$this->set(compact('snapticUsers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Snaptic', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Snaptic->save($this->data)) {
				$this->Session->setFlash(__('The Snaptic has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Snaptic could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Snaptic->read(null, $id);
		}
		$snapticUsers = $this->Snaptic->SnapticUser->find('list');
		$this->set(compact('snapticUsers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Snaptic', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Snaptic->del($id)) {
			$this->Session->setFlash(__('Snaptic deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Snaptic could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}


	function admin_index() {
		$this->Snaptic->recursive = 0;
		$this->set('snaptics', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Snaptic', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('snaptic', $this->Snaptic->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Snaptic->create();
			if ($this->Snaptic->save($this->data)) {
				$this->Session->setFlash(__('The Snaptic has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Snaptic could not be saved. Please, try again.', true));
			}
		}
		$snapticUsers = $this->Snaptic->SnapticUser->find('list');
		$this->set(compact('snapticUsers'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Snaptic', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Snaptic->save($this->data)) {
				$this->Session->setFlash(__('The Snaptic has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Snaptic could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Snaptic->read(null, $id);
		}
		$snapticUsers = $this->Snaptic->SnapticUser->find('list');
		$this->set(compact('snapticUsers'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Snaptic', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Snaptic->del($id)) {
			$this->Session->setFlash(__('Snaptic deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Snaptic could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>