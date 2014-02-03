<?php
$this->breadcrumbs=array(
	'Books'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
array('label'=>'Listar','url'=>array('index')),
array('label'=>'Cadastrar','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('books-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Gerenciar Livros</h1>

<p>
	Se desejar, você pode entrar com operadores de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) no início de cada termo de pesquisa.
</p>

<?php echo CHtml::link('Pesquisa avançada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'books-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'title',
		'description',
		'author',
		'publish',
                'origin',
		
		/*
		'year',
		'edition',
		'include_date',
		*/
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
