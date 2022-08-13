<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style> <style>
        .label{
            display: inline-flex;
            width: 100px;
        }
        .main{
            margin-top: 25px
        }
    </style>
</head>
<body  >
    @section('title',$title)
    @extends('layouts.dashboard')

@section('content')


    <form style='margin:auto' action=" {{ route('posts.update',$id) }}" method='POST'>
    @csrf
    @method('put')
<div class="container">
    
    <div class="label">
        title
      </div>
        <input type="text" name="title" id=""><br><br>
        @error('title')
        <p style="color: red;margin-left:20px">* invalid title</p>
            @enderror    
    
      <div class="label">
        body</div>
        <textarea type="text" name="body" id="" cols="18"></textarea><br><br>
        @error('body')
    <p style="color: red;margin-left:20px">* invalid body content</p>
        @enderror
{{--       
            <div class="label">
            user ID </div>
            <input type="text" name="user_id" id=""><br><br>
        --}}
    
        <div class="label">
        enabled 
        <input type="checkbox" value=""  name="enabled" id="" style="margin-left:50px"><br><br>
      
        </div>  
    
        <div class="label">
        published at</div>
        <input type="date" name="published_at" id="">
    
    
            <br><br>
            <button type="submit" style="background-color: #563d7c;color:white;border:none;border-radius:5px;width:100px">Save</button>
    </form>
    @endsection
</body>
</html>