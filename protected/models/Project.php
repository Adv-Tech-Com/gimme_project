<?php

/**
 * This is the model class for table "project".
 *
 * The followings are the available columns in table 'project':
 * @property integer $project_id
 * @property string $project_name
 * @property string $project_desc
 * @property integer $user_id
 * @property integer $company_id
 * @property integer $createdate
 * @property integer $startdate
 * @property integer $duedate
 * @property integer $priority_id
 * @property integer $active
 * @property string $db_date
 */
class Project extends CActiveRecord {
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'project';
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
						'project_name, project_desc, user_id, company_id, createdate, active, db_date',
						'required' 
				),
				array (
						'user_id, company_id, createdate, startdate, duedate, priority_id, active',
						'numerical',
						'integerOnly' => true 
				),
				array (
						'project_name',
						'length',
						'max' => 500 
				),
				// The following rule is used by search().
				// @todo Please remove those attributes that should not be
				// searched.
				array (
						'project_id, project_name, project_desc, user_id, company_id, createdate, startdate, duedate, priority_id, active, db_date',
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
				'project_id' => 'Project',
				'project_name' => 'Project Name',
				'project_desc' => 'Project Desc',
				'user_id' => 'User',
				'company_id' => 'Company',
				'createdate' => 'Createdate',
				'startdate' => 'Startdate',
				'duedate' => 'Duedate',
				'priority_id' => 'Priority',
				'active' => 'Active',
				'db_date' => 'Db Date' 
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
		
		$criteria->compare ( 'project_id', $this->project_id );
		$criteria->compare ( 'project_name', $this->project_name, true );
		$criteria->compare ( 'project_desc', $this->project_desc, true );
		$criteria->compare ( 'user_id', $this->user_id );
		$criteria->compare ( 'company_id', $this->company_id );
		$criteria->compare ( 'createdate', $this->createdate );
		$criteria->compare ( 'startdate', $this->startdate );
		$criteria->compare ( 'duedate', $this->duedate );
		$criteria->compare ( 'priority_id', $this->priority_id );
		$criteria->compare ( 'active', $this->active );
		$criteria->compare ( 'db_date', $this->db_date, true );
		
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
	 * @return Project the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
}
