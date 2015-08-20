<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Userz'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="userz form large-10 medium-9 columns">
    <?= $this->Form->create($userz); ?>
    <fieldset>
        <legend><?= __('Add Userz') ?></legend>
        <?php
            echo $this->Form->input('CustID');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
