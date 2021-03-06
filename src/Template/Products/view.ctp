<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
     <ul class="side-nav">
     <li class="heading"><?= __('Actions') ?></li>
     <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
     <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
     <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
     <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
     <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
     <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
     <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?> </li>
     <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?> </li>
     <li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
     <li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
     </ul>
     </nav> -->
<nav>
    <div class="action">
        <ul >
            <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
            <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
            <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
            <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        </ul>
    </div>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $product->has('project') ? $this->Html->link($product->project->title, ['controller' => 'Projects', 'action' => 'view', $product->project->id]) : '' ?></td>
        </tr>
        <!-- <tr>
             <th scope="row"><?= __('Id') ?></th>
             <td><?= $this->Number->format($product->id) ?></td>
             </tr> -->
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($product->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tasks') ?></h4>
        <?php if (!empty($product->tasks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!-- <th scope="col"><?= __('Id') ?></th> -->
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <!-- <th scope="col"><?= __('Description') ?></th> -->
                <th scope="col"><?= __('Priority') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <!-- <th scope="col"><?= __('Modified') ?></th> -->
                <th scope="col"><?= __('Assigner') ?></th>
                <th scope="col"><?= __('Receiver') ?></th>
                <!-- <th scope="col"><?= __('Project Id') ?></th> -->
                <!-- <th scope="col"><?= __('Product Id') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->tasks as $tasks): ?>
            <tr>
                <!-- <td><?= h($tasks->id) ?></td> -->
                <td><?= h($tasks->title) ?></td>
                <td><?= h($tasks->type->name) ?></td>
                <!-- <td><?= h($tasks->description) ?></td> -->
                <td><?= h($tasks->priority->name) ?></td>
                <td><?= h($tasks->state->name) ?></td>
                <td><?= h($tasks->start) ?></td>
                <td><?= h($tasks->end) ?></td>
                <!-- <td><?= h($tasks->modified) ?></td> -->
                <td><?= h($tasks->assigner->username) ?></td>
                <td><?= $tasks->has('receiver') ? h($tasks->receiver->username) : h('') ?></td>
                <!-- <td><?= h($tasks->project_id) ?></td> -->
                <!-- <td><?= h($tasks->product_id) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tasks', 'action' => 'view', $tasks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tasks', 'action' => 'edit', $tasks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tasks', 'action' => 'delete', $tasks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tasks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Versions') ?></h4>
        <?php if (!empty($product->versions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!-- <th scope="col"><?= __('Id') ?></th> -->
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <!-- <th scope="col"><?= __('Description') ?></th> -->
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <!-- <th scope="col"><?= __('User Id') ?></th> -->
                <!-- <th scope="col"><?= __('Product Id') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->versions as $versions): ?>
            <tr>
                <!-- <td><?= h($versions->id) ?></td> -->
                <td><?= h($versions->name) ?></td>
                <td><?= $this->html->link(h($versions->url), 'http://'.h($versions->url)) ?></td>
                <!-- <td><?= h($versions->description) ?></td> -->
                <td><?= h($versions->created) ?></td>
                <td><?= h($versions->modified) ?></td>
                <!-- <td><?= h($versions->user_id) ?></td> -->
                <!-- <td><?= h($versions->product_id) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Versions', 'action' => 'view', $versions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Versions', 'action' => 'edit', $versions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Versions', 'action' => 'delete', $versions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $versions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
