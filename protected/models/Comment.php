<?php

/**
 * This is the model class for table "comment".
 *
 * The followings are the available columns in table 'comment':
 * @property integer $comment_id
 * @property integer $project_id
 * @property integer $user_id
 * @property integer $company_id
 * @property string $comment
 * @property integer $addedon
 * @property integer $active
 */
class Comment extends CActiveRecord {
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'comment';
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
						'project_id, user_id, company_id, comment, addedon, active',
						'required' 
				),
				array (
						'project_id, user_id, company_id, addedon, active',
						'numerical',
						'integerOnly' => true 
				),
				// The following rule is used by search().
				// @todo Please remove those attributes that should not be
				// searched.
				array (
						'comment_id, project_id, user_id, company_id, comment, addedon, active',
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
				'comment_id' => 'Comment',
				'project_id' => 'Project',
				'user_id' => 'User',
				'company_id' => 'Company',
				'comment' => 'Comment',
				'addedon' => 'Addedon',
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
		
		$criteria->compare ( 'comment_id', $this->comment_id );
		$criteria->compare ( 'project_id', $this->project_id );
		$criteria->compare ( 'user_id', $this->user_id );
		$criteria->compare ( 'company_id', $this->company_id );
		$criteria->compare ( 'comment', $this->comment, true );
		$criteria->compare ( 'addedon', $this->addedon );
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
	 * @return Comment the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
}
