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

    /*public static function newTask()
    {
        //https://www.sitepoint.com/why-you-should-use-bcrypt-to-hash-stored-passwords/
        //USE THE ABOVE TO SEE HOW TO USE Bcrypt

        //this just shows creating an account.

        self::getTemplate('newTask');

    }*/

    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        //$records = todos::findAll();

        session_start();
        $userID = $_SESSION['userID'];

        $tasks = todos::findTasksbyID($userID);
        //print_r($tasks);

        //echo $userID;

        self::getTemplate('all_tasks', $tasks);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {
        //print_r($_POST);
        self::getTemplate('newTask');
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


        /*$record = todos::findOne($_REQUEST['id']);
        $record->body = $_REQUEST['body'];
        $record->save();
        print_r($_POST);*/

        $record = new todo();
        session_start();
        date_default_timezone_set( america/new_york );
        $record->owneremail = $_POST['owneremail'];
        //$record->ownerid = $_POST['ownerid'];
        $record->ownerid = $_SESSION['userID'];
        //$record->createddate = $_POST['createddate'];
        $record->createddate = date("Y-m-d");
        $record->duedate = $_POST['duedate'];
        $record->message = $_POST['message'];
        $record->isdone = $_POST['isdone'];
        $record->save();

        header("Location: index.php?page=tasks&action=all");

    }

    public static function save(){

        /*session_start();
        $task = new todo();

        $task->body = $_POST['body'];
        $task->ownerid = $_SESSION['userID'];
        $task->save();*/

        $record = todos::findOne($_REQUEST['id']);

        $record->owneremail = $_POST['owneremail'];
        //$record->ownerid = $_POST['ownerid'];
        //$record->createddate = $_POST['createddate'];
        $record->duedate = $_POST['duedate'];
        $record->message = $_POST['message'];
        $record->isdone = $_POST['isdone'];
        $record->save();

        header("Location: index.php?page=tasks&action=all");

    }

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        //print_r($_POST);
        header("Location: index.php?page=tasks&action=all");

    }

}