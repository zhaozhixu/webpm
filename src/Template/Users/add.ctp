<div class="index large-4 mdeium-4 large-offset-4 columns content">
    <?= $this->Form->create($user) ?>
    <div class="panel">
        <h3 class="text-center"><?=__('Create New Account')?></h3>
        <?= $this->Form->input('email')?>
        <?= $this->Form->input('username')?>
        <?= $this->Form->input('password')?>
        <?= $this->Form->input('role', [
            'options' => ['admin' => 'Admin', 'staff' => 'Staff']
        ])?>
        <?= $this->Form->input('projects._ids', ['options' => $projects])?>
        <?= $this->Form->button(__('Submit'))?>
        <?= $this->Form->end()?>
    </div>
</div>
