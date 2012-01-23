<?php

/**
 * This is the model class for table "domain".
 *
 * The followings are the available columns in table 'domain':
 * @property integer $D_id
 * @property string $D_name
 * @property string $D_host_admin
 * @property string $D_domain_admin
 * @property string $D_domain_password
 */
class Domain extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Domain the static model class
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
		return 'domain';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('D_name, D_host_admin, D_domain_admin, D_domain_password', 'required'),
			array('D_name, D_host_admin, D_domain_admin, D_domain_password', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('D_id, D_name, D_host_admin, D_domain_admin, D_domain_password', 'safe', 'on'=>'search'),
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
			'D_id' => 'D',
			'D_name' => 'D Name',
			'D_host_admin' => 'D Host Admin',
			'D_domain_admin' => 'D Domain Admin',
			'D_domain_password' => 'D Domain Password',
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

		$criteria->compare('D_id',$this->D_id);
		$criteria->compare('D_name',$this->D_name,true);
		$criteria->compare('D_host_admin',$this->D_host_admin,true);
		$criteria->compare('D_domain_admin',$this->D_domain_admin,true);
		$criteria->compare('D_domain_password',$this->D_domain_password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}