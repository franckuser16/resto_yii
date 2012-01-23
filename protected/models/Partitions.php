<?php

/**
 * This is the model class for table "partitions".
 *
 * The followings are the available columns in table 'partitions':
 * @property integer $P_id
 * @property string $P_name
 * @property string $P_description
 * @property integer $P_id_image
 */
class Partitions extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Partitions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'partitions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('P_name, P_description, P_id_image', 'required'),
			array('P_id_image', 'numerical', 'integerOnly'=>true),
			array('P_name', 'length', 'max'=>4),
			array('P_description', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('P_id, P_name, P_description, P_id_image', 'safe', 'on'=>'search'),
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
			'P_id' => 'P',
			'P_name' => 'P Name',
			'P_description' => 'P Description',
			'P_id_image' => 'P Id Image',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('P_id',$this->P_id);
		$criteria->compare('P_name',$this->P_name,true);
		$criteria->compare('P_description',$this->P_description,true);
		$criteria->compare('P_id_image',$this->P_id_image);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}