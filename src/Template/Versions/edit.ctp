<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
     <ul class="side-nav">
     <li class="heading"><?= __('Actions') ?></li>
     <li><?= $this->Form->postLink(
         __('Delete'),
         ['action' => 'delete', $version->id],
         ['confirm' => __('Are you sure you want to delete # {0}?', $version->id)]
         )
         ?></li>
     <li><?= $this->Html->link(__('List Versions'), ['action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New Version'), ['action' => 'add']) ?></li>
     <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
     <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
     <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
     </ul>
     </nav> -->
<nav>
    <div class="action">
        <ul >
            <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $version->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $version->id)]
                )
                ?></li>
            <li><?= $this->Html->link(__('List Versions'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Version'), ['action' => 'add']) ?></li>
        </ul>
    </div>
</nav>
<div class="versions form large-9 medium-8 columns content">
    <?= $this->Form->create($version) ?>
    <fieldset>
        <legend><?= __('Edit Version') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('url');
            echo $this->Form->input('description');

            echo $this->Form->input('product_id', ['options' => $products]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
