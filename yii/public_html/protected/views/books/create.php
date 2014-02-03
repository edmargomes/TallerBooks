<?php
$this->breadcrumbs=array(
	'Books'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Listar','url'=>array('index')),
array('label'=>'Gerenciar','url'=>array('admin')),
);
?>

<h1>Cadastrar Livros</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>