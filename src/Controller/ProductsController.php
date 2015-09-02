<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products */
class ProductsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Colours', 'Balratings', 'Itemtypes', 'Designs', 'Reveals', 'Flyscreenmeshes', 'Glazings']
        ];
        $this->set('products', $this->paginate($this->Products));
        $this->set('_serialize', ['products']);
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Colours', 'Balratings', 'Itemtypes', 'Designs', 'Reveals', 'Flyscreenmeshes', 'Glazings', 'Quotes']
        ]);
        $this->set('product', $product);
        $this->set('_serialize', ['product']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success('The product has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The product could not be saved. Please, try again.');
            }
        }
        $colours = $this->Products->Colours->find('list', ['limit' => 200]);
        $balratings = $this->Products->Balratings->find('list', ['limit' => 200]);
        $itemtypes = $this->Products->Itemtypes->find('list', ['limit' => 200]);
        $designs = $this->Products->Designs->find('list', ['limit' => 200]);
        $reveals = $this->Products->Reveals->find('list', ['limit' => 200]);
        $flyscreenmeshes = $this->Products->Flyscreenmeshes->find('list', ['limit' => 200]);
        $glazings = $this->Products->Glazings->find('list', ['limit' => 200]);
        $this->set(compact('product', 'colours', 'balratings', 'itemtypes', 'designs', 'reveals', 'flyscreenmeshes', 'glazings'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success('The product has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The product could not be saved. Please, try again.');
            }
        }
        $colours = $this->Products->Colours->find('list', ['limit' => 200]);
        $balratings = $this->Products->Balratings->find('list', ['limit' => 200]);
        $itemtypes = $this->Products->Itemtypes->find('list', ['limit' => 200]);
        $designs = $this->Products->Designs->find('list', ['limit' => 200]);
        $reveals = $this->Products->Reveals->find('list', ['limit' => 200]);
        $flyscreenmeshes = $this->Products->Flyscreenmeshes->find('list', ['limit' => 200]);
        $glazings = $this->Products->Glazings->find('list', ['limit' => 200]);
        $this->set(compact('product', 'colours', 'balratings', 'itemtypes', 'designs', 'reveals', 'flyscreenmeshes', 'glazings'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success('The product has been deleted.');
        } else {
            $this->Flash->error('The product could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
