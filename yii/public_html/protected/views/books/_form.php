<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'books-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Campos com <span class="required">*</span> são obrigatórios.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'author',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'publish',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'edition',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'year',array('class'=>'span5','maxlength'=>4)); ?>

        <?php echo $form->dropDownListRow(
            $model,
            'origin',
            array(''=>'Selecione ...','Internacional'=> 'Internacional', 'Nacional'=>'Nacional')
        ); ?>
	

	

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Cadastrar' : 'Salvar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
