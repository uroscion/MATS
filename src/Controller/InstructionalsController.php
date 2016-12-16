<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Instructionals Controller
 *
 * @property \App\Model\Table\InstructionalsTable $Instructionals
 */
class InstructionalsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Techniques', 'Sources']
        ];
        $instructionals = $this->paginate($this->Instructionals);

        $this->set(compact('instructionals'));
        $this->set('_serialize', ['instructionals']);
    }

    /**
     * View method
     *
     * @param string|null $id Instructional id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $instructional = $this->Instructionals->get($id, [
            'contain' => ['Techniques', 'Sources', 'InstrImageTexts']
        ]);

        $this->set('instructional', $instructional);
        $this->set('_serialize', ['instructional']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $instructional = $this->Instructionals->newEntity();
        if ($this->request->is('post')) {
            $instructional = $this->Instructionals->patchEntity($instructional, $this->request->data);
            if ($this->Instructionals->save($instructional)) {
                $this->Flash->success(__('The instructional has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instructional could not be saved. Please, try again.'));
            }
        }
        $techniques = $this->Instructionals->Techniques->find('list', ['limit' => 200]);
        $sources = $this->Instructionals->Sources->find('list', ['limit' => 200]);
        $this->set(compact('instructional', 'techniques', 'sources'));
        $this->set('_serialize', ['instructional']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Instructional id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $instructional = $this->Instructionals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $instructional = $this->Instructionals->patchEntity($instructional, $this->request->data);
            if ($this->Instructionals->save($instructional)) {
                $this->Flash->success(__('The instructional has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instructional could not be saved. Please, try again.'));
            }
        }
        $techniques = $this->Instructionals->Techniques->find('list', ['limit' => 200]);
        $sources = $this->Instructionals->Sources->find('list', ['limit' => 200]);
        $this->set(compact('instructional', 'techniques', 'sources'));
        $this->set('_serialize', ['instructional']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Instructional id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $instructional = $this->Instructionals->get($id);
        if ($this->Instructionals->delete($instructional)) {
            $this->Flash->success(__('The instructional has been deleted.'));
        } else {
            $this->Flash->error(__('The instructional could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
