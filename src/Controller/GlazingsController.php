<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Glazings Controller
 *
 * @property \App\Model\Table\GlazingsTable $Glazings */
class GlazingsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('glazings', $this->paginate($this->Glazings));
        $this->set('_serialize', ['glazings']);
    }

    /**
     * View method
     *
     * @param string|null $id Glazing id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $glazing = $this->Glazings->get($id, [
            'contain' => ['Products']
        ]);
        $this->set('glazing', $glazing);
        $this->set('_serialize', ['glazing']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $glazing = $this->Glazings->newEntity();
        if ($this->request->is('post')) {
            $glazing = $this->Glazings->patchEntity($glazing, $this->request->data);
            if ($this->Glazings->save($glazing)) {
                $this->Flash->success('The glazing has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The glazing could not be saved. Please, try again.');
            }
        }
        $this->set(compact('glazing'));
        $this->set('_serialize', ['glazing']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Glazing id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $glazing = $this->Glazings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $glazing = $this->Glazings->patchEntity($glazing, $this->request->data);
            if ($this->Glazings->save($glazing)) {
                $this->Flash->success('The glazing has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The glazing could not be saved. Please, try again.');
            }
        }
        $this->set(compact('glazing'));
        $this->set('_serialize', ['glazing']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Glazing id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $glazing = $this->Glazings->get($id);
        if ($this->Glazings->delete($glazing)) {
            $this->Flash->success('The glazing has been deleted.');
        } else {
            $this->Flash->error('The glazing could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
