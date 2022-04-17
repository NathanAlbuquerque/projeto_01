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

    <h1> Renderização da View </h1>
    
    <section class="section-wrap intro style-2" style="background-image: url(../assets/img/bg/bg-produtos-min.png);">


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
                  <div data-js="vaso__item{!! $cont !!}" class="vaso__item"><img src="uploads/produtos/{!! $tipo !!}3.jpg" /></div>
                  <div data-js="vaso__item{!! $cont !!}" class="vaso__item"><img src="uploads/produtos/{!! $tipo !!}4.jpg" /></div>
                  <div class="vaso__actions">
                    <button data-js="vaso__button--prev{!! $cont !!}" aria-label="Slide anterior"><</button>
                    <button data-js="vaso__button--next{!! $cont !!}" aria-label="Próximo slide">></button>
                  </div>

                  <div class="overlay">
                    <div class="position-center-center">
                      <div class="inn"><a href="uploads/produtos/" data-lighter=""><i class="fa fa-search"></i></a> <a href="https://api.whatsapp.com/send?phone=5599981600047&text=Ol%C3%A1%2C%20tudo%20bem%3F%20Fui%20redirecionado%20(a)%20atrav%C3%A9s%20do%20link%20do%20site%20%F0%9F%98%8E.%20Gostaria%20de%20saber%20mais%20sobre%20esse%20produto%3A"><i class="fa fa-shopping-cart"></i></a></div>
                    </div>
                  </div>

                  
                </div>

                
              </div>
            @endforeach
            
          </div>
        </div><!-- /.block-media -->    
      </div><!-- /.container -->

    </section>

    @include('_scripts')
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
  </body>
</html>