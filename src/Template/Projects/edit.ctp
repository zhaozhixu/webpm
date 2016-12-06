<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
     <ul class="side-nav">
     <li class="heading"><?= __('Actions') ?></li>
     <li><?= $this->Form->postLink(
         __('Delete'),
         ['action' => 'delete', $project->id],
         ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]
         )
         ?></li>
     <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New Project'), ['action' => 'add']) ?> </li>
     <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
     <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?></li>
     <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
     </ul>
     </nav> -->
<nav>
    <div class="action">
        <ul >
            <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $project->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]
                )
                ?></li>
            <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Project'), ['action' => 'add']) ?> </li>
        </ul>
    </div>
</nav>
<div class="projects form large-9 medium-8 columns content">
    <?= $this->Form->create($project) ?>
    <fieldset>
        <legend><?= __('Edit Project') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
