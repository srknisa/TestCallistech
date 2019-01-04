<?php
/* @var $this CustomerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Customers',
);

$this->menu=array(
	array('label'=>'Create Customer', 'url'=>array('create')),
	array('label'=>'Manage Customer', 'url'=>array('admin')),
);
?>

<h3>Customers</h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
