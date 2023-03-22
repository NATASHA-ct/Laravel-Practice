<h2>USER LOGIN</h2>

<form action="users" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login">

</form>