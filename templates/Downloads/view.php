<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Download $download
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Download'), ['action' => 'edit', $download->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Download'), ['action' => 'delete', $download->id], ['confirm' => __('Are you sure you want to delete # {0}?', $download->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Downloads'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Download'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="downloads view content">
            <h3><?= h($download->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($download->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $this->Number->format($download->user) ?></td>
                </tr>
                <tr>
                    <th><?= __('App') ?></th>
                    <td><?= $this->Number->format($download->app) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($download->Date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
