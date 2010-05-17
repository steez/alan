<?php
class TripCheckInsController extends AppController {

	var $name = 'TripCheckIns';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->TripCheckIn->recursive = 0;
		$this->set('tripCheckIns', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TripCheckIn', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tripCheckIn', $this->TripCheckIn->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TripCheckIn->create();
			if ($this->TripCheckIn->save($this->data)) {
				$this->Session->setFlash(__('The TripCheckIn has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The TripCheckIn could not be saved. Please, try again.', true));
			}
		}
		$users = $this->TripCheckIn->User->find('list');
		$trips = $this->TripCheckIn->Trip->find('list');
		$this->set(compact('users', 'trips'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TripCheckIn', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TripCheckIn->save($this->data)) {
				$this->Session->setFlash(__('The TripCheckIn has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The TripCheckIn could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TripCheckIn->read(null, $id);
		}
		$users = $this->TripCheckIn->User->find('list');
		$trips = $this->TripCheckIn->Trip->find('list');
		$this->set(compact('users','trips'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TripCheckIn', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->TripCheckIn->del($id)) {
			$this->Session->setFlash(__('TripCheckIn deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The TripCheckIn could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}


	function admin_index() {
		$this->TripCheckIn->recursive = 0;
		$this->set('tripCheckIns', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TripCheckIn', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tripCheckIn', $this->TripCheckIn->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->TripCheckIn->create();
			if ($this->TripCheckIn->save($this->data)) {
				$this->Session->setFlash(__('The TripCheckIn has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The TripCheckIn could not be saved. Please, try again.', true));
			}
		}
		$users = $this->TripCheckIn->User->find('list');
		$trips = $this->TripCheckIn->Trip->find('list');
		$this->set(compact('users', 'trips'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TripCheckIn', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TripCheckIn->save($this->data)) {
				$this->Session->setFlash(__('The TripCheckIn has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The TripCheckIn could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TripCheckIn->read(null, $id);
		}
		$users = $this->TripCheckIn->User->find('list');
		$trips = $this->TripCheckIn->Trip->find('list');
		$this->set(compact('users','trips'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TripCheckIn', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->TripCheckIn->del($id)) {
			$this->Session->setFlash(__('TripCheckIn deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The TripCheckIn could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>