<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Carrossel_Agrupado</title>
      @include('_style')
      <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
  </head>
  <body>
  <body class="relative grid-1440">
    <main class="main-wrapper oh">
      <div class="content-wrapper oh">
        
        <h1> Renderização da View </h1>

        <!-- Portfolio Slider -->
        <!-- Popular Products -->

        <section class="section-wrap intro style-2" style="background-color:#c4c4c4">
          
          <div class="container">

          <div class="col-sm-5 mb-30">
            <h2 class="intro-heading uppercase">NOSSOS PRODUTOS</h2>
          </div>

          <!-- Popular Item Slide -->
          <div class="papular-block block-slide">

          <!-- Item -->
          <div class="item" style="padding-right:20px">

            <!-- Item img -->
            <div class="item-img">

              <img class="img-1" src="uploads/produtos/IMG_6648_jpg.jpg" alt="" >
              <img class="img-2" src="uploads/produtos/IMG_6652_jpg.jpg" alt="" >

              <div class="overlay">
                <div class="position-center-center">
                  <div class="inn"><a href="uploads/produtos/" data-lighter=""><i class="fa fa-search"></i></a> <a href="https://api.whatsapp.com/send?phone=5599981600047&text=Ol%C3%A1%2C%20tudo%20bem%3F%20Fui%20redirecionado%20(a)%20atrav%C3%A9s%20do%20link%20do%20site%20%F0%9F%98%8E.%20Gostaria%20de%20saber%20mais%20sobre%20esse%20produto%3A"><i class="fa fa-shopping-cart"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href=""></a>
            <p>Para eles</p>
            </div>
          </div>

          <!-- -->

          <div class="item" style="padding-right:20px">

            <!-- Item img -->
            <div class="item-img">

              <img class="img-1" src="uploads/produtos/IMG_6661_jpg.jpg" alt="" >
              <img class="img-2" src="uploads/produtos/IMG_6663_jpg.jpg" alt="" >

              <div class="overlay">
                <div class="position-center-center">
                  <div class="inn"><a href="uploads/produtos/" data-lighter=""><i class="fa fa-search"></i></a> <a href="https://api.whatsapp.com/send?phone=5599981600047&text=Ol%C3%A1%2C%20tudo%20bem%3F%20Fui%20redirecionado%20(a)%20atrav%C3%A9s%20do%20link%20do%20site%20%F0%9F%98%8E.%20Gostaria%20de%20saber%20mais%20sobre%20esse%20produto%3A"><i class="fa fa-shopping-cart"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href=""></a>
            <p>Para elas</p>
            </div>
          </div>

          <!-- -->

          <div class="item" style="padding-right:20px">

            <!-- Item img -->
            <div class="item-img">

              <img class="img-1" src="uploads/produtos/IMG_7243_jpg.jpg" alt="" >

              <div class="overlay">
                <div class="position-center-center">
                  <div class="inn"><a href="uploads/produtos/" data-lighter=""><i class="fa fa-search"></i></a> <a href="https://api.whatsapp.com/send?phone=5599981600047&text=Ol%C3%A1%2C%20tudo%20bem%3F%20Fui%20redirecionado%20(a)%20atrav%C3%A9s%20do%20link%20do%20site%20%F0%9F%98%8E.%20Gostaria%20de%20saber%20mais%20sobre%20esse%20produto%3A"><i class="fa fa-shopping-cart"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href=""></a>
            <p>Para família</p>
            </div>
          </div>

          <!-- -->

          </div>
        </section> <!-- end portfolio slider -->

      </div>
    </main>

    @include('_scripts')
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>

    <script>
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:true
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            }
        }
    })
    
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
          anchor.addEventListener('click', function (e) {
              e.preventDefault();
    
              document.querySelector(this.getAttribute('href')).scrollIntoView({
                  behavior: 'smooth'
              });
          });
      });
      </script>

  </body>
</html>