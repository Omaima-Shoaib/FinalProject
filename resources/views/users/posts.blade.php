
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body >
@include('includes.navbar')
   <p style="text-align: center">User has {{ $countposts }} Posts</p> 
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

       <td  style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"><a style='color:#563d7c' href=" {{ route('users.show',$id) }} " > {{$name    }}</a></td>
       <td  style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"><a style='color:#563d7c' href="# " > {{$post['title']}}</a></td>
       <td style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70">{{$post['body']}}</td>
       <td style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70">{{$post['enabled']}}</td>
       {{-- <td style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70">{{$post['published_at']}}</td> --}}
       <td style="border-bottom:1px solid #563d7c70">
        
    
        </td>
</tr>
    @endforeach
</table>
</body>
</html>