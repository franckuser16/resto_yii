<?php

/**
 * This is the model class for table "images".
 *
 * The followings are the available columns in table 'images':
 * @property integer $I_id
 * @property string $I_name
 * @property string $I_disk_name
 * @property string $I_description
 */
class Images extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Images the static model class
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
		return 'images';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('I_name, I_disk_name, I_description', 'required'),
			array('I_name, I_description', 'length', 'max'=>30),
			array('I_disk_name', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('I_id, I_name, I_disk_name, I_description', 'safe', 'on'=>'search'),
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
			'I_id' => 'I',
			'I_name' => 'I Name',
			'I_disk_name' => 'I Disk Name',
			'I_description' => 'I Description',
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

		$criteria->compare('I_id',$this->I_id);
		$criteria->compare('I_name',$this->I_name,true);
		$criteria->compare('I_disk_name',$this->I_disk_name,true);
		$criteria->compare('I_description',$this->I_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}