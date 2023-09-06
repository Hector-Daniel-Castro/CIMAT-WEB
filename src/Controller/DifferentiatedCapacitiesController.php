<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DifferentiatedCapacities Controller
 *
 * @property \App\Model\Table\DifferentiatedCapacitiesTable $DifferentiatedCapacities
 * @method \App\Model\Entity\DifferentiatedCapacity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DifferentiatedCapacitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $differentiatedCapacities = $this->paginate($this->DifferentiatedCapacities);

        $this->set(compact('differentiatedCapacities'));
    }

    /**
     * View method
     *
     * @param string|null $id Differentiated Capacity id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $differentiatedCapacity = $this->DifferentiatedCapacities->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('differentiatedCapacity'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $differentiatedCapacity = $this->DifferentiatedCapacities->newEmptyEntity();
        if ($this->request->is('post')) {
            $differentiatedCapacity = $this->DifferentiatedCapacities->patchEntity($differentiatedCapacity, $this->request->getData());
            if ($this->DifferentiatedCapacities->save($differentiatedCapacity)) {
                $this->Flash->success(__('The differentiated capacity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The differentiated capacity could not be saved. Please, try again.'));
        }
        $this->set(compact('differentiatedCapacity'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Differentiated Capacity id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $differentiatedCapacity = $this->DifferentiatedCapacities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $differentiatedCapacity = $this->DifferentiatedCapacities->patchEntity($differentiatedCapacity, $this->request->getData());
            if ($this->DifferentiatedCapacities->save($differentiatedCapacity)) {
                $this->Flash->success(__('The differentiated capacity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The differentiated capacity could not be saved. Please, try again.'));
        }
        $this->set(compact('differentiatedCapacity'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Differentiated Capacity id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $differentiatedCapacity = $this->DifferentiatedCapacities->get($id);
        if ($this->DifferentiatedCapacities->delete($differentiatedCapacity)) {
            $this->Flash->success(__('The differentiated capacity has been deleted.'));
        } else {
            $this->Flash->error(__('The differentiated capacity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
