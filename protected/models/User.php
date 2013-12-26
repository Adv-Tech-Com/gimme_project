<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $user_id
 * @property integer $admin_id
 * @property integer $company_id
 * @property string $username
 * @property string $fullname
 * @property string $email_id
 * @property string $password
 * @property string $userphoto
 * @property integer $regdate
 * @property integer $lastactivedate
 * @property integer $active
 */
class User extends CActiveRecord {
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'user';
	}
	
	/**
	 *
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array (
				array (
						'fullname, admin_id, company_id, email_id, password, regdate, active',
						'required' 
				),
				array (
						'admin_id, company_id, regdate, lastactivedate, active',
						'numerical',
						'integerOnly' => true 
				),
				array(
						'email_id',
						'email',
				),
				array(
						'email_id',
						'unique',
				),
				array (
						'username',
						'length',
						'max' => 100 
				),
				array (
						'fullname, email_id',
						'length',
						'max' => 200 
				),
				array (
						'userphoto',
						'length',
						'max' => 500 
				),
				// The following rule is used by search().
				// @todo Please remove those attributes that should not be
				// searched.
				array (
						'user_id, admin_id, company_id, username, fullname, email_id, userphoto, regdate, lastactivedate, active',
						'safe',
						'on' => 'search' 
				) 
		);
	}
	
	/**
	 *
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array ();
	}
	
	/**
	 *
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array (
				'user_id' => 'User',
				'admin_id' => 'Admin',					//
				'company_id' => 'Company',				//
				'username' => 'Username',				//
				'fullname' => 'Fullname',
				'email_id' => 'Email',
				'password' => 'Password',
				'userphoto' => 'Userphoto',				//
				'regdate' => 'Regdate',					//
				'lastactivedate' => 'Lastactivedate',	//
				'active' => 'Active'				//
		);
	}
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will
	 * filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 *         based on the search/filter conditions.
	 */
	public function search() {
		// @todo Please modify the following code to remove attributes that
		// should not be searched.
		$criteria = new CDbCriteria ();
		
		$criteria->compare ( 'user_id', $this->user_id );
		$criteria->compare ( 'admin_id', $this->admin_id );
		$criteria->compare ( 'company_id', $this->company_id );
		$criteria->compare ( 'username', $this->username, true );
		$criteria->compare ( 'fullname', $this->fullname, true );
		$criteria->compare ( 'email_id', $this->email_id, true );
		$criteria->compare ( 'userphoto', $this->userphoto, true );
		$criteria->compare ( 'regdate', $this->regdate );
		$criteria->compare ( 'lastactivedate', $this->lastactivedate );
		$criteria->compare ( 'active', $this->active );
		
		return new CActiveDataProvider ( $this, array (
				'criteria' => $criteria 
		) );
	}
	
	
	/**
	 * Generate a Auto Password for User Logins
	 */
	public function generateLoginPassword( $password_length )
	{
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		return substr( str_shuffle( $chars ), 0, $password_length );
	}
	
	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password)
	{
		if( $this->password == md5( $password ) ) {
			return true;
		}
		return false;
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your
	 * CActiveRecord descendants!
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return User the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
}
