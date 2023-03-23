<h2>USER LOGIN</h2>


<!-- Error displaying by looping throu  {{$errors}} array-->
@if($errors->any())
    <ul>
        <!-- a method call that retrieves all the validation errors for a form in Laravel, which is a PHP web application framework. -->
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

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