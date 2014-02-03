<?php
$this->breadcrumbs=array(
	'Livros',
);

$this->menu=array(
array('label'=>'Cadastrar','url'=>array('create')),
array('label'=>'Gerenciar','url'=>array('admin')),
);
?>

<h1>Livros</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
