<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>My Blog @yield('title')</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <style>
      .card-footer{
        display:flex;
        flex-direction:row;
        justify-content:space-around;
      }
     </style>
    </head>
<body>
     
     <nav class="navbar navbar-expand-lg navbar-dark bg-info">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <h1>MustaDev</h1>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/posts/all">Posts</a>
              </li>

          </ul>
          <ul class="navbar-nav style = "padding-right:40px"> <li class="nav-item">

            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Welcome {{ Session::get('loginName') }} 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                      <div class="dropdown-divider"></div>
                     
                      <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                  </li>
            </li></ul>     
        </div>
     </nav>
     <div class="container" style = "margin-top:30px">
      @yield('contents')
    </div>
    @section('footer')
    <div class="card-footer bg-secondary text-white" style = "margin-top:50px">
        <p>Copyright &copy; {{ date('Y') }} Mustapha, All rights reserved</p> 
      </div>
     @show()
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>