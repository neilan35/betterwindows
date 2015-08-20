<div id="page-wrapper">
<h2 class="sub-header">New Products</h2>
<div class="products form large-10 medium-9 columns">
    <?= $this->Form->create($product); ?>
    <fieldset>
        
        
            <div class="form-group">
            <?= $this->Form->input('colour_id', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('glazing_id', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('balrating_id', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('reveal_id', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('winopentype_id', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('dooropentype_id', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('flyscreen_id', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('glasscomp_id', ['class' => 'form-control']) ?>
            </div>
                    
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>