@if(session('user'))
<h1 style="color: green">{{session('user')}}</h1>
@endif

<form action="flash" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="">Username</label>
    <input type="text" name="username"><br>
    <label for="">Password</label>
    <input type="text" name="password"><br>
    <input type="file" name="file"><br>
    <input type="submit" name="submit">
</form>