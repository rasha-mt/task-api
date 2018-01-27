<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends ClientController
{
    //

public function obtainAllTemplates(){

$temps=$this->getAllTemplates();

return view('templates.viewAllTemplates',['temps'=>$temps]);

}
/***************get specific task******************************/
public function getOneTemplate(Request $request){
   $temps=$this->getAllTemplates();

//dd($temps);
  return view("templates.selectInputTemplate",['temps'=>$temps]);
}
/*****************************************************/
public function postOneTemplate(Request $request){

//  $this->validate($request->input('task_id'),['task_id'=> 'required|numeric']);
 $tempId= $request->input('temp_id');

  $temps=$this->obtainOneTemplate($tempId);
  if(is_numeric($temps->type)){
  $num=['true'];
    }else{
    $num=['false'];
    }
    return view('templates.viewTemplate',['temps'=>$temps,'num'=>$num]);

}
/////////////////////////

public function getThisTemplate($id){

  $temps=$this->getATemplate($id);
  if(is_numeric($temps->type)){
  $num=['true'];
}else{
$num=['false'];
}

  return view('templates.viewTemplate',['temps'=>$temps,'num'=>$num]);
}

/*********************redirect to input form ************************/
public function getCreatedTemplate(){

  return view('templates.createTemplate');
}
/**************************create new task***************************/
public function postCreatedTemplate(Request $request){

   $this->createNewTemplate($request->all());
   $msg="the template is created successfully";
   return redirect('/api/templates')->with('success',$msg);

}
/*********************redirect to input form ************************/
public function getUpdatedTemplate(){

  $temps=$this->getAllTemplates();

  return view('templates.selectUpdatedTemplate',['temps'=>$temps]);
}
/**************************create new task***************************/
public function postUpdatedTemplate(Request $request){

    $tempId=$request->input('temp_id');

    $temps=$this->getATemplate($tempId);
  //  $s=$request->input('due');
$temps->created= date('m/d/Y', $temps->created);
   //dd($tasks->due);
   //dd($tasks);
    return view('templates.updateTemplate',['temp'=>$temps]);

}
/////////////////////////
/**************************create new task***************************/
public function putUpdatedTemplate(Request $request){

  $this->updateOneTemplate($request->all());
  $msg="the template is Updated successfully";
  return redirect('/api/templates')->with('success',$msg);

}
/////////////////
////////////////////////////////*

public function getRemovedTemplate(){

  $temps=$this->getAllTemplates();
  return view('templates.selectRemovedTemplate',['temps'=>$temps]);

}
/////////////////////////
////////////////////////////////*

public function postRemovedTemplate(Request $request){

      $tempId=$request->input('temp_id');

      $temps=$this->getATemplate($tempId);

     //dd($temps);
      return view('templates.confirmRemovedTemplate',['temps'=>$temps]);

}
/////////////////////////

public function deleteRemovedTemplate(Request $request){

  $this->removeOneTemplate($request->all());
  $msg="the template is deleted successfully";
  return redirect('/api/templates')->with('success',$msg);
}
/////////////////////////
}
