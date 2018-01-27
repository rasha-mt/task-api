<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Foundation\Http\FormRequest;


class ClientController extends Controller
{
    //
      protected function performRequest($method,$url,$parameters=[]){

    $client = new Client([
    'headers' => [ 'Authorization'=>'0aad3f53-e918-4ea5-b1fc-08a72670bc9e' ]
]);
//dd(json_encode($parameters));
$response = $client->request($method,$url,
    ['body' => json_encode($parameters)]
);

      // $client= new Client(['curl'=> [CURLOPT_CAINFO=> base_path('resources/certs/cacert.pem')]]);

       return $response->getBody()->getContents();

}

///////////////////////////////////////////////////////////////////////////////////
   protected function performGetRequest($url){
//     dd($url);

      $contents= $this->performRequest('GET',$url);
      $decodeContent= json_decode($contents);
    // dd($decodeContent);
      return $decodeContent->data;
      }
///////////////////////////////
protected function performPostRequest($url,$parameters){
//  $data = json_encode($parameters);
//dd($data );
    $contents= $this->performRequest('POST',$url,$parameters);

   $decodeContent= json_decode($contents);
// dd($decodeContent);
   return $decodeContent->data;
   }
/**********************************/
///////////////////////////////
protected function performPutRequest($url,$parameters){

//dd($data );
    $contents= $this->performRequest('PUT',$url,$parameters);

   $decodeContent= json_decode($contents);
// dd($decodeContent);
   return $decodeContent->data;
   }
/**********************************/
///////////////////////////////
protected function performDeleteRequest($url,$parameters){

//dd($data );
    $contents= $this->performRequest('Delete',$url,$parameters);

   $decodeContent= json_decode($contents);
// dd($decodeContent);
   return $decodeContent->data;
   }
/**********************************/

    protected function getAllTasks(){

    return  $this->performGetRequest("http://capi.tokeet.com/v1/task?account=1499700995.4461");

    }

//////////////////when click task link////////////////////////////
protected function getATask($taskId){
  return  $this->performGetRequest("http://capi.tokeet.com/v1/task/{$taskId}?account=1499700995.4461");

}
///////////////////////////////////////////////

protected function obtainOneTask($taskId){
  return  $this->performGetRequest("http://capi.tokeet.com/v1/task/{$taskId}?account=1499700995.4461");
}
//////////////////create a new Task////////////////////////////
protected function createNewTask($parameters=[]){

  return  $this->performPostRequest("https://capi.tokeet.com/v1/task?account=1499700995.4461",$parameters);

}

/*/**************************/
protected function updateOneTask($parameters){

   $taskId=$parameters['pkey'];
  return  $this->performPutRequest("https://capi.tokeet.com/v1/task/{$taskId}?account=1499700995.4461",$parameters);

}
/*/**************************/
protected function removeOneTask($parameters){

   $taskId=$parameters['pkey'];
  return  $this->performDeleteRequest("https://capi.tokeet.com/v1/task/{$taskId}?account=1499700995.4461",$parameters);

}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////Template functions///////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////

    protected function getAllTemplates(){

    return  $this->performGetRequest("http://capi.tokeet.com/v1/template?account=1499700995.4461");

    }

//////////////////when click task link////////////////////////////
protected function getATemplate($tempId){
  return  $this->performGetRequest("http://capi.tokeet.com/v1/template/{$tempId}?account=1499700995.4461");

}
///////////////////////////////////////////////

protected function obtainOneTemplate($tempId){
  return  $this->performGetRequest("http://capi.tokeet.com/v1/template/{$tempId}?account=1499700995.4461");
}
//////////////////create a new Task////////////////////////////
protected function createNewTemplate($parameters=[]){

  return  $this->performPostRequest("https://capi.tokeet.com/v1/template?account=1499700995.4461",$parameters);

}

/*/**************************/
protected function updateOneTemplate($parameters){

   $tempId=$parameters['pkey'];
  return  $this->performPutRequest("https://capi.tokeet.com/v1/template/{$tempId}?account=1499700995.4461",$parameters);

}
/*/**************************/
protected function removeOneTemplate($parameters){

   $tempId=$parameters['pkey'];
  return  $this->performDeleteRequest("https://capi.tokeet.com/v1/template/{$tempId}?account=1499700995.4461",$parameters);

}
}
