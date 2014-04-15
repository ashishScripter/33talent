<?php
/* @var $this JobsController */
/* @var $model Jobs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jobs-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_id'); ?>
		<?php echo $form->textField($model,'cat_id'); ?>
		<?php echo $form->error($model,'cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'base_salary'); ?>
		<?php echo $form->textField($model,'base_salary'); ?>
		<?php echo $form->error($model,'base_salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'benefits'); ?>
		<?php echo $form->textField($model,'benefits',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'benefits'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_posted'); ?>
		<?php echo $form->textField($model,'date_posted'); ?>
		<?php echo $form->error($model,'date_posted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'education_requirements'); ?>
		<?php echo $form->textField($model,'education_requirements',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'education_requirements'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'experience_requirements'); ?>
		<?php echo $form->textField($model,'experience_requirements',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'experience_requirements'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hiring_organization_id'); ?>
		<?php echo $form->textField($model,'hiring_organization_id'); ?>
		<?php echo $form->error($model,'hiring_organization_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incentives'); ?>
		<?php echo $form->textField($model,'incentives',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'incentives'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'industry'); ?>
		<?php echo $form->textField($model,'industry',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'industry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_location_id'); ?>
		<?php echo $form->textField($model,'job_location_id'); ?>
		<?php echo $form->error($model,'job_location_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qualifications'); ?>
		<?php echo $form->textField($model,'qualifications',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'qualifications'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'responsibilities'); ?>
		<?php echo $form->textField($model,'responsibilities',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'responsibilities'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_currency'); ?>
		<?php echo $form->textField($model,'salary_currency',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'salary_currency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skills'); ?>
		<?php echo $form->textField($model,'skills',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'skills'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'special_commitments'); ?>
		<?php echo $form->textField($model,'special_commitments',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'special_commitments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'work_hours'); ?>
		<?php echo $form->textField($model,'work_hours',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'work_hours'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->