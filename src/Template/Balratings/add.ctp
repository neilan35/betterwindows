<div id="page-wrapper">
<h2 class="sub-header">New Bal Rating</h2>
<div class="balratings form large-10 medium-9 columns">
    <?= $this->Form->create($balrating); ?>
    <fieldset>
        
            <div class="form-group">
            <?= $this->Form->input('balrating', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('price', ['class' => 'form-control']) ?>
            </div>
        
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>