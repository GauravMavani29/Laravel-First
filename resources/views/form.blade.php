{{-- @if($errors->any())
@foreach ($errors->all() as $err)
    <li>{{$err}}</li>
@endforeach
@endif --}}
<?php
error_reporting(0);
?>
<form method="POST" action="formSubmit">
    {{method_field('PUT')}}
 @csrf
    <label>Name</label> <br>
    <input type="text" name="name" value="{{old('name')}}" > <br> 
    <span>@error('name'){{$message}} @enderror </span><br>
    <label>Password</label> <br>
    <input type="text" name="password"><br>
    <span>@error('password'){{$message}} @enderror </span><br>
    <input type="submit" name="submit">
</form>