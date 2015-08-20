<div id="page-wrapper">
<h2 class="sub-header">New Glazings</h2>

<div class="glazings form large-10 medium-9 columns">
    <?= $this->Form->create($glazing); ?>
    <fieldset>
        
            <div class="form-group">
            <?= $this->Form->input('glazingtype', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('obscurity',['class' => 'form-control',
            'options' => [ 
            'yes' => 'Yes',
            'no' => 'No']
            ] )  ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('safetyglazing',['class' => 'form-control',
            'options' => [ 
            'yes' => 'Yes',
            'no' => 'No']
            ] )  ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('price', ['class' => 'form-control']) ?>
            </div>
        
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>