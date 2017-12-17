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

    //to call the show function the url is index.php?page=accounts&action=all

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
        $user = accounts::findUserbyEmail($_REQUEST['email']);


        if ($user == FALSE) {
            $user = new account();
            $user->email = $_POST['email'];
            $user->fname = $_POST['fname'];
            $user->lname = $_POST['lname'];
            $user->phone = $_POST['phone'];
            $user->birthday = $_POST['birthday'];
            $user->gender = $_POST['gender'];
            $user->password = $user->setPassword($_POST['password']);
            $user->save();
            //newly registered user will go back to the logon page to start their session
			header("Location: index.php");
        
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
        $user = accounts::findOne($_SESSION['userID']);

        $user->email = $_POST['email'];
        $user->fname = $_POST['fname'];
        $user->lname = $_POST['lname'];
        $user->phone = $_POST['phone'];
        $user->birthday = $_POST['birthday'];
        $user->gender = $_POST['gender'];
        $user->save();
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
        $user = accounts::findUserbyEmail($_REQUEST['email']);


        if ($user == FALSE) {
            echo 'Sorry, this user does not exist. Please try again or register.';
			echo( "<button onclick= \"location.href='index.php'\">Back to Home Page</button>");
        } else {
									
			if($user->checkPassword($_POST['password']) == TRUE) {
                session_start();
                $_SESSION["userID"] = $user->id;
				$_SESSION["userEmail"] = $user->email;
                //forward the user to the show all todos page
				header('Location: index.php?page=tasks&action=all&id='.$user->id);
            } else {
                echo 'Password does not match. Click the here and try again >>>>>';
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