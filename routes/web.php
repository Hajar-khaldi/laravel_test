<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/exemple',function() {
    return "Hi! my name is Hajar ";
});

//We can also pass the multiple parameters.  
  
// Route::get('/post/{id}/{name}', function($id,$name)  
// {  
//   return "id number is : ". $id ." ".$name;   
// }  
// );
//->where(['id'=>'[0-9]+']);

// Route::get('student/details', function()  
// { 
//   return "Redirection succeed";
// }) -> name('student_details');


// Route::get('student/redirection_to_student_details', function()  
// {
// //Generating URLs 
// $url= route('student_details');
// //Generating Redirects...  
// return redirect() -> route('student_details');
// });

// Route::get('user/{id}/profile',function($id)  
// {  
//    $url=route('profile',['id'=>100]);  
//     return $url;  
// })->name('profile'); 



// Route::Get('/',function()  
// {  
//   return view('student');  
// });  
  
// Route::get('student/details',function()  
// {  
//   $url=route('student.details');  
//  return $url;  
// })->name('student.details');  

// Route::get('student/details/example',array   
// ('as'=>'student.details',function()  
// {  
//    $url=route('student.details');  
//    return "The url is : " .$url;  
// }));  

// // Route::get("/",function(){
// //   return view('welcome');
// // })->middleware('age');

// Route::get("user/profile",function(){
//   return "user profile";
// });

// Route::get("/{age}",function($age){
//   return view("welcome");
// })->middleware("age");


// Route::group([], function()  
// {  
//    Route::get('/first',function()  
//  {  
//    echo "first route";  
//  });  
// Route::get('/second',function()  
//  {  
//    echo "second route";  
//  });  
// Route::get('/third',function()  
//  {  
//    echo "third route";  
//  });  
// });  



// Route::group(["prefix"=>"tutorial"], function()  
// {  
//    Route::get('/aws',function()  
//  {  
//    echo "aws tutorial";  
//  });  
// Route::get('/jira',function()  
//  {  
//    echo "jira tutorial";  
//  });  
// Route::get('/testing',function()  
//  {  
//    echo "testing tutorial";  
//  });  
// });  



// Route::middleware(["age"])->group( function()  
// {  
//    Route::get('/aws',function()  
//  {  
//    echo "aws tutorial";  
//  });  
// Route::get('/jira',function()  
//  {  
//    echo "jira tutorial";  
//  });  
// Route::get('/testing',function()  
//  {  
//    echo Route("admin.users");  
//  });  
// });  



// Route::name('admin.')->group(function()  
// {  
//    Route::get('users', function()  
// {  
//  return "admin.users";  
// })->name('users');  
// });  
// Route::get("/post","PostController@create");
Route::get('/post/{id}', [StudentController::class,"create"]);
// Route::get('/post/{id}', PostController::class);
// Route::resource('posts',StudentController::class);
Route::resources([
  'post' => PostController::class,
  'student' => StudentController::class,
]);
// Route::resource('students',StudentController::class,['only'=>['create','show']]);
Route::resource('students',StudentController::class)->only(['create','show','edit']);
// Route::resource('student', 'StudentController',['names' => ['create' =>'student.build']]);  
Route::resource('students2',StudentController::class)->names(['edit'=>'student.build']);
Route::resource('post2',PostController::class)
->only(['show','edit'])
->names(['edit'=>'student.build'])
->parameters(['post2'=>'para']);

// Route::get('posts',[PostController::class,'create'])->middleware('check');
Route::get('posts/{id}',[PostController::class,'show']);
// Route::get('posts',PostController::class);

Route::get('/contact',function(){
  return view('Contact',['name'=>'john']);
});

// Route::get('/about',[PostController::class,'display']);

// Route::get('/details',[StudentController::class,'display']);

// Route::get('/details/{id}',[StudentController::class,'display']);

// Route::get('/details/{id}/{name}/{password}',[StudentController::class,'display']);
// Route::get('/details',[StudentController::class,'display']);
Route::get('/details/{i}',[StudentController::class,'display']);