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
            <?= $this->Html->link(__('List Apps'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="apps form content">
            <?= $this->Form->create($app) ?>
            <fieldset>
                <legend><?= __('Add App') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('file');
                    echo $this->Form->control('icon');
                    echo $this->Form->control('differentiated_capacity');
                    echo $this->Form->control('size');
                    echo $this->Form->control('learning_problem');
                    echo $this->Form->control('category');
                    echo $this->Form->control('skill');
                    echo $this->Form->control('short_description');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
