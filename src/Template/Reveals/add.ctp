<div id="page-wrapper">
<h2 class="sub-header">New Reveals</h2>

<div class="reveals form large-10 medium-9 columns">
    <?= $this->Form->create($reveal); ?>
    <fieldset>
        
            <div class="form-group">
            <?= $this->Form->input('reveal', ['class' => 'form-control',
            'options' => [ 
            'yes' => 'Yes',
            'no' => 'No']
            ] )  ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('revealsize', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('price', ['class' => 'form-control']) ?>
            </div>
        
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>