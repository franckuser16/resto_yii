<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $U_id
 * @property string $U_login
 * @property string $U_password
 * @property integer $U_right
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Users the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('U_login, U_password, U_right', 'required'),
			array('U_right', 'numerical', 'integerOnly'=>true),
			array('U_login', 'length', 'max'=>20),
			array('U_password', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('U_id, U_login, U_password, U_right', 'safe', 'on'=>'search'),
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
			'U_id' => 'U',
			'U_login' => 'U Login',
			'U_password' => 'U Password',
			'U_right' => 'U Right',
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

		$criteria->compare('U_id',$this->U_id);
		$criteria->compare('U_login',$this->U_login,true);
		$criteria->compare('U_password',$this->U_password,true);
		$criteria->compare('U_right',$this->U_right);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}