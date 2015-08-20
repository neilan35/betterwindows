<div id="page-wrapper">
<h2 class="sub-header">New Colours</h2>

<div class="colours form large-10 medium-9 columns">
    <?= $this->Form->create($colour); ?>
    <fieldset>
        
            <div class="form-group">
            <?= $this->Form->input('category', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('name', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('price', ['class' => 'form-control']) ?>
            </div>        
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>