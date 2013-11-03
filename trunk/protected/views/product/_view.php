<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ProductID), array('view', 'id'=>$data->ProductID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductName')); ?>:</b>
	<?php echo CHtml::encode($data->ProductName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductType')); ?>:</b>
	<?php echo CHtml::encode($data->ProductType); ?>
	<br />


</div>