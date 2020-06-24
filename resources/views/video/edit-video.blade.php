<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <link rel="shortcut icon" href="/img/est.jpg" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Modifier Video | {{$video->id}}</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />


  <!-- Bootstrap core CSS     -->
  <link href="/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Animation library for notifications   -->
  <link href="/css/animate.min.css" rel="stylesheet" />

  <!--  Light Bootstrap Table core CSS    -->
  <link href="/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />


  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="/css/demo.css" rel="stylesheet" />


  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="/css/pe-icon-7-stroke.css" rel="stylesheet" />


</head>

<body>



  <div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="/img/sidebar-4.jpg">

      <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="/admin" class="simple-text">
            Admin
          </a>
        </div>

        <ul class="nav">
          <li>
            <a href="/admin">
              <i class="fa fa-dashboard"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="/admin">
              <i class="fa fa-user"></i>
              <p>Profile Admin</p>
            </a>
          </li>
          <li>
            <a href="/create-video">
              <i class="fa fa-plus"></i>
              <p>Ajouter Video</p>
            </a>
          </li>
          <li class="active">
            <a href="/edit-video">
              <i class="fa fa-pencil"></i>
              <p>Modifier | Supprimer video</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-panel">
      <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Modifier Video</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
              <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-dashboard"></i>
                  <p class="hidden-lg hidden-md">Dashboard</p>
                </a>
              </li>


            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="dashboard.html">
                  <p>Accueil</p>
                </a>
              </li>


              <li>
                <a href="#">
                  <p>Log out</p>
                </a>
              </li>
              <li class="separator hidden-lg hidden-md"></li>
            </ul>
          </div>
        </div>
      </nav>




      <br><br>
      <div class="container-fluid">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <div class="m-0 font-weight-bold text-primary"> <br> &nbsp; Modifier Video {{$video->id}} <br>

            </div> <br>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('video.update',$video->id) }}">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label>Modifier le cours</label>
                <select name="cours_id" class="form-control">
                  @foreach ($cours as $cours)
                  <option value="{{$cours->id}}">{{$cours->libele}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label style="color: #000; font-size: 15px;"> &nbsp; Importer Video</label>
                <input type="file" value="{{ $video->video }}" name="file" id="file" class="form-control">
              </div>

              <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Modifier"></input>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>





</body>

<!--   Core JS Files   -->
<script src="/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src=" /js/demo.js"></script>


</html>