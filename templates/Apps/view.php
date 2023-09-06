<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\App $app
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit App'), ['action' => 'edit', $app->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete App'), ['action' => 'delete', $app->id], ['confirm' => __('Are you sure you want to delete # {0}?', $app->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Apps'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New App'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="apps view content">
            <h3><?= h($app->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($app->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('File') ?></th>
                    <td><?= h($app->file) ?></td>
                </tr>
                <tr>
                    <th><?= __('Icon') ?></th>
                    <td><?= h($app->icon) ?></td>
                </tr>
                <tr>
                    <th><?= __('Short Description') ?></th>
                    <td><?= h($app->short_description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($app->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($app->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Differentiated Capacity') ?></th>
                    <td><?= $this->Number->format($app->differentiated_capacity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Size') ?></th>
                    <td><?= $this->Number->format($app->size) ?></td>
                </tr>
                <tr>
                    <th><?= __('Learning Problem') ?></th>
                    <td><?= $this->Number->format($app->learning_problem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $this->Number->format($app->category) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill') ?></th>
                    <td><?= $this->Number->format($app->skill) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
