<h1>
    I love PHP, I love Laravel, Now lets learn.
</h1>

<div>
    {{URL::current()}}
    <br>
    <a href="about">ABOUT</a>
    <br>
    <a href="welcome">WELCOME</a>
    <br>
    <a href="name">NAME</a>
    <br>
    <a href="login">LOGIN</a>
<br>
    {{URL::previous()}}


    <form action="{{URL::TO('/save_data')}}">
      <input type="text">
      <button type="submit">SUBMIT</button>

    </form>

    <br>

    <br>
     
  <x-header data='Yes ,this is infor passed to the header component' />
</div>