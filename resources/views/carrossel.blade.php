<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Carrossel_Agrupado</title>

      @include('_style')

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
                </div>

              </div>
            @endforeach
            
          </div>
        </div><!-- /.block-media -->    
      </div><!-- /.container -->

    </section>

    @include('_scripts')

  </body>
</html>