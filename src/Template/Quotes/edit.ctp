<div class="quotes form large-10 medium-9 columns">
    <?= $this->Form->create($quote); ?>
    <fieldset>
        <legend><?= __('Edit Quote') ?></legend>
        <?php
            echo $this->Form->input('customer_id', ['options' => $customers]);
            echo $this->Form->input('quoteno');
            echo $this->Form->input('item');
            echo $this->Form->input('unitcost');
            echo $this->Form->input('quantity');
            echo $this->Form->input('installation');
            echo $this->Form->input('installtype');
            echo $this->Form->input('delivery');
            echo $this->Form->input('deliverytype');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
