<!DOCTYPE html>
<html>

<head>
  <title>{{$cours->libele}}</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="shortcut icon" href="/img/est.jpg" type="image/x-icon">
  <link rel="stylesheet" href="/css/uml.css" type="text/css">
  <link rel="stylesheet" href="/css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


  <header>
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
                    <h2 style="font-size: 50px;">{{$cours->libele}}
                    </h2>

                    <p> <br> </p>



                  </li>




                </ul>
                </section>


                <section class="intro-area white" id="intro">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 text-center">
                        <h2 class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s"> Table de matières</h2>
                        <div class="sub-heading">
                          <p>
                            <br>
                          </p>
                        </div>

                      </div>
                    </div>


                    <div class="tablo">
                      <h3>Chapitre II: DIAGRAMME DES CAS D’UTILISATIONS : USE CASES DIAGRAM </h3>
                      <a href="/fr/premium" class="course-part-summary__link">

                      </a>
                      <hr />
                      <ol class="course-part-summary__list-content">


                        @foreach ($cours->parties as $partie)
                        <h4 class="">
                          <a href="">
                            {{$partie->titre}}
                          </a>
                        </h4>
                        @endforeach
                      </ol>
                    </div>
                  </div>
                </section>
                <div style="margin-left: 22%">
                  <embed src="/storage/{{$cours->pdf}}" type="application/pdf" width="70%" height="800px" />
                </div>


                <section class="intro-chap white" id="intro">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 text-center">
                        <h2 class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s"> Cours <br> <br> </h2>
                        <div class="sub-heading">

                        </div>
                      </div>
                    </div>


                    <div class="chap">
                      <a href="/fr/premium" class="course-part-summary__link">


                      </a>
                      <hr />
                      <ol class="course-part-summary__list-content">

                        @foreach ($cours->parties as $partie)
                        <h4 class="">
                          <a class="feat-btn">
                            {{$partie->titre}}
                            <span class="fa fa-caret-down first"></span>
                          </a>
                          <ul class="feat-show">
                            <p>
                              {{$partie->contenu}}
                              <br>
                            </p>
                          </ul>
                        </h4>
                        @endforeach



                      </ol>


                    </div>
                    <div class="bot">
                      @foreach ($cours->tds as $td)
                      <a href="/td/view/{{$td->id}}"><button class=" td">Voir td : {{$td->titre}}</button></a>
                      @endforeach
                    </div>
                    <div class="bot">
                      @foreach ($cours->tps as $tp)
                      <a href="/tp/view/{{$tp->id}}"><button style="background-color: chocolate" class=" td">Voir :
                          {{$tp->titre}}</button></a>
                      @endforeach
                    </div>
                    <div class="bot">
                      <a href="quiz2.html"> <button style="background-color:teal" class="quiz">Passer
                          Quiz</button> </a>
                    </div>
                  </div>
                </section>





                <br> <br> <br> <br> <br>

                <script>
                  $('.feat-btn').click(function(){
        $('.chap ol h4 .feat-show').toggleClass("show");
        $('.chap ol h4 .first').toggleClass("rotate");
        
      });
      $('.featt-btn').click(function(){
        $('.chap ol h4 .featt-show').toggleClass("showw");
        $('.chap ol h4 .second').toggleClass("rotate");
        
      });
      $('.feattt-btn').click(function(){
        $('.chap ol h4 .feattt-show').toggleClass("showww");
        $('.chap ol h4 .tree').toggleClass("rotate");
        
      });
      $('.featttt-btn').click(function(){
        $('.chap ol h4 .featttt-show').toggleClass("showwww");
        $('.chap ol h4 .four').toggleClass("rotate");
        
      });


      $('.chap ol h4 ').click(function(){
        $('this').addClass("active").siblings().removeClass("active");
      }); 
                </script>







                <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js">
                </script>
                <script
                  src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js">
                </script>
                <script src="https://cdn.jsdelivr.net/npm/gsap@3.0.1/dist/gsap.min.js"></script>
                <script type="module" defer src="/js/index.js"></script>




                <script src="js/index.js"></script>

                <script src="/js/main.js"></script>
                <script src="/js/wow.min.js"></script>
                <script>
                  new WOW().init();
                </script>
</body>

</html>