<!DOCTYPE html>
<html>

<head>
  <title>{{$tp->titre}}</title>
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
            <li><a href=""><i class="fa fa-phone" aria-hidden="true"></i>Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>

  </header>









  <section class="slider" id="home">
    <ul class="slidr-carousel" id="slider-carousel">
      <li class="img1">
        <h2 style="font-size: 50px;">{{$tp->titre}} </h2>
        <p> <br> </p>
      </li>
    </ul>
  </section>


  <section class="intro-area white" id="intro">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h5 class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s"> Description : {{$tp->contenu}}</h5>
        </div>
      </div>
    </div>
  </section>
  <div style="margin-left: 22%">
    <embed src="/storage/tp/{{$tp->pdf}}" type="application/pdf" width="70%" height="800px" />
  </div>

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
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