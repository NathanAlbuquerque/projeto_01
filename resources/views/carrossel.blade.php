<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Carrossel_Agrupado</title>
      @include('_style')
      <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />

      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.3.8/slick.css'>

  </head>
  <body>

    <h1> Renderização da View </h1>

    <div class="container">
      <div class="block-media">
        <div class="carousel-images slider-nav">
          
          <?php $cont = 0 ?>
          @foreach ($tipos as $tipo)
          <?php $cont++ ?>
            <div>
              <div data-js="vaso" class="vaso">
                <div data-js="vaso__item{!! $cont !!}" class="vaso__item vaso__item--visible"><img src="uploads/produtos/{!! $tipo !!}1.jpg" /></div>
                <div data-js="vaso__item{!! $cont !!}" class="vaso__item"><img src="uploads/produtos/{!! $tipo !!}2.jpg" /></div>
                <div data-js="vaso__item{!! $cont !!}" class="vaso__item"><img src="uploads/produtos/{!! $tipo !!}1.jpg" /></div>
                <div class="vaso__actions">
                  <button data-js="vaso__button--prev{!! $cont !!}" aria-label="Slide anterior"><</button>
                  <button data-js="vaso__button--next{!! $cont !!}" aria-label="Próximo slide">></button>
                </div>
              </div>
            </div>
          @endforeach
          
        </div>
      </div><!-- /.block-media -->    
    </div><!-- /.container -->

    @include('_scripts')
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    
    <script src="./app.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.3.15/slick.min.js'></script><script  src="./script.js"></script>

  </body>
</html>