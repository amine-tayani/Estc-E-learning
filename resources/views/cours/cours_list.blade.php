<!DOCTYPE html>
<html>

<head>
  <title>Cours</title>
  <link rel="stylesheet" href="/css/cours.css" type="text/css">
  <link rel="stylesheet" href="/css/animate.css">
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
          </ul>

        </nav>
      </div>
    </div>

  </header>

  <section class="slider" id="home">
    <ul class="slidr-carousel" id="slider-carousel">
      <li class="img1">
        <h2 style="font-size: 130px;">Les cours
        </h2>
        <p> <br></p>
      </li>
    </ul>
  </section>

  <br> <br> <br> <br> <br>
  <div class="cards">
    @foreach ($cours as $cours)
    <div class="card">
      <span class="close"></span>
      <span class="arrow"></span>
      <article>
        <h2>{{ $cours->libele }}</h2>
        <div class="title">{{ $cours->created_at }}</div>
        <div class="pic">
          <img src="img/merise.png" alt="">
        </div>
        <div class="desc">
          {{ $cours->description }}
        </div>
      </article>
    </div>
    @endforeach
  </div>
  <br> <br> <br> <br> <br>





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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
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