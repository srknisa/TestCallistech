<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group row">
		<div class="col-sm-3">
		<?php echo $form->labelEx($model,'customer_no'); ?>
		<?php echo $form->textField($model,'customer_no',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'customer_no'); ?>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-sm-6">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-sm-6">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'address'); ?>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-sm-6">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'phone'); ?>
		</div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->