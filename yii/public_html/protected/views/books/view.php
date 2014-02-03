<?php
$this->breadcrumbs=array(
	'Livros'=>array('index'),
	$model->title,
);

$this->menu=array(
array('label'=>'Listar livros','url'=>array('index')),
array('label'=>'Cadastrar novo','url'=>array('create')),
array('label'=>'Gerenciar livros','url'=>array('admin')),
array('label'=>'','url'=>"#"),
array('label'=>'Atualizar este','url'=>array('update','id'=>$model->id)),
array('label'=>'Apagar este','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que deseja apagar este item?')),

);
?>

<h1>Visualizando livro <i><?php echo $model->title; ?></i></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'title',
		'description',
		'author',
		'publish',
		'edition',
		'year',
		'origin',
		'include_date',
),
)); ?>
