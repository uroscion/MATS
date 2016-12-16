<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Techniques Controller
 *
 * @property \App\Model\Table\TechniquesTable $Techniques
 */
class TechniquesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $techniques = $this->paginate($this->Techniques);

        $this->set(compact('techniques'));
        $this->set('_serialize', ['techniques']);
    }

    /**
     * View method
     *
     * @param string|null $id Technique id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $technique = $this->Techniques->get($id, [
            'contain' => ['Topics', 'Instructionals']
        ]);

        $this->set('technique', $technique);
        $this->set('_serialize', ['technique']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $technique = $this->Techniques->newEntity();
        if ($this->request->is('post')) {
            $technique = $this->Techniques->patchEntity($technique, $this->request->data);
            if ($this->Techniques->save($technique)) {
                $this->Flash->success(__('The technique has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The technique could not be saved. Please, try again.'));
            }
        }
        $topics = $this->Techniques->Topics->find('list', ['limit' => 200]);
        $this->set(compact('technique', 'topics'));
        $this->set('_serialize', ['technique']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Technique id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $technique = $this->Techniques->get($id, [
            'contain' => ['Topics']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $technique = $this->Techniques->patchEntity($technique, $this->request->data);
            if ($this->Techniques->save($technique)) {
                $this->Flash->success(__('The technique has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The technique could not be saved. Please, try again.'));
            }
        }
        $topics = $this->Techniques->Topics->find('list', ['limit' => 200]);
        $this->set(compact('technique', 'topics'));
        $this->set('_serialize', ['technique']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Technique id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $technique = $this->Techniques->get($id);
        if ($this->Techniques->delete($technique)) {
            $this->Flash->success(__('The technique has been deleted.'));
        } else {
            $this->Flash->error(__('The technique could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
