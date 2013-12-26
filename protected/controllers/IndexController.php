<?php

/**
 * Home page or the landing page
 * @author Anil
 *
 */
class IndexController extends Controller {
	
	/**
	 *
	 * @var string the default layout for the views. Defaults to
	 *      '//layouts/column2', meaning
	 *      using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '//layouts/home';
	
	/**
	 * Declares class-based actions.
	 */
	public function actions() {
		return array (
				// captcha action renders the CAPTCHA image displayed on the
				// contact page
				'captcha' => array (
						'class' => 'CCaptchaAction',
						'backColor' => 0xFFFFFF 
				),
				// page action renders "static" pages stored under
				// 'protected/views/index/pages'
				// They can be accessed via: index.php?r=site/page&view=FileName
				 
		);
	}
	
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex() {
		// renders the view file 'protected/views/index/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render ( 'index' );
	}
	
	/**
	 * This is the 'about' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionAbout() {
		// renders the view file 'protected/views/index/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render ( 'about' );
	}
	
	/**
	 * Signing Up models
	 */
	public function actionSignup() {
		$model_user		= new User ();
		$model_company	= new Company();
		
		// uncomment the following code to enable ajax-based validation
		/*
		 * if(isset($_POST['ajax']) && $_POST['ajax']==='user-signup-form') {
		 * echo CActiveForm::validate($model); Yii::app()->end(); }
		 */
		
		if (isset ( $_POST ['User'] ) && isset( $_POST ['Company'] )) {
			$model_user->attributes		= $_POST ['User'];
			$model_company->attributes	= $_POST['Company'];
			
			// New Company Creation Default Values
			$model_company->clogo		= '/images/company/newcompany.png';
			$model_company->cdesc		= '';
			$model_company->cphone		= '';
			$model_company->cmobile		= '';
			$model_company->cemail		= $model_user->email_id;
			$model_company->cwebsite	= '';
			$model_company->caddress	= '';
			$model_company->ccity		= '';
			$model_company->ccountry	= '';
			$model_company->regdate		= time();
			$model_company->active		= 1;
			
			// Validate Company Values
			if ( $model_company->validate() ) {
				
				$full_names = explode(" ", $model_user->fullname );
				
				// Start Transaction SQL
				$transactions = Yii::app()->db->beginTransaction();
				
				// Save New Company and false for disable validation
				$success_company = $model_company->save(false);
				
				// Default Values for New Signed Up Companys' User
				$model_user->admin_id		= 3;
				$model_user->company_id		= $model_company->company_id;
				$model_user->username		= $full_names[0];
				$model_user->password		= $model_user->generateLoginPassword('9');
				$model_user->userphoto		= '/images/company/newuser.png';
				$model_user->regdate		= time();
				$model_user->lastactivedate	= time();
				$model_user->active			= '1';
				
				if ( $model_user->validate() )
				
				$success_user = $model_user->save(false);
				
				if ( !empty($success_company) && !empty($success_user) )
				{
					$transactions->commit();
					$message = "Your Company has been Successfully Registered.";
				}
				else {
					$transactions->rollback();
					$message = "A Problem Occured. Please try again later.";
				}
				
			}
			else {
				$model_user->validate();
			}
			
			/* 
			echo "<pre>";
			print_r($model_user->getErrors());
			echo "</pre>";
			
			echo "<pre>";
			print_r($model_company->getErrors());
			echo "</pre>";
			 */
		}
		$this->render ( 'signup', array (
				'model' => $model_user, 'model_company' => $model_company, 'message' => ( isset($message) ? $message : '' ) 
		) );
	}
	
	
	/**
	 * This is the 'FAQ' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionFaq() {
		// renders the view file 'protected/views/index/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render ( 'faq' );
	}
	
	
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError() {
		if ($error = Yii::app ()->errorHandler->error) {
			if (Yii::app ()->request->isAjaxRequest)
				echo $error ['message'];
			else
				$this->render ( 'error', $error );
		}
	}
	
	/**
	 * Displays the contact page
	 */
	public function actionContact() {
		$model = new ContactForm ();
		if (isset ( $_POST ['ContactForm'] )) {
			$model->attributes = $_POST ['ContactForm'];
			if ($model->validate ()) {
				$name = '=?UTF-8?B?' . base64_encode ( $model->name ) . '?=';
				$subject = '=?UTF-8?B?' . base64_encode ( $model->subject ) . '?=';
				$headers = "From: $name <{$model->email}>\r\n" . "Reply-To: {$model->email}\r\n" . "MIME-Version: 1.0\r\n" . "Content-Type: text/plain; charset=UTF-8";
				
				mail ( Yii::app ()->params ['adminEmail'], $subject, $model->body, $headers );
				Yii::app ()->user->setFlash ( 'contact', 'Thank you for contacting us. We will respond to you as soon as possible.' );
				$this->refresh ();
			}
		}
		$this->render ( 'contact', array (
				'model' => $model 
		) );
	}
	
	/**
	 * Displays the login page
	 */
	public function actionLogin() {
		
		if( Yii::app ()->user->isGuest === true)
		{
		
			$model = new LoginForm ();
			
			// if it is ajax validation request
			if (isset ( $_POST ['ajax'] ) && $_POST ['ajax'] === 'login-form') {
				echo CActiveForm::validate ( $model );
				Yii::app ()->end ();
			}
					
			// collect user input data
			if (isset ( $_POST ['LoginForm'] )) {
				$model->attributes = $_POST ['LoginForm'];
				// validate user input and redirect to the previous page if valid
				if ($model->validate () && $model->login ())
					
					if( Yii::app ()->user->returnUrl == '/')
					{
						Yii::app ()->user->returnUrl = '/project';
					}
					
					$this->redirect ( Yii::app ()->user->returnUrl );
			}
			// display the login form
			$this->render ( 'login', array (
					'model' => $model 
			) );
			
		}
		else {
			$this->redirect ( '/project' );
		}
		
		
	}
	
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout() {
		Yii::app ()->user->logout ();
		$this->redirect ( Yii::app ()->homeUrl );
	}
}