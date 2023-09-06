<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LearningProblems Controller
 *
 * @property \App\Model\Table\LearningProblemsTable $LearningProblems
 * @method \App\Model\Entity\LearningProblem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LearningProblemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $learningProblems = $this->paginate($this->LearningProblems);

        $this->set(compact('learningProblems'));
    }

    /**
     * View method
     *
     * @param string|null $id Learning Problem id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $learningProblem = $this->LearningProblems->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('learningProblem'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $learningProblem = $this->LearningProblems->newEmptyEntity();
        if ($this->request->is('post')) {
            $learningProblem = $this->LearningProblems->patchEntity($learningProblem, $this->request->getData());
            if ($this->LearningProblems->save($learningProblem)) {
                $this->Flash->success(__('The learning problem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The learning problem could not be saved. Please, try again.'));
        }
        $this->set(compact('learningProblem'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Learning Problem id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $learningProblem = $this->LearningProblems->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $learningProblem = $this->LearningProblems->patchEntity($learningProblem, $this->request->getData());
            if ($this->LearningProblems->save($learningProblem)) {
                $this->Flash->success(__('The learning problem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The learning problem could not be saved. Please, try again.'));
        }
        $this->set(compact('learningProblem'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Learning Problem id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $learningProblem = $this->LearningProblems->get($id);
        if ($this->LearningProblems->delete($learningProblem)) {
            $this->Flash->success(__('The learning problem has been deleted.'));
        } else {
            $this->Flash->error(__('The learning problem could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
