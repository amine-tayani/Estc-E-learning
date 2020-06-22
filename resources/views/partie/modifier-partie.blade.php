<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="/img/est.jpg" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Admin | Modifier partie</title>

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
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-4.jpg">

      <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="/admin" class="simple-text">
            AFIFI Nadia
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
            <a href="/create-partie">
              <i class="fa fa-plus"></i>
              <p>Ajouter Partie</p>
            </a>
          </li>
          <li class="active">
            <a href="/edit-partie">
              <i class="fa fa-pencil"></i>
              <p>Modifier | Supprimer Partie</p>
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
            <a class="navbar-brand" href="#">Modifier partie</a>
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


      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="header">
                  <h4 class="title">Les Parties de Cours</h4>
                  <p class="category"></p>
                </div>
                <div class="content table-responsive table-full-width">
                  <table class="table table-hover table-striped">
                    <thead>
                      <th>Titre</th>
                      <th>Id de Cours</th>
                      <th>Modifier</th>
                      <th>Supprimer</th>
                    </thead>
                    <tbody>
                      @foreach($partie->sortBy('cours_id') as $partie)
                      <tr>
                        <td>{{$partie->titre}}</td>
                        <td>{{$partie->cours_id}}</td>
                        <td><a href="partie/{{$partie->id}}/edit" class="btn btn-success">EDIT</a></td>
                        <td>
                          <form action="{{ route('partie.delete', $partie->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>
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


</body>

<!--   Core JS Files   -->
<script src="/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->

<!--  Notifications Plugin    -->
<script src="/js/bootstrap-notify.js"></script>



<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="/js/demo.js"></script>


</html>