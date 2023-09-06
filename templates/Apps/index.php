<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\App> $apps
 */
?>
<div class="apps index content">
    <?= $this->Html->link(__('New App'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Apps') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('file') ?></th>
                    <th><?= $this->Paginator->sort('icon') ?></th>
                    <th><?= $this->Paginator->sort('differentiated_capacity') ?></th>
                    <th><?= $this->Paginator->sort('size') ?></th>
                    <th><?= $this->Paginator->sort('learning_problem') ?></th>
                    <th><?= $this->Paginator->sort('category') ?></th>
                    <th><?= $this->Paginator->sort('skill') ?></th>
                    <th><?= $this->Paginator->sort('short_description') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($apps as $app): ?>
                <tr>
                    <td><?= $this->Number->format($app->id) ?></td>
                    <td><?= h($app->name) ?></td>
                    <td><?= h($app->file) ?></td>
                    <td><?= h($app->icon) ?></td>
                    <td><?= $this->Number->format($app->differentiated_capacity) ?></td>
                    <td><?= $this->Number->format($app->size) ?></td>
                    <td><?= $this->Number->format($app->learning_problem) ?></td>
                    <td><?= $this->Number->format($app->category) ?></td>
                    <td><?= $this->Number->format($app->skill) ?></td>
                    <td><?= h($app->short_description) ?></td>
                    <td><?= h($app->description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $app->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $app->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $app->id], ['confirm' => __('Are you sure you want to delete # {0}?', $app->id)]) ?>
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
