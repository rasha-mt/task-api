<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends ClientController
{

public function obtainAllTasks(){

$tasks=$this->getAllTasks();

return view('tasks.viewAllTasks',['tasks'=>$tasks]);

}
/***************get specific task******************************/
public function getOneTask(Request $request){
   $tasks=$this->getAllTasks();

  return view ("tasks.selectInputTask",['tasks'=>$tasks]);
}
/*****************************************************/
public function postOneTask(Request $request){

//  $this->validate($request->input('task_id'),['task_id'=> 'required|numeric']);
  $taskId= $request->input('task_id');
  $tasks=$this->obtainOneTask($taskId);

    return view('tasks.viewTask',['tasks'=>$tasks]);

}
/////////////////////////

public function getThisTask($id){

  $tasks=$this->getATask($id);
  return view('tasks.viewTask',['tasks'=>$tasks]);
}

/*********************redirect to input form ************************/
public function getCreatedTask(){

  return view('tasks.createTask');
}
/**************************create new task***************************/
public function postCreatedTask(Request $request){

  $this->createNewTask($request->all());
  $msg="the template is created successfully";
   return redirect('/api/tasks')->with('success',$msg);

}
/*********************redirect to input form ************************/
public function getUpdatedTask(){

  $tasks=$this->getAllTasks();

  return view('tasks.selectUpdatedTask',['tasks'=>$tasks]);
}
/**************************create new task***************************/
public function postUpdatedTask(Request $request){

    $taskId=$request->input('task_id');

    $tasks=$this->getATask($taskId);
  //  $s=$request->input('due');
$tasks->due= date('m/d/Y', $tasks->due);
   //dd($tasks->due);
   //dd($tasks);
    return view('tasks.updateTask',['task'=>$tasks]);

}
/////////////////////////
/**************************create new task***************************/
public function putUpdatedTask(Request $request){

  $this->updateOneTask($request->all());
  $msg="the template is updated successfully";
  return redirect('/api/tasks')->with('success',$msg);

}
/////////////////
////////////////////////////////*

public function getRemovedTask(){

  $task=$this->getAllTasks();
  return view('tasks.selectRemovedTask',['tasks'=>$task]);

}
/////////////////////////
////////////////////////////////*

public function postRemovedTask(Request $request){

      $taskId=$request->input('task_id');

      $tasks=$this->getATask($taskId);
    //  $s=$request->input('due');
     //$tasks['due']=date($s);
     //dd($tasks);
      return view('tasks.confirmRemovedTask',['tasks'=>$tasks]);

}
/////////////////////////

public function deleteRemovedTask(Request $request){

  $this->removeOneTask($request->all());
  $msg="the task is deleted successfully";
  return redirect('/api/tasks')->with('success',$msg);
}
/////////////////////////
}
