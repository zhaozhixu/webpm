<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
     <ul class="side-nav">
     <li class="heading"><?= __('Actions') ?></li>
     <li><?= $this->Form->postLink(
         __('Delete'),
         ['action' => 'delete', $task->id],
         ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]
         )
         ?></li>
     <li><?= $this->Html->link(__('List Tasks'), ['action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New Task'), ['action' => 'add']) ?> </li>
     <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
     <li><?= $this->Html->link(__('List Priorities'), ['controller' => 'Priorities', 'action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New Priority'), ['controller' => 'Priorities', 'action' => 'add']) ?></li>
     <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
     <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
     <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
     <li><?= $this->Html->link(__('List Assigners'), ['controller' => 'Users', 'action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New Assigner'), ['controller' => 'Users', 'action' => 'add']) ?></li>
     </ul>
     </nav> -->
<nav>
    <div class="action">
        <ul >
            <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $task->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]
                )
                ?></li>
            <li><?= $this->Html->link(__('List Tasks'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Task'), ['action' => 'add']) ?> </li>
        </ul>
    </div>
</nav>
<div class="tasks form large-9 medium-8 columns content">
    <?= $this->Form->create($task) ?>
    <fieldset>
        <legend><?= __('Edit Task') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('type_id', ['options' => $types]);
            echo $this->Form->input('priority_id', ['options' => $priorities]);
            echo $this->Form->input('state_id', ['options' => $states]);
            echo $this->Form->input('start', ['empty' => true]);
            echo $this->Form->input('end', ['empty' => true]);
        /*             echo $this->Form->input('assigner_id', ['options' => $assigners]);*/
            echo $this->Form->input('receiver_id', ['options' => $receivers, 'empty' => true]);
            echo $this->Form->input('project_id', ['options' => $projects]);
            echo $this->Form->input('product_id', ['options' => $products, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
