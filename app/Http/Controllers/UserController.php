<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {$id=$request['id'];
     $users = User::paginate(15);
     $name= $request['name'];
        if($request->has('view_posts')){
            $posts = User::find($id)->posts;

        $countposts=$posts->count();
        return view('users.posts',['posts'=>$posts,'id'=>$id,'name'=>$name,'countposts'=>$countposts]);
      }
      else{
        // return view('users.index',['users' =>$users]);
        foreach ($users as $user){
        // return $user->name;
        return view('users.index',['users'=>$users]);
    }}


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//         $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
//         true);
      
//     // dd( $request -> all());
  
// array_push($users,['id'=>$request['id'],'name'=>$request['name'],'email'=>$request['email'],'email_verified_at'=>"2022-08-06 21:47:32"]);

$users = User::paginate(15);
User::create(['id'=>$request['id'],'password'=>$request['password'],'name'=>$request['name'],'email'=>$request['email']]);
return redirect()->route('users.index');

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        $users = User::paginate(15)->where('id','=',$id);
        $posts = User::find($id)->posts;
      
        // return view('users.index',['users' =>$users]);
        foreach ($users as $user){
        // return $user->name;
        return view('users.show',['users'=>$users,'posts'=>$posts]);
    
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $users = User::paginate(15)->where('id','=',$id);
        foreach($users as $user){
        return view('users.edit',['id'=>$id,'name'=>$user['name']]);
    }
    

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        User::where('id',$id)->update(
        //    ['id'=>$request['id'],'name'=>$request['name'],'email'=>$request['email']]
           ['password'=>$request['password'],'name'=>$request['name'],'email'=>$request['email']]
        );
return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    { 

        // User::where('id','=',$id)->delete();
       $id = User::find($id);
       $id->delete();
    //    User::withTrashed()->where('id',$id)->get();
        // User::withTrashed()->where('id',$id)->get;    
        return redirect()->route('users.index');
    }
  
}
