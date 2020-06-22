<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>E-learning Plateforme | Admin Dashbord</title>
  <link rel="shortcut icon" href="/img/est.jpg" type="image/x-icon">

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

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>



  <div class="modal" id="faculty" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Confirm Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to logout ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
          <button type="submit" class="btn btn-primary">ok</button>
        </div>
      </div>
    </div>
  </div>






  <div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="/img/sidebar-4.jpg">



      <nav class="sidebar">
        <div class="text">Side menu</div>
        <ul>
          <li><a href="#">Dashboard</a></li>

          <li><a href="#" class="feat-btn">Feature
              <span class="fa fa-caret-down"></span>
            </a>
            <ul class="feat-show">
              <li><a href="#">Page</a></li>
              <li><a href="#">Element</a></li>
            </ul>
          </li>

        </ul>

      </nav>

      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="" class="simple-text">
            AFIFI Nadia
          </a>
        </div>

        <ul class="nav">
          <li class="active">
            <a href="/admin">
              <i class="fa fa-dashboard"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li>
            <a href="/gestion-cours">
              <i class="fa fa-book "></i>
              <p>gestion cours</p>
            </a>
          </li>
          <li>
            <a href="/gestion-partie">
              <i class="fa fa-bookmark"></i>
              <p>gestion parties</p>
            </a>
          </li>
          <li>
            <a href="/gestion-td">
              <i class="fa fa-newspaper-o"></i>
              <p>gestion td </p>
            </a>
          </li>
          <li>
            <a href="/gestion-tp">
              <i class="fa fa-sticky-note-o"></i>
              <p>gestion tp </p>
            </a>
          </li>
          <li>
            <a href="/gestion-video">
              <i class="fa fa-video-camera "></i>
              <p>gestion video </p>
            </a>
          </li>

          <li>
            <a href="/gestion-quiz">
              <i class="fa fa-question-circle"></i>
              <p>gestion quiz </p>
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
            <a class="navbar-brand" href="/admin">Dashboard</a>
            <a class="navbar-brand" style="margin-left: 950px;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
              Deconnexion </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"">
              @csrf
            </form>
          </div>
        </div>
 
        </div>
      </nav>
      <div class=" col-md-4">
              <div class="card card-user">
                <div class="image">
                  <img
                    src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"
                    alt="..." />
                </div>
                <div class="content">
                  <div class="author">
                    <a href="#">
                      <img class="avatar border-gray" src="/img/faces/face-0.jpg" alt="..." />

                      <h4 class="title">Pr AFIFI Nadia<br />
                        <small>Enseignant chercheur</small>
                      </h4>
                    </a>
                  </div>
                  <p class="description text-center"> "Enseignant professionnel axé sur l'optimisation <br>
                    du potentiel académique des élèves en appliquant <br>
                    diverses stratégies pédagogiques et techniques"
                  </p>
                </div>
                <hr>
                <div class="text-center">
                  <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                  <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                  <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                </div>
              </div>
          </div>
        </div>
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



  <script>
    $('.feat-btn').click(function() {
        $('.sidebar .nav .feat-show').toggleClass("show");
    });

  </script>



</body>

<!--   Core JS Files   -->
<script src="/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="/js/demo.js"></script>


</html>