
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>

<body >

@extends('layouts.dashboard')
@section('title','Posts list')
@section('content')
 {{-- {{ $user['name']; }} --}}
<a href="{{ route('posts.index',['view_deleted' => 'DeletedRecords']) }}" style="color: #563d7c;text-align:center;margin-left:500px;">View deleted posts</a>
<table style='margin:auto;text-align:center'>   
    <tr style='background-color:#563d7c;color:white'>  
        <td style='width:200px'>User Name</td>
        <td style='width:200px'>Title</td>
        <td style='width:300px'>Body</td>
        <td style='width:100px'>Enabled</td>
        {{-- <td style='width:300px'>Published At</td> --}}
        <td style='width:200px'>Action</td>
       
</tr>

    @foreach($posts as $post)
       <tr>
      
       <td  style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"><a style='color:#563d7c' href="# " > {{ $post->user->name }}</a></td>
       <td  style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"><a style='color:#563d7c' href="# " > {{$post['title']}}</a></td>
       <td style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70">{{$post['body']}}</td>
       <td style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70">{{$post['enabled']}}</td>
       {{-- <td style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70">{{$post['published_at']}}</td> --}}
       <td style="border-bottom:1px solid #563d7c70">
        
        <table>
        <tr>
             <input hidden value= " {{ $post['id'] }} " name='myid'>    
            <td width=100px><button type='submit' style='border:none;background-color:#563d7c80;border-radius:5px;width:80px'><a href="{{ route('posts.show',['id'=>$post['id'],'title'=>$post['title'],'user_id'=>$post['user_id'],'post'=>$post]) }}" style="color: white">View</a></button></td>
            <td width=100px><button type='submit' style='border:none;background-color:#563d7c80;border-radius:5px;width:80px'><a href="{{ route('posts.edit',['id'=>$post['id'],'title'=>$post['title'],'user_id'=>$post['user_id']]) }}" style="color: white">Edit</a></button></td>
            <td>
                @if(request()->has('view_deleted'))
        <a href="{{ route('posts.restore',['id'=>$post['id']]) }}" style="color: #563d7c">Restore </a>
               
        @else
        <form action="{{ route('posts.delete',['id'=>$post['id']]) }}" method="Post">
                    @csrf
                    @method('Delete')
                <button type='submit' style='border:none;background-color:#563d7c;border-radius:5px;color:white;width:80px'>
                 Delete</button>
                </form>
        @endif
                </td>
            
</tr>      
        </table> 
        </td>
</tr>
    @endforeach
</table>
{{ $posts->links() }}
@endsection
</body>
</html>