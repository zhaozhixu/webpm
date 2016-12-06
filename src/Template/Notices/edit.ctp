<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
     <ul class="side-nav">
     <li class="heading"><?= __('Actions') ?></li>
     <li><?= $this->Form->postLink(
         __('Delete'),
         ['action' => 'delete', $notice->id],
         ['confirm' => __('Are you sure you want to delete # {0}?', $notice->id)]
         )
         ?></li>
     <li><?= $this->Html->link(__('New Notice'), ['action' => 'add']) ?></li>
     <li><?= $this->Html->link(__('List Notices'), ['action' => 'index']) ?></li>
     </ul>
     </nav> -->
<nav>
    <div class="action">
        <ul >
            <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $notice->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $notice->id)]
                )
                ?></li>
            <li><?= $this->Html->link(__('New Notice'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('List Notices'), ['action' => 'index']) ?></li>
        </ul>
    </div>
</nav>
<div class="notices form large-9 medium-8 columns content">
    <?= $this->Form->create($notice) ?>
    <fieldset>
        <legend><?= __('Edit Notice') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('description');
        /*             echo $this->Form->input('user_id', ['options' => $users]);*/
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
