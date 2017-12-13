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
        self::getTemplate('show_task', $record);
    }
public static function newTodoform()
{
	self::getTemplate( template,'show_task');
}
    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        $records = todos::findAll();
        session_start();

        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);

        self::getTemplate('all_tasks', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

//this is the function to create  record form
    public static function create()
    {
        $todo = new todo();
		
		$todo->ownerid = $_SESSION['userID'];
		$todo->createdate = now();
		$todo->isdone = $_POST['isdone'];
		$todo->message = $_POST['message'];
		$todo->owneremail = $_POST['owneremail'];
		$todo->duedate = $_POST['duedate'];
		$todo->save();
    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

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
        
		$task = todos::findOne($_REQUEST['id']);
		$task->message = $_POST['message'];
		$task->owneremail = $_POST['owneremail'];
		$task->isdone = $_POST['owneremail'];
		$task->save();
		
		print_r($task);
    }
	
	
    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        print_r($_POST);

    }

}