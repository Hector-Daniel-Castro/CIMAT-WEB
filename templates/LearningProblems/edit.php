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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $learningProblem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $learningProblem->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Learning Problems'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="learningProblems form content">
            <?= $this->Form->create($learningProblem) ?>
            <fieldset>
                <legend><?= __('Edit Learning Problem') ?></legend>
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
