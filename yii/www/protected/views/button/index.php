<?php
/* @var $this ButtonController */
/* @var $model Yandex */
/* @var $form CActiveForm */

//$this->breadcrumbs=array(
//	'Button',
//);
?>
<!--
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
-->

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'contact-form',
    'enableClientValidation'=>false,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>

<p class="note">Текст для перевода</p>
<!--<div class="text">-->
<!--    from-->
<!--    <select>-->
<!--        <option>RU</option>-->
<!--    </select>-->
<!--    to-->
<!--    <select>-->
<!--        <option>EN</option>-->
<!--    </select>-->
<!--    <form method="post">-->
<!--        <textarea placeholder="Текст для перевода"></textarea>-->
<!--        <br/>-->
<!--        <input type="button" value="Перевод">-->
<!--    </form> -->
<!--</div>-->

<div class="text">
    <?php echo $form->labelEx($model,'text'); ?>
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
<!--Yandex-->
<!--<div class="yandex">-->
<!--    <textarea placeholder="Перевод от Yandex">-->
<!---->
<!--    </textarea>-->
<!--</div>-->
<!---->
<!--Google-->
<!--<div class="google">-->
<!--    <textarea placeholder="Первевод от Google">-->
<!---->
<!--    </textarea>-->
<!--</div>-->
<!---->
<!--Microsoft-->
<!--<div class="microsoft">-->
<!--    <textarea placeholder="Перевод от Microsoft">-->
<!---->
<!--    </textarea>-->
<!--</div>-->


<?php $this->endWidget(); ?>