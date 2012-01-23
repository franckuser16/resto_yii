<?php

/**
 * This is the model class for table "computers".
 *
 * The followings are the available columns in table 'computers':
 * @property integer $C_id
 * @property string $C_name
 * @property string $C_mac_addr
 * @property string $C_room
 */
class Computers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Computers the static model class
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
		return 'computers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('C_name, C_mac_addr, C_room', 'required'),
			array('C_name, C_room', 'length', 'max'=>30),
			array('C_mac_addr', 'length', 'max'=>17),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			// C_id removed by Franck 23/01/12 auto generated field
			array(/*C_id,*/ 'C_name, C_mac_addr, C_room', 'safe', 'on'=>'search'),
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
//modified by Franck 23/01/12
			'C_id' => 'Computer Id',
			'C_name' => 'Computer Name',
			'C_mac_addr' => 'Computer Mac Address',
			'C_room' => 'Computer Room',
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

		//commented by Franck 23/01/12 'cause auto generated
		//$criteria->compare('C_id',$this->C_id);
		$criteria->compare('C_name',$this->C_name,true);
		$criteria->compare('C_mac_addr',$this->C_mac_addr,true);
		$criteria->compare('C_room',$this->C_room,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
