<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Project'), ['action' => 'edit', $project->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Project'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['action' => 'add']) ?> </li>
        <!-- <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
             <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
             <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?> </li>
             <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?> </li>
             <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
             <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li> -->
    </ul>
</nav>
<div class="projects view large-9 medium-8 columns content">
    <h3><?= h($project->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($project->title) ?></td>
        </tr>
        <!-- <tr>
             <th scope="row"><?= __('Id') ?></th>
             <td><?= $this->Number->format($project->id) ?></td>
             </tr> -->
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($project->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($project->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($project->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($project->products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!-- <th scope="col"><?= __('Id') ?></th> -->
                <th scope="col"><?= __('Name') ?></th>
                <!-- <th scope="col"><?= __('Description') ?></th> -->
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <!-- <th scope="col"><?= __('Project Id') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($project->products as $products): ?>
            <tr>
                <!-- <td><?= h($products->id) ?></td> -->
                <td><?= h($products->name) ?></td>
                <!-- <td><?= h($products->description) ?></td> -->
                <td><?= h($products->created) ?></td>
                <td><?= h($products->modified) ?></td>
                <!-- <td><?= h($products->project_id) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tasks') ?></h4>
        <?php if (!empty($project->tasks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <!-- <th scope="col"><?= $this->tasks->Paginator->sort('priority') ?></th> -->
                <th scope="col"><?= __('Priority') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Assigner') ?></th>
                <th scope="col"><?= __('Receiver') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($project->tasks as $tasks): ?>
            <tr>
                <td><?= h($tasks->id) ?></td>
                <td><?= h($tasks->type) ?></td>
                <td><?= h($tasks->title) ?></td>
                <td><?= h($tasks->description) ?></td>
                <td><?= h($tasks->priority) ?></td>
                <td><?= h($tasks->state) ?></td>
                <td><?= h($tasks->start) ?></td>
                <td><?= h($tasks->end) ?></td>
                <td><?= h($tasks->modified) ?></td>
                <td><?= h($tasks->assigner) ?></td>
                <!-- <td><?= $tasks->has('receiver') ? $this->Html->link($tasks->receiver->username, ['controller' => 'Users', 'action' => 'view', $tasks->receiver->id]) : '' ?></td> -->
                <td><?= h($tasks->receiver) ?></td>
                <td><?= h($tasks->project_id) ?></td>
                <td><?= h($tasks->product_id) ?></td>
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
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($project->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($project->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
