<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Quotes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="quotes form large-10 medium-9 columns">
    <?= $this->Form->create($quote,['class' => 'form-horizontal']); ?>
    <fieldset>
        <div class="form-group">
           <label class="control-label col-sm-2" for="customer">Customer:</label>
            <div class="input-group col-sm-3">
            <?php echo $this->Form->input('customer_id',['class' => 'combobox form-control',
                                                       'options' => $customers,
                                                       'empty'=> true,
                                                       'required' => true,
                                                       'label' => false]);?>
            </div>
            </div>
           <?php echo $this->Form->input('product_id', ['options' => $products]);
            echo $this->Form->input('quote_no');
            echo $this->Form->input('item');
            echo $this->Form->input('unit_cost');
            echo $this->Form->input('quantity');
            echo $this->Form->input('installation');
            echo $this->Form->input('installtype');
            echo $this->Form->input('delivery');
            echo $this->Form->input('deliverytype');
            echo $this->Form->input('status');
        ?>
         <div class="form-group"> 
            <div class="control-label col-sm-offset-1 col-sm-2">
            <?= $this->Form->button('Submit', ['type' => 'submit', 'class' => 'btn btn-primary btn-md ']) ?>
            <?php echo $this->Form->end();?> 
            </div>
        </div>
    </fieldset>
</div> 




