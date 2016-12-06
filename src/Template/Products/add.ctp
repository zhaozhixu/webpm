<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
     <ul class="side-nav">
     <li class="heading"><?= __('Actions') ?></li>
     <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
     <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?></li>
     <li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?></li>
     </ul>
     </nav> -->
<nav>
    <div class="action">
        <ul >
            <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        </ul>
    </div>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('project_id', ['options' => $projects]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
