<?php
App::uses('AppController', 'Controller');
/**
 * Moderators Controller
 *
 * @property Moderator $Moderator
 * @property PaginatorComponent $Paginator
 */
class ModeratorsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Moderator->recursive = 0;
		$this->set('moderators', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Moderator->exists($id)) {
			throw new NotFoundException(__('Invalid moderator'));
		}
		$options = array('conditions' => array('Moderator.' . $this->Moderator->primaryKey => $id));
		$this->set('moderator', $this->Moderator->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Moderator->create();
			if ($this->Moderator->save($this->request->data)) {
				$this->Session->setFlash(__('The moderator has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The moderator could not be saved. Please, try again.'));
			}
		}
		$users = $this->Moderator->User->find('list');
		$categories = $this->Moderator->Category->find('list');
		$this->set(compact('users', 'categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Moderator->exists($id)) {
			throw new NotFoundException(__('Invalid moderator'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Moderator->save($this->request->data)) {
				$this->Session->setFlash(__('The moderator has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The moderator could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Moderator.' . $this->Moderator->primaryKey => $id));
			$this->request->data = $this->Moderator->find('first', $options);
		}
		$users = $this->Moderator->User->find('list');
		$categories = $this->Moderator->Category->find('list');
		$this->set(compact('users', 'categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Moderator->id = $id;
		if (!$this->Moderator->exists()) {
			throw new NotFoundException(__('Invalid moderator'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Moderator->delete()) {
			$this->Session->setFlash(__('The moderator has been deleted.'));
		} else {
			$this->Session->setFlash(__('The moderator could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
