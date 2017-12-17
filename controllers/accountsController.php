<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class accountsController extends http\controller
{

    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = accounts::findOne($_REQUEST['id']);
        self::getTemplate('show_account', $record);
    }

    public static function all()
    {

        $records = accounts::findAll();
        self::getTemplate('all_accounts', $records);

    }
    
    public static function register()
    {
        
        self::getTemplate('register');
    }

    //this is the function to save the user the new user for registration
    public static function store()

    {
        $record = accounts::findUserbyEmail($_REQUEST['email']);


        if ($record == FALSE) {
            $record = new account();
            $record->email = $_POST['email'];
            $record->fname = $_POST['fname'];
            $record->lname = $_POST['lname'];
            $record->phone = $_POST['phone'];
            $record->birthday = $_POST['birthday'];
            $record->gender = $_POST['gender'];
            $record->password = $record->setPassword($_POST['password']);
            $record->save();
     //newly registered user will be notified if registation was successful and will be asked to click Home page to Sign in
			echo '<h3>Thank you for registering. Click the Home Page button to Sign In.</h3>';
			echo( "<button onclick= \"location.href='index.php'\">Home Page</button>");
			
			
		} else {
            $error = 'A user with this email address has already registered';
            self::getTemplate('error', $error);

        }

    }

    public static function edit()
    {
        session_start();
        $record = accounts::findOne($_SESSION['userID']);

        self::getTemplate('edit_account', $record);

    }
//this is used to save the update form data
    public static function save() {
        session_start();
        $record = accounts::findOne($_SESSION['userID']);

        $record->email = $_POST['email'];
        $record->fname = $_POST['fname'];
        $record->lname = $_POST['lname'];
        $record->phone = $_POST['phone'];
        $record->birthday = $_POST['birthday'];
        $record->gender = $_POST['gender'];
        $record->save();
        header("Location: index.php?page=tasks&action=all");

    }

    public static function delete() {

        $record = accounts::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=accounts&action=all");
    }

    //this is to login, here is where you find the account and allow login or deny.
    public static function login()
    {
        $record = accounts::findUserbyEmail($_REQUEST['email']);


        if ($record == FALSE) {
            echo 'Sorry, this user does not exist. Please try again or register.';
			echo( "<button onclick= \"location.href='index.php'\">Back to Home Page</button>");
        } else {
									
			if($record->checkPassword($_POST['password']) == TRUE) {
                session_start();
                $_SESSION["userID"] = $record->id;
				$_SESSION["userEmail"] = $record->email;
                //forward the user to the show all todos page
				header('Location: index.php?page=tasks&action=all&id='.$record->id);
            } else {
                echo 'Password does not match. Click the Home Page button and try again >>>>>';
				echo( "<button onclick= \"location.href='index.php'\">Back to Home Page</button>");
            }

        }
    }

    public static function logout()
    {
        session_start();
        session_destroy();
        header("Location: index.php?page=homepage");
    }

}