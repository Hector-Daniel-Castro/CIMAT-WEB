<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LearningProblem $learningProblem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Learning Problem'), ['action' => 'edit', $learningProblem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Learning Problem'), ['action' => 'delete', $learningProblem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $learningProblem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Learning Problems'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Learning Problem'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="learningProblems view content">
            <h3><?= h($learningProblem->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($learningProblem->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($learningProblem->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($learningProblem->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
