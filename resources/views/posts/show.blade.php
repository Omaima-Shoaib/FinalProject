@extends('layouts.dashboard')
@section('content')

<table  style="text-align:center">
<tr>
    <td width=300px  style="border-bottom:1px solid #563d7c70">Image</td>
    <td width=200px style="border-bottom:1px solid #563d7c70">User Name</td>
    <td width=200px style="border-bottom:1px solid #563d7c70">title</td>
    <td width=200px style="border-bottom:1px solid #563d7c70">body</td>
</tr>
<td style="border-right:1px solid #563d7c70;">
<img src='{{ Storage::disk('images')->url($post->image) }}' width=200px  style='border-radius:25px;margin:auto'>
</td>
@foreach($posts as $mypost)


 <td style="border-right:1px solid #563d7c70;">  {{ $post->user->name }}</td>
 <td style="border-right:1px solid #563d7c70;">  {{ $mypost['title'] }}</td>
 <td >  {{ $mypost['body'] }}</td>
@endforeach
@endsection
</table>