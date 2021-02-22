<form action="login" method="POST">
    @csrf
    <label for="">Username</label>
    <input type="text" name="username"><br>
    <label for="">Password</label>
    <input type="text" name="password"><br>
    <input type="submit" name="submit">
</form> 