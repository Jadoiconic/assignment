<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Custom Authentication</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <style>
          *{
               margin:
          }
          .container{
               display: flex;
               justify-content:space-around;
               align-items:center;              
          }
     </style>
</head>
<body>
     <div class="container">
          <div class="row">
               <div class="" style = "margin-top:20px;">
                    <h4>User Login</h4><hr>
                    <form action="{{ route('login-user') }}" method="post">
                         @csrf
                         @if (Session::has('success'))
                                   <div class="alert alert-success"> {{ Session::get('success') }}</div> 
                         @endif
                         @if (Session::has('fail'))
                         <div class = "alert alert-success">{{ Session::get('fail') }}</div>
                         @endif
                         <div class="form-group">
                              <label for="Email">Email</label>
                              <input type = "text" name = "email" value = "{{ old('email') }}" class = "form-control">
                              <span class="alert text-danger">@error('email') {{ $message }} @enderror</span>
                         </div>
                         <div class="form-group">
                              <label for="password">Password</label>
                              <input type = "password" name = "password" value = "{{ old('password') }}" class="form-control">
                              <span class="alert text-danger">@error('password') {{ $message }} @enderror</span>
                         </div>
                         <div class="form-group">
                              <button  class="btn btn-primary" type = "text"> submit </button>
                         You don't have account? -> <a href="registration">Register here ..</a>
                    </div>
                    </form>
                    
               </div>
          </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>