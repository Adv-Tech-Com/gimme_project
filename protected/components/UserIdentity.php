<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * 
	 * @return boolean whether authentication succeeds.
	 */
	private $_id;
	private $_role;
	
	public function authenticate()
	{
		$user	= User::model()->find('LOWER(email_id)=?',array(strtolower($this->username)));
		
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id			= $user->user_id;
			$this->username		= $user->admin_id;
			$this->setState('username',		$user->username);
			$this->setState('companyid',	$user->company_id);
			$this->setState('fullname',		$user->fullname);
			$this->setState('emailid',		$user->email_id);
			
			$this->errorCode	= self::ERROR_NONE;
			
			$model_company	= new Company();
			$current_company = $model_company->findByPk( $user->company_id );
			$this->setState('company',		$current_company->cname );
			
		}
		return $this->errorCode==self::ERROR_NONE;
		
	}
	
	public function getId()
	{
		return $this->_id;
	}
			
}