<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Download> $downloads
 */
?>
<div class="downloads index content">
    <?= $this->Html->link(__('New Download'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Downloads') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user') ?></th>
                    <th><?= $this->Paginator->sort('app') ?></th>
                    <th><?= $this->Paginator->sort('Date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($downloads as $download): ?>
                <tr>
                    <td><?= $this->Number->format($download->id) ?></td>
                    <td><?= $this->Number->format($download->user) ?></td>
                    <td><?= $this->Number->format($download->app) ?></td>
                    <td><?= h($download->Date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $download->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $download->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $download->id], ['confirm' => __('Are you sure you want to delete # {0}?', $download->id)]) ?>
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
