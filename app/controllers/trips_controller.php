<?php
class TripsController extends AppController {

	var $name = 'Trips';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Trip->recursive = 0;
		$this->set('trips', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Trip', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('trip', $this->Trip->read(null, $id));
	}

	function add() {		
		if (!empty($this->data)) {
			if(!$this->debug)
			{
				$this->validate();// see app_controler
			}
			$this->Trip->create();
			if ($this->Trip->save($this->data)) {
				echo json_encode(array('trip_id'=>$this->Trip->id));exit;
			
			} else {
					echo json_encode(array("error"=>"Unable to create new trips at this time. Please try again shortly."));exit;
				}
			}
		}
	}
	function end_run()
	{
		if(!empty($this->data))
		{
			if(!$this->debug)
			{
				$this->validate();//see app_controler
			}
			#TODO verify that user actually can modify the trip
			#TODO actually write this function to update final_comment
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Trip', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Trip->save($this->data)) {
				$this->Session->setFlash(__('The Trip has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Trip could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Trip->read(null, $id);
		}
		$trips = $this->Trip->Trip->find('list');
		$snaptics = $this->Trip->Snaptic->find('list');
		$this->set(compact('trips','snaptics'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Trip', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Trip->del($id)) {
			$this->Session->setFlash(__('Trip deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Trip could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}


	function admin_index() {
		$this->Trip->recursive = 0;
		$this->set('trips', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Trip', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('trip', $this->Trip->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Trip->create();
			if ($this->Trip->save($this->data)) {
				$this->Session->setFlash(__('The Trip has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Trip could not be saved. Please, try again.', true));
			}
		}
		$trips = $this->Trip->Trip->find('list');
		$snaptics = $this->Trip->Snaptic->find('list');
		$this->set(compact('trips', 'snaptics'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Trip', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Trip->save($this->data)) {
				$this->Session->setFlash(__('The Trip has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Trip could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Trip->read(null, $id);
		}
		$trips = $this->Trip->Trip->find('list');
		$snaptics = $this->Trip->Snaptic->find('list');
		$this->set(compact('trips','snaptics'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Trip', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Trip->del($id)) {
			$this->Session->setFlash(__('Trip deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Trip could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>
