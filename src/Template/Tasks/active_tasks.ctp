<nav>
    <div class="action">
        <ul >
            <li><?= $this->Html->link(__('New Task'), ['action' => 'add']) ?></li>
        </ul>
    </div>
</nav>
<div class="tasks index large-9 medium-8 columns content">
    <h3><?= __('Active Tasks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('priority') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('project') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assigner') ?></th>
                <th scope="col"><?= $this->Paginator->sort('receiver') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <!-- <td><?= $this->Number->format($task->id) ?></td> -->
                    <td><?= h($task->title) ?></td>
                    <td><?=$task->has('type') ? h($task->type->name) : ''?></td>
                    <td><?= $task->has('priority') ? h($task->priority->name) : '' ?></td>
                    <td><?= $task->has('state') ? h($task->state->name) : '' ?></td>
                    <td><?= h($task->start) ?></td>
                    <td><?= h($task->end) ?></td>
                    <!-- <td><?= h($task->modified) ?></td> -->
                    <td><?= $task->has('project') ? $this->Html->link($task->project->title, ['controller' => 'Projects', 'action' => 'view', $task->project->id]) : '' ?></td>
                    <td><?= $task->has('product') ? $this->Html->link($task->product->name, ['controller' => 'Products', 'action' => 'view', $task->product->id]) : '' ?></td>
                    <td><?= $task->has('assigner') ? $this->Html->link($task->assigner->username, ['controller' => 'Users', 'action' => 'view', $task->assigner->id]) : '' ?></td>
                    <td><?= $task->has('receiver') ? $this->Html->link($task->receiver->username, ['controller' => 'Users', 'action' => 'view', $task->receiver->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $task->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $task->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?>
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
