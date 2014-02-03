<?php
$this->breadcrumbs=array(
	'Livros'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Atualizar',
);

	$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Criar','url'=>array('create')),
	array('label'=>'Visualizar','url'=>array('view','id'=>$model->id)),
	array('label'=>'Gerenciar','url'=>array('admin')),
	);
	?>

	<h1>Atualizando Livro <?php echo $model->title; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>