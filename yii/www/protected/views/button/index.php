<?php
/* @var $this ButtonController */
/* @var $model Yandex */
/* @var $model2 Multillect */
/* @var $form CActiveForm */

//$this->breadcrumbs=array(
//	'Button',
//);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'contact-form',
    'enableClientValidation'=>false,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>

<?php
    $leng = array('ru'=>"Руссккий", 'en'=>"Английский", 'de'=>"Немецкий", 'es'=>"Испанский", 'fr'=>"Французкий", 'it'=>"Итальянский");
?>

<div class="from">
    <?php echo $form->labelEx($model,'From'); ?>
    <?php echo $form->dropDownList($model,'from', $leng); ?>
    <?php echo $form->error($model,'text'); ?>
</div>

<div class="to">
    <?php echo $form->labelEx($model,'To'); ?>
    <?php echo $form->dropDownList($model,'to', $leng); ?>
    <?php echo $form->error($model,'text'); ?>
</div>

<div class="text">
    <?php echo $form->labelEx($model,'Текст'); ?>
    <?php echo $form->textArea($model,'text'); ?>
    <?php echo $form->error($model,'text'); ?>
</div>

<div class="button">
    <?php echo CHtml::submitButton('Перевести'); ?>
</div>

<div class="yandex">
    <?php echo $form->labelEx($model,'Yandex'); ?>
    <?php echo $form->textArea($model, 'resText'); ?>
    <?php echo $form->error($model,'resText'); ?>
</div>

<div class="multillect">
    <?php echo $form->labelEx($model2,'Multillect'); ?>
    <?php echo $form->textArea($model2, 'resText'); ?>
    <?php echo $form->error($model2,'resText'); ?>
</div>

<?php $this->endWidget(); ?>