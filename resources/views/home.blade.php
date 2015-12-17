<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
      <div class="container">
        <div class="content">
          <div class="title">
            Laravel 5
          </div>
          You are Logged In
          <h4>Your name is {{Auth::user()->name}}</h4>
          <h4>Your email is {{Auth::user()->email}}</h4>
          <img src="{{Auth::user()->avatar}}" height="200" width="200" alt="" />

        </div>
      </div>
    </body>
</html>
