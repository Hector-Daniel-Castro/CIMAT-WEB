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
            <?= $this->Html->link(__('List Downloads'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="downloads form content">
            <?= $this->Form->create($download) ?>
            <fieldset>
                <legend><?= __('Add Download') ?></legend>
                <?php
                    echo $this->Form->control('user');
                    echo $this->Form->control('app');
                    echo $this->Form->control('Date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
