<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
     <ul class="side-nav">
     <li class="heading"><?= __('Actions') ?></li>
     <li><?= $this->Html->link(__('Edit Version'), ['action' => 'edit', $version->id]) ?> </li>
     <li><?= $this->Form->postLink(__('Delete Version'), ['action' => 'delete', $version->id], ['confirm' => __('Are you sure you want to delete # {0}?', $version->id)]) ?> </li>
     <li><?= $this->Html->link(__('List Versions'), ['action' => 'index']) ?> </li>
     <li><?= $this->Html->link(__('New Version'), ['action' => 'add']) ?> </li>
     <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
     <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
     <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
     <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
     </ul>
     </nav> -->
<nav>
    <div class="action">
        <ul >
            <li><?= $this->Html->link(__('Edit Version'), ['action' => 'edit', $version->id]) ?> </li>
            <li><?= $this->Form->postLink(__('Delete Version'), ['action' => 'delete', $version->id], ['confirm' => __('Are you sure you want to delete # {0}?', $version->id)]) ?> </li>
            <li><?= $this->Html->link(__('List Versions'), ['action' => 'index']) ?> </li>
            <li><?= $this->Html->link(__('New Version'), ['action' => 'add']) ?> </li>
        </ul>
    </div>
</nav>
<div class="versions view large-9 medium-8 columns content">
    <h3><?= h($version->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($version->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $version->has('product') ? $this->Html->link($version->product->name, ['controller' => 'Products', 'action' => 'view', $version->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $version->has('user') ? $this->Html->link($version->user->username, ['controller' => 'Users', 'action' => 'view', $version->user->id]) : '' ?></td>
        </tr>
        <!-- <tr>
             <th scope="row"><?= __('Id') ?></th>
             <td><?= $this->Number->format($version->id) ?></td>
             </tr> -->
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($version->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($version->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->html->link(h($version->url),'http://'.h($version->url))?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($version->description)); ?>
    </div>
</div>
