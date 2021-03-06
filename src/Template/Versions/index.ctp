<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
     <ul class="side-nav">
     <li class="heading"><?= __('Actions') ?></li>
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
            <li><?= $this->Html->link(__('New Version'), ['action' => 'add']) ?></li>
        </ul>
    </div>
</nav>
<div class="versions index large-9 medium-8 columns content">
    <h3><?= __('Versions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('user_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($versions as $version): ?>
            <tr>
                <!-- <td><?= $this->Number->format($version->id) ?></td> -->
                <td><?= h($version->name) ?></td>
                <td><?= h($version->created) ?></td>
                <td><?= h($version->modified) ?></td>
                <!-- <td><?= $version->has('user') ? $this->Html->link($version->user->username, ['controller' => 'Users', 'action' => 'view', $version->user->id]) : '' ?></td> -->
                <td><?= $version->has('product') ? $this->Html->link($version->product->name, ['controller' => 'Products', 'action' => 'view', $version->product->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $version->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $version->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $version->id], ['confirm' => __('Are you sure you want to delete # {0}?', $version->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
