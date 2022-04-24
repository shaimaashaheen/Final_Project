<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
  public function index(){
      //$tasks = DB::table('tasks')
      //-> orderBy('name','asc')
      //->get();

      $tasks = Task::all();
      return view('tasks',compact('tasks'));
  }

  public function store(Request $request){
     // DB::table('tasks')->insert([
       //   'name' => $request->name,
         // 'created_at' => now(),
          //'updated_at' => now()
      //]);

     $task = new Task();
     $task ->name = $request -> name;
     $task -> save();
     return redirect()->back();
    }

  public function delete($id){
     // DB::table('tasks')->where('id','=', $id)->delete();

      Task::find($id) -> delete();
      return redirect()->back();
  }

  public function update($id){
      //$tasks = DB::table('tasks') -> where('id',$id) -> first();
      $tasks = Task::find($id);
     return view('update' , compact('tasks'));
 }

 public function Edit(Request $request ,$id){
     //$data = array();
     //$data['name'] = $request -> name;
    // $data['id'] = $request -> id;
     //DB::table('tasks') -> where('id', $id) -> update($data);
     //$tasks = Task::all();

     $task = Task::find($id);
     $task -> name = $request -> name;
     $task -> save();
     return 'Task Name Updated';
}
}
