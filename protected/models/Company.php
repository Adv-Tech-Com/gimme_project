<?php

/**
 * This is the model class for table "company".
 *
 * The followings are the available columns in table 'company':
 * @property integer $company_id
 * @property string $clogo
 * @property string $cname
 * @property string $cdesc
 * @property integer $cphone
 * @property integer $cmobile
 * @property string $cemail
 * @property string $cwebsite
 * @property string $caddress
 * @property string $ccity
 * @property string $ccountry
 * @property integer $regdate
 * @property integer $active
 */
class Company extends CActiveRecord {
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'company';
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
						'cname, cemail, active',
						'required' 
				),
				array (
						'cphone, cmobile, regdate, active',
						'numerical',
						'integerOnly' => true 
				),
				array (
						'clogo',
						'length',
						'max' => 500 
				),
				array (
						'cname, cwebsite, ccity',
						'length',
						'max' => 200 
				),
				array(
						'cname',
						'unique',
				),
				array (
						'cemail',
						'length',
						'max' => 50 
				),
				array (
						'caddress',
						'length',
						'max' => 300 
				),
				array (
						'ccountry',
						'length',
						'max' => 100 
				),
				array (
						'cdesc',
						'safe' 
				),
				// The following rule is used by search().
				// @todo Please remove those attributes that should not be
				// searched.
				array (
						'company_id, cname, cdesc, cphone, cmobile, cemail, cwebsite, caddress, ccity, ccountry, active',
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
				'company_id' => 'Company',
				'clogo' => 'Company logo',
				'cname' => 'Company Name',
				'cdesc' => 'Description',
				'cphone' => 'Phone',
				'cmobile' => 'Mobile',
				'cemail' => 'Email',
				'cwebsite' => 'Website',
				'caddress' => 'Address',
				'ccity' => 'City',
				'ccountry' => 'Country',
				'regdate' => 'Register Date',
				'active' => 'Active' 
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
		
		$criteria->compare ( 'company_id', $this->company_id );
		$criteria->compare ( 'clogo', $this->clogo, true );
		$criteria->compare ( 'cname', $this->cname, true );
		$criteria->compare ( 'cdesc', $this->cdesc, true );
		$criteria->compare ( 'cphone', $this->cphone );
		$criteria->compare ( 'cmobile', $this->cmobile );
		$criteria->compare ( 'cemail', $this->cemail, true );
		$criteria->compare ( 'cwebsite', $this->cwebsite, true );
		$criteria->compare ( 'caddress', $this->caddress, true );
		$criteria->compare ( 'ccity', $this->ccity, true );
		$criteria->compare ( 'ccountry', $this->ccountry, true );
		$criteria->compare ( 'active', $this->active );
		
		return new CActiveDataProvider ( $this, array (
				'criteria' => $criteria 
		) );
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your
	 * CActiveRecord descendants!
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return Company the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
}
