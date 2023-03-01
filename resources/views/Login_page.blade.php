<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="contanier">
        <div class="form-control">
            <h2>Login Form</h2>
            <hr>
            <form action="{{'/Loginpage'}}" method="post">
              @if(Session::has('success'))
              <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('failure'))
            <div class="alert alert-danger">{{Session::get('failure')}}</div>
          @endif
                @csrf
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{old('email')}}"><br><br>
            @error('email')
            <div class="alert alert-danger">{{$message}}</div> 
        @enderror
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            @error('password')
            <div class="alert alert-danger">{{$message}}</div> 
        @enderror
          
        
            <input type="submit" value="login">
            <input type="reset" value="Reset">
            <hr>
            <a href="/">Registration !!!</a>
        </form>
        </div>
    </div>
  </body>
</html>