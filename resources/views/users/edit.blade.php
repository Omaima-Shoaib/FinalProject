<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body  >
    @section('title', $name)
    @extends('layouts.dashboard')

@section('content')
{{-- @include('includes.navbar') --}}

    <form style='margin:auto' action=" {{ route('users.update',$id) }}" method='POST'>
    @csrf
<div class="container">
    
    <div class="title"><p>Name</p></div>
    <div id="input"><input type="text" id="name" name='name' ></div>
        <br>
    <div class="title"><p>Password</p></div>
    <div id="input"><input type="text" id="password" name='password'  ></div>
        <br>
    <div class="title"><p>Email</p></div>
    <div id="input"><input type="text" name='email' ></div>
 
        <br>
   
    <br>
    <div class="btncontainer">
    <button type='submit' style="background-color: #563d7c;color:white;border:none;border-radius:5px;width:100px">Confirm   </button></div>
    </form>
    @endsection
</body>
</html>