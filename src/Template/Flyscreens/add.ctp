<div id="page-wrapper">
<h2 class="sub-header">New Fly Screens</h2>

<div class="flyscreens form large-10 medium-9 columns">
    <?= $this->Form->create($flyscreen); ?>
    <fieldset>        
            <div class="form-group">
            <?= $this->Form->input('mesh',['class' => 'form-control',
            'options' => [ 
            'yes' => 'Yes',
            'no' => 'No']
            ] )  ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('type', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('price', ['class' => 'form-control']) ?>
            </div>
            
           
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>