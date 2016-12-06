<div class="index large-4 mdeium-4 large-offset-4 columns content">
    <div class="panel">
        <h3 class="text-center">WebPM Login</h3>
        <?= $this->Form->create()?>
        <?= $this->Form->input('email')?>
        <?= $this->Form->input('password')?>
        <?= $this->Form->button('Login')?>
        <?= $this->Form->end()?>
    </div>
    <?= $this->Html->link(__('Sign Up'), ['controller' => 'users', 'action' => 'add'])?>
</div>
