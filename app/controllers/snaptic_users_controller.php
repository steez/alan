<?php
class SnapticUsersController extends AppController {

	var $name = 'SnapticUsers';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SnapticUser->recursive = 0;
		$this->set('snapticUsers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SnapticUser', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('snapticUser', $this->SnapticUser->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SnapticUser->create();
			if ($this->SnapticUser->save($this->data)) {
				$this->Session->setFlash(__('The SnapticUser has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The SnapticUser could not be saved. Please, try again.', true));
			}
		}
		$users = $this->SnapticUser->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SnapticUser', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SnapticUser->save($this->data)) {
				$this->Session->setFlash(__('The SnapticUser has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The SnapticUser could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SnapticUser->read(null, $id);
		}
		$users = $this->SnapticUser->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SnapticUser', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->SnapticUser->del($id)) {
			$this->Session->setFlash(__('SnapticUser deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The SnapticUser could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}


	function admin_index() {
		$this->SnapticUser->recursive = 0;
		$this->set('snapticUsers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SnapticUser', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('snapticUser', $this->SnapticUser->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->SnapticUser->create();
			if ($this->SnapticUser->save($this->data)) {
				$this->Session->setFlash(__('The SnapticUser has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The SnapticUser could not be saved. Please, try again.', true));
			}
		}
		$users = $this->SnapticUser->User->find('list');
		$this->set(compact('users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SnapticUser', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SnapticUser->save($this->data)) {
				$this->Session->setFlash(__('The SnapticUser has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The SnapticUser could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SnapticUser->read(null, $id);
		}
		$users = $this->SnapticUser->User->find('list');
		$this->set(compact('users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SnapticUser', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->SnapticUser->del($id)) {
			$this->Session->setFlash(__('SnapticUser deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The SnapticUser could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>