<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Customer', 'url'=>array('index')),
	array('label'=>'Create Customer', 'url'=>array('create')),
	array('label'=>'View Customer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Customer', 'url'=>array('admin')),
);
?>

<h3>Update Customer <?php echo $model->customer_no; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>