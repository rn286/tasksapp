<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $todo = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $todo);
    }
public static function newTodoform()
{
	self::getTemplate('create_task');
}
    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        session_start();
        $records = todos::findAll();
        $userID = $_SESSION['userID'];
        
        $records = todos::findTasksbyID($userID);

        self::getTemplate('all_tasks', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

//this is the function to create  record form
    public static function create()
    {
        session_start();
        $email = $_SESSION['userEmail'];
        self::getTemplate('create_task', $email);
    }

    //this is the function to view edit record form
    public static function edit()
    {

        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->body = $_REQUEST['body'];
        $record->save();
        print_r($_POST);

    }

	public static function save()
    {
        session_start();
        $task = todos::findOne($_REQUEST['id']);


        if ($task == FALSE) {
            $task = new todo();
            $task->ownerid = $_SESSION['userID'];
            $task->message = $_REQUEST['message'];
            $task->owneremail = $_REQUEST['owneremail'];
			$dtz = new DateTimeZone("America/New_York"); //My timezone
			$date = new DateTime(date("Y-m-d"), $dtz);
			$task->createddate = $date->format('Y-m-d');
           // $task->createddate = $date->format('Y-m-d H:i:s');
		    $task->duedate = $_REQUEST['duedate'];
            $task->isdone = $_REQUEST['isdone'];
            $task->save();
        } else {
            $task->ownerid = $_SESSION['userID'];
            $task->message = $_REQUEST['message'];
            $task->owneremail = $_REQUEST['owneremail'];
            $task->isdone = $_REQUEST['isdone'];
            $task->save();
        }

        header('Location: index.php?page=tasks&action=all');
    }
	
	
    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header('Location: index.php?page=tasks&action=all');

    }

}