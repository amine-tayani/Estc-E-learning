<!DOCTYPE html>
<html>

<head>
  <title>Plateforme E-learning | Tds</title>
  <link rel="shortcut icon" href="/img/est.jpg" type="image/x-icon">
  <link rel="stylesheet" href="/css/animate.css">
  <link rel="stylesheet" href="/css/LesTds.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



  <!-- Latest compiled JavaScript -->
  <script src="/js/function.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



</head>

<body>

  <header style="position: absolute">
    <div class="container">
      <div class="row">
        <a class="logo"><img src="/img/est1.ico"></a>

        <nav>
          <ul>
            <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
            <li><a href="/cours"><i class="fa fa-book" aria-hidden="true"></i>Cours</a></li>
            <li><a href="/travaux"><i class="fa fa-bookmark" aria-hidden="true"></i>Exercices</a></li>
            <li><a href="contact.html"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a></li>
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                Deconnexion </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST"">
                  @csrf
              </form>
            </li>

          </ul>

        </nav>
      </div>
    </div>

  </header>

  <section class=" slider" id="home">
                <ul class="slidr-carousel" id="slider-carousel">
                  <li class="img1">
                    <h2 style="font-size: 80px;">Les Travaux Pratiques
                    </h2>
                    <p> <br></p>
                  </li>
                </ul>
                </section>
                <section class="intro-area white" id="intro">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 text-center">
                        <br> <br> <br>



                      </div>
                    </div>


                    <div class="containerrr">
                      @foreach ($tp as $tp)

                      <div class="card">
                        <div class="content">
                          <h2>TP</h2>
                          <p>{{$tp->titre}}</p>
                          <a href="/td/view/{{$tp->id}}">Voir tp</a>
                        </div>
                      </div>
                      @endforeach

                    </div>


                    <div>
                </section>


                <script>
                  var closeBtn = document.querySelectorAll(".close"), 
              card = document.querySelectorAll(".card"), 
              btnActions = document.querySelectorAll(".btn"); 

             closeBtn.forEach(function(el){ 
                el.addEventListener("click", closeCard); 
              }); 
              
              card.forEach(function(el){ 
                el.addEventListener("click", openCard); 
              });

              btnActions.fortach(function(el){ 
                   el.addEventListener("click", clickBtn); 
               }); 
               function closeCard(event){ 
                   event.stopPropagation(); 
                   event.target.closest(".card").classList.add("closed"); 
               }
               function openCard(event){ 
                  if(event.currentTarget.classList.contains("closed")){ 
                      event.currentTarget.classList.remove("closed");
                  }
              }

                </script>




                <script data-cfasync="false" type="text/javascript"
                  src="https://cdn.rawgit.com/dwyl/learn-to-send-email-via-google-script-html-no-server/master/form-submission-handler.js">
                </script>


                <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js">
                </script>
                <script
                  src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js">
                </script>
                <script src="https://cdn.jsdelivr.net/npm/gsap@3.0.1/dist/gsap.min.js"></script>
                <script type="module" defer src="/js/index.js"></script>




                <script src="/js/index.js"></script>

                <script src="/js/main.js"></script>
                <script src="/js/wow.min.js"></script>
                <script>
                  new WOW().init();
                </script>



</body>

</html>