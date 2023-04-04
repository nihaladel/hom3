
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
public function index(){
$ttasks=DB::table('ttasks')->get();
return view('tasks',compact('ttasks'));
}

public function store(Request $request){
  DB::table('ttasks')->insert([
      'name' => $request-> name,
      'created_at' => now(),
      'updated_at' => now()
  ]);
    return 'store' ;
    }


    public function delete($id){
        DB::table('ttasks')-> where('id','=',$id)->delete();
          return redirect()->back();
          }
      
    public function update($id){
        DB::table('ttasks')-> where('id','=',$id)->update(['options-> enable'=>true]);
          return redirect()->back();
          }
              
    }