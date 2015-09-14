
<div class="quoteproducts form large-10 medium-9 columns">
    <?= $this->Form->create($quoteproduct); ?>
    <fieldset>
        <legend><?= __('Edit Quoteproduct') ?></legend>
        <?php
            echo $this->Form->input('quote_id', ['options' => $quotes]);
            echo $this->Form->input('colour_id', ['options' => $colours]);
            echo $this->Form->input('balrating_id', ['options' => $balratings]);
            echo $this->Form->input('itemtype_id', ['options' => $itemtypes]);
            echo $this->Form->input('design_id', ['options' => $designs]);
            echo $this->Form->input('reveal_id', ['options' => $reveals, 'empty' => true]);
            echo $this->Form->input('flyscreenmesh_id', ['options' => $flyscreenmeshes, 'empty' => true]);
            echo $this->Form->input('glazing_id', ['options' => $glazings]);
            echo $this->Form->input('height');
            echo $this->Form->input('width');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
