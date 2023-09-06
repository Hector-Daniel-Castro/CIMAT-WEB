<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DifferentiatedCapacity $differentiatedCapacity
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Differentiated Capacity'), ['action' => 'edit', $differentiatedCapacity->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Differentiated Capacity'), ['action' => 'delete', $differentiatedCapacity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $differentiatedCapacity->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Differentiated Capacities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Differentiated Capacity'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="differentiatedCapacities view content">
            <h3><?= h($differentiatedCapacity->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($differentiatedCapacity->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($differentiatedCapacity->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($differentiatedCapacity->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
