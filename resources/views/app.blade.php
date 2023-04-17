<style>
.contendor {
  display: grid;
  grid-template-columns: 50% 50%;
  background-color: #2196F3;
  margin-top: -20px;
}
.section {
  display: flex;
  border: 1px solid rgba(37, 107, 176, 0.42);
  padding: auto;
  height: 46.5vh;
  line-height: 48vh;
  justify-content: center;
  align-items: center;
  font-size: 30px;
  text-align: center;
  cursor: pointer;
}

.frame {
  line-height: 60%;
  text-align: center;
  justify-content: center;
  background-color: rgb(238, 238, 238);
  width: 60%;
  height: 60%;
}

#compete {
  background-color: rgb(225, 19, 19);
}

#gallery {
  background-color: rgb(255, 183, 0);
}

#subscribe {
  background-color: rgb(13, 112, 16);
}

#record {
  background-color: rgb(48, 151, 225);
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Nubik</title>
</head> 
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="{{ url('/img/rubik.png') }}" alt="logo_nubik"> NUBIK</a>
          </div> 
          <ul class="nav navbar-nav navbar-right ">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Competions<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">3 x 3</a></li>
                <li><a href="#">2 x 2</a></li>
                <li><a href="#">4 x 4</a></li>
                <li><a href="#">Friendly</a></li>
              </ul>
            </li>
            <li><a href="#">About Us</a></li>
          </ul>
          {{-- <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul> --}}
        </div>
      </nav>
      @yield('content');
      @yield('formulari');
</body>
</html>