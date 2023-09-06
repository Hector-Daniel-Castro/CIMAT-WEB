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
            <?= $this->Html->link(__('List Learning Problems'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="learningProblems form content">
            <?= $this->Form->create($learningProblem) ?>
            <fieldset>
                <legend><?= __('Add Learning Problem') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
