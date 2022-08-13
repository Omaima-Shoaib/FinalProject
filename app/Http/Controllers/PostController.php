<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(Request $request){
      
      $posts = Post::paginate(15);
    $numberofposts= Post::get();
      $countposts=$numberofposts->count();
      if($request->has('view_deleted')){
        $posts=Post::onlyTrashed()->get(); 
        if($posts->count()==0){
          return view('posts.empty');

        }
      }
      if($countposts<=0){
        return view('posts.empty');
      }
      else{ 
     
           // return view('users.index',['users' =>$users]);
      foreach ($posts as $post){
      // return $user->name;
      // $user=Post::find()->user;
      return view('posts.index',['posts'=>$posts]);
    }}
  
  }
    public function create()
    {$user = Auth::user();
      if (Auth::check()) {
        // The user is logged in...
    
        return view('posts.create');
    }
else return redirect('dashboard');
  }

    public function store(StorePostRequest $request)
    {

      $user=Auth::user();
      
    /*  $validatedData = $request->validate([

        'title' => 'required|max:100',
        'body' => 'required|max:1000']);
        $request -> all();*/
      $posts = Post::paginate(15);
      if($request->file('image')->isvalid()){
       $data['image']= $request->file('image')->store('posts','images');
      if(isset($request['enabled'])){
$user->posts()->create(['title'=>$request['title'],'body'=>$request['body'],'user_id'=>$request['user_id'],'enabled'=>1,'published_at'=>$request['published_at'],'image'=>$data['image']]);
/* Post::create(['id'=>$request['id'],'title'=>$request['title'],'body'=>$request['body'],'user_id'=>$request['user_id'],'enabled'=>1,'published_at'=>$request['published_at']]);
 xxx not workin  Post::create(['id'=>$request['id'],'title'=>$request['title'],'body'=>$request['body'],'enabled'=>1,'published_at'=>$request['published_at']]);*/
}
else{
  $user->posts()->create(['title'=>$request['title'],'body'=>$request['body'],'user_id'=>$request['user_id'],'enabled'=>1,'published_at'=>$request['published_at'],'image'=>$data['image']]);

/*  Post::create(['id'=>$request['id'],'title'=>$request['title'],'body'=>$request['body'],'user_id'=>$request['user_id'],'enabled'=>0,'published_at'=>$request['published_at']]);
 Post::create(['id'=>$request['id'],'title'=>$request['title'],'body'=>$request['body'],'enabled'=>0,'published_at'=>$request['published_at']]);*/

}
}
else return "invalid image";
//Post::create($request->all());

// return view('users.create') ;

 return redirect('posts');



}

public function edit(Request $request ,$id){
$userid=Auth::id();
if($request['user_id'] ==$userid){
  $posts = Post::paginate(15)->where('id','=',$id);
  
  return view('posts.edit',['id'=>$id,'title'=>$request['title']]);
  // return "edit page";
}
else return "
<p style='color:#563d7c;text-align:center;font-size:25px'>only owner can edit the post</p> ";

}
public function update(StorePostRequest $request, $id)
{
  // $user=Auth()::user();
  // $validatedData = $request->validate();

  if(isset($request['enabled'])){

    Post::where('id',$id)->update(
       ['title'=>$request['title'],'body'=>$request['body'],'enabled'=>1,'published_at'=>$request['published_at']]
      //  ['title'=>$request['title'],'body'=>$request['body'],'enabled'=>1,'published_at'=>$request['published_at']]
    );}
    else{
      Post::where('id',$id)->update(
        ['title'=>$request['title'],'body'=>$request['body'],'enabled'=>0,'published_at'=>$request['published_at']]
        // ['title'=>$request['title'],'body'=>$request['body'],'enabled'=>0,'published_at'=>$request['published_at']]
     );
    }
return redirect()->route('posts.index');

}

public function delete($id){
Post::find($id)->delete();
return redirect('posts');

}

public function restore($id){
Post::withTrashed()->find($id)->restore(); 
return redirect()->route('posts.index');

}
public function show(Post $id,Request $request){
 $posts= Post::where('id',$request['post'])->get();
 
// dd($posts);
return view('posts.show',['post'=>$id,'title'=>$request['title'],'posts'=>$posts]);
    }
}

