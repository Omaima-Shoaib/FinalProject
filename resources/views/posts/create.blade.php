<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <style>
        .label{
            display: inline-flex;
            width: 100px;
        }
        .main{
            margin-top: 25px
        }
    </style>
</head>
<body >
{{-- @include('includes.navbar') --}}
@extends('layouts.dashboard')
@section('title','Create Post')
@section('content')
<div class="container">
  <div class="main">
    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
  <div class="label">
    title
  </div>
    <input type="text" name="title" id=""><br><br>
    @error('title')
<p style="color: red;margin-left:20px">* invalid title name</p>
    @enderror


  <div class="label">
    body</div>
    <textarea type="text" name="body" id="" cols="18"></textarea><br><br>
    @error('body')
    <p style="color: red;margin-left:20px">* invalid body content</p>
        @enderror
    
    {{-- <div class="label">
    user ID </div>
    <input type="text" name="user_id" id=""><br><br>
    --}}

    <div class="label">
    enabled </div>
    <input type="checkbox" value=""  name="enabled" id="" style="margin-left:50px"><br><br>
  

    <div class="label">
    published at</div>
    <input type="date" name="published_at" id=""> 
    <br>
    <br>
    <br>

      <input type="file" name="image" >

        <br><br>
        <button type="submit" style="background-color: #563d7c;color:white;border:none;border-radius:5px;width:100px">Save</button>
    </form></div>
</div>
@endsection
</body>
</html>