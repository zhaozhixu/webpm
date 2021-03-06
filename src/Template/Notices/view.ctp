<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
     <ul class="side-nav">
     <li class="heading"><?= __('Actions') ?></li>
     <li><?= $this->Html->link(__('Edit Notice'), ['action' => 'edit', $notice->id]) ?> </li>
     <li><?= $this->Form->postLink(__('Delete Notice'), ['action' => 'delete', $notice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notice->id)]) ?> </li>
     <li><?= $this->Html->link(__('List Notices'), ['action' => 'index']) ?> </li>
     <li><?= $this->Html->link(__('New Notice'), ['action' => 'add']) ?> </li>
     </ul>
     </nav> -->
<nav>
    <div class="action">
        <ul >
            <li><?= $this->Html->link(__('Edit Notice'), ['action' => 'edit', $notice->id]) ?> </li>
            <li><?= $this->Form->postLink(__('Delete Notice'), ['action' => 'delete', $notice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notice->id)]) ?> </li>
            <li><?= $this->Html->link(__('List Notices'), ['action' => 'index']) ?> </li>
            <li><?= $this->Html->link(__('New Notice'), ['action' => 'add']) ?> </li>
        </ul>
    </div>
</nav>
<div class="notices view large-9 medium-8 columns content">
    <h3><?= h($notice->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($notice->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Author') ?></th>
            <td><?= $notice->has('user') ? $this->Html->link($notice->user->username, ['controller' => 'Users', 'action' => 'view', $notice->user->id]) : '' ?></td>
        </tr>
        <!-- <tr>
             <th scope="row"><?= __('Id') ?></th>
             <td><?= $this->Number->format($notice->id) ?></td>
             </tr> -->
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($notice->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($notice->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($notice->description)); ?>
    </div>
</div>
