<div id="page-wrapper">

<div class="orderdetails form large-10 medium-9 columns">
    <?= $this->Form->create($orderdetail); ?>

    <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">New Order Details Form</h1>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Your Order Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <form role="form">
        <div class="form-group">
        <?= $this->Form->input('OrderDetailsColour',['class' => 'form-control',
            'options' => ['white' => 'White', 
            'black' => 'Black',
            'orange' => 'Orange']
        ]) ?>
        </div>

        <div class="form-group">
        <?= $this->Form->input('OrderDetailsGlazingType',['class' => 'form-control',
            'options' => ['single glazed' => 'Single Glazed', 
            'double glazed' => 'Double Glazed',
            'triple glazed' => 'Triple Glazed']
        ]) ?>
        </div>

        <div class="form-group">
        <?= $this->Form->input('OrderDetailsBalRating',['class' => 'form-control','label' => 'BAL Rating']) ?>
        </div>

        <div class="form-group">
        <?= $this->Form->input('OrderDetailsRevealSize',['class' => 'form-control','label' => 'Reveal Size']) ?>
        </div>

        <div class="form-group">
        <?= $this->Form->input('OrderDetailsWinOpenType', ['class' => 'form-control',
            'options' => ['standard' => 'Standard', 
            'french' => 'French',
            'sliding' => 'Sliding']
        ]) ?>   
        </div>

        <div class="form-group">
        <?= $this->Form->input('OrderDetailsDoorOpenType', ['class' => 'form-control',
            'options' => ['standard' => 'Standard', 
            'french' => 'French',
            'sliding' => 'Sliding']
        ]) ?>
        </div>

        <div class="form-group">
        <?= $this->Form->input('OrderDetailsFlyScreen',['class' => 'form-control']) ?>
        </div>

        <div class="form-group">
        <?= $this->Form->input('OrderDetailsFlyScreenType', ['class' => 'form-control',
            'options' => ['mesh' => 'Mesh', 
            'aluminium' => 'Aluminium',
            'fibreglass' => 'FibreGlass']
        ]) ?>
        </div>

        <div class="form-group">
        <?= $this->Form->input('OrderDetailsMesh', ['class' => 'form-control','label' => 'Mesh (inputs have not been specified by the client)',
            'options' => ['mesh' => 'Mesh', 
            'aluminium' => 'Aluminium',
            'fibreglass' => 'FibreGlass']
        ]) ?>
        </div>

        <div class="form-group">
        <?= $this->Form->input('OrderDetailsInstallation',['class' => 'form-control',
        'options' => [ 
            'yes' => 'Yes',
            'no' => 'No']
        ] )  ?>
        </div>

        <div class="form-group">
        <?= $this->Form->input('OrderDetailsInstallTypes',['class' => 'form-control',
        'options' => [ 
            'new home' => 'New Home',
            'replacement' => 'Replacement']
        ]) ?>
        </div>

        <div class="form-group">
        <?= $this->Form->input('OrderDetailsDelivery', ['class' => 'form-control',
        'options' => [ 
            'yes' => 'Yes',
            'no' => 'No']
        ]) ?>
        </div>

        <div class="form-group">
        <?= $this->Form->input('OrderDetailsPostcode', ['class' => 'form-control']) ?>
        </div>
    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


             <button type="submit" class="btn btn-default">Submit Button</button>
             <?= $this->Form->end() ?>

</div>
</div>
</div>