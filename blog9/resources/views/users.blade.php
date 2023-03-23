<h2>USER LOGIN</h2>

<form action="users" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<br>
    <br>

    <input type="text" name="username" placeholder="Username">
<br>
    <br>
    <input type="password" name="password" placeholder="Password">
<br>
    <br>
    <input type="submit" value="Login">

</form>