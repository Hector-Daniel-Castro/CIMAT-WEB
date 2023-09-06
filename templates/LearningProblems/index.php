<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\LearningProblem> $learningProblems
 */
?>
<div class="learningProblems index content">
    <?= $this->Html->link(__('New Learning Problem'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Learning Problems') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($learningProblems as $learningProblem): ?>
                <tr>
                    <td><?= $this->Number->format($learningProblem->id) ?></td>
                    <td><?= h($learningProblem->name) ?></td>
                    <td><?= h($learningProblem->description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $learningProblem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $learningProblem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $learningProblem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $learningProblem->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
