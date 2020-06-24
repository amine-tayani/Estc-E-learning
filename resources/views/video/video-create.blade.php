<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="/img/est.jpg" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Admin | Create Video</title>

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

      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="" class="simple-text">
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
          <li class="active">
            <a href="/create-video">
              <i class="fa fa-plus"></i>
              <p>Ajouter Video</p>
            </a>
          </li>
          <li>
            <a href="/edit-video">
              <i class="fa fa-pencil"></i>
              <p>Modifier | Supprimer Video</p>
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
            <a class="navbar-brand" href="/create-cours">Ajouter Video</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
              <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!--    <i class="fa fa-dashboard"></i>
                                 <p class="hidden-lg hidden-md">Dashboard</p>  -->
                  <button type="button" data-toggle="modal" data-target="#facultyModal">ADD</button>

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

      <div class="content">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ajouter Video</h5>
          </div>
          <form action="{{ route('create-video.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">

              <div class="form-group">
                <label>Choisir le cours</label>
                <select name="cours_id" class="form-control">
                  @foreach ($coursList as $cours)
                  <option value="{{$cours->id}}">{{$cours->libele}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>importer Video</label>
                <input type="file" name="file" id="file" class="form-control" required>
              </div>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary" value="Ajouter Video">
            </div>
          </form>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container-fluid">
        <nav class="pull-left">
          <ul>
            <li>
              <a href="#">

              </a>
            </li>
            <li>
              <a href="#">

              </a>
            </li>
            <li>
              <a href="#">

              </a>
            </li>
            <li>
              <a href="#">

              </a>
            </li>
          </ul>
        </nav>

      </div>
    </footer>


  </div>
  </div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>


</html>