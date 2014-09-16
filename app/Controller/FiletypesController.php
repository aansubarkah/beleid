<?php
App::uses('AppController', 'Controller');
/**
 * Filetypes Controller
 *
 * @property Filetype $Filetype
 * @property PaginatorComponent $Paginator
 */
class FiletypesController extends AppController {

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
		$this->Filetype->recursive = 0;
		$this->set('filetypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Filetype->exists($id)) {
			throw new NotFoundException(__('Invalid filetype'));
		}
		$options = array('conditions' => array('Filetype.' . $this->Filetype->primaryKey => $id));
		$this->set('filetype', $this->Filetype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Filetype->create();
			if ($this->Filetype->save($this->request->data)) {
				$this->Session->setFlash(__('The filetype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The filetype could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Filetype->exists($id)) {
			throw new NotFoundException(__('Invalid filetype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Filetype->save($this->request->data)) {
				$this->Session->setFlash(__('The filetype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The filetype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Filetype.' . $this->Filetype->primaryKey => $id));
			$this->request->data = $this->Filetype->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Filetype->id = $id;
		if (!$this->Filetype->exists()) {
			throw new NotFoundException(__('Invalid filetype'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Filetype->delete()) {
			$this->Session->setFlash(__('The filetype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The filetype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
