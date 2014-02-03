<?php

/**
 * Este é o model da tabela books "books".
 *
 * Lista de colunas em books
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $author
 * @property string $publish
 * @property string $edition
 * @property integer $year
 * @property string $origin
 * @property string $include_date
 */
class Books extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'books';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, description, author, publish, edition, year', 'required'),
			array('year', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			array('author', 'length', 'max'=>60),
			array('publish, edition', 'length', 'max'=>45),
                        array('origin', 'length', 'max'=>13),
			array('include_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, description, author, publish, edition, year, origin, include_date', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Cód.',
			'title' => 'Título',
			'description' => 'Descrição',
			'author' => 'Autor',
			'publish' => 'Editora',
			'edition' => 'Edição',
			'year' => 'Ano',
			'origin' => 'Origem',
			'include_date' => 'Data de Inclusão',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('publish',$this->publish,true);
		$criteria->compare('edition',$this->edition,true);
		$criteria->compare('year',$this->year);
		$criteria->compare('origin',$this->origin,true);
		$criteria->compare('include_date',$this->include_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Books the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
