@extends('layouts.default')

@section('content')

  <div class="container" id="home">
    <div class="row">
      <div class="col col-md-12">       
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="{{ asset('images/home/slide_1.jpg') }}" alt="slide 1" />
              <p class="flex-caption">Entendemos los negocios desde una perspectiva digital.</p>
            </li>
            <li>
              <img src="{{ asset('images/home/slide_2.jpg') }}" alt="slide 2" />
              <p class="flex-caption">Proin porttitor urna et enim semper lobortis eu vitae diam. Fusce rutrum consequat dolor. Quisque ante leo, scelerisque nec faucibus.</p>
            </li>
            <li>
              <img src="{{ asset('images/home/slide_3.jpg') }}" alt="slide 3" />
              <p class="flex-caption">Quisque gravida ac nisl nec ultrices. Mauris tincidunt magna vitae feugiat tincidunt. Donec elit arcu, accumsan quis sagittis vitae, porttitor et velit.</p>
            </li>
          </ul>
        </div>            
      </div>
    </div>
  </div>
  <section id="about">
    <div class="outer_container">
      <div class="container">
        <div class="row">
          <div class="col col-md-5 col-sm-12"><h1>Noticias</h1></div>
          <div class="col col-md-7 col-sm-12 center-row" id="about_content">
            <div class="row center">
              <div class="col col-md-4 col-sm-12 templatemo_ceo">
                <img src="{{ asset('images/home/rafael-irarrazaval.png') }}" alt="Linda" class="center-block img-circle img-responsive">
                <p>Rafael Irarrázaval, CEI</p>
              </div>
              <div class="col col-md-8 col-sm-12">
              	<p> Después de trabajar por 25 años administrando marcas puedo afirmar que las agencias han muerto. Las tradicionales, digitales, creativas, integrales, de medios u otras, ¡todas han muerto! ¿La razón? Simple; las agencias olvidaron quién es su cliente, sus necesidades y por qué las contrataron.</p>
                <p><a rel="nofollow" href="http://starterdaily.com/opinion/2015/12/01/la-agencia-ha-muerto/" target="_blank"> Noticia Completa Aquí</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="team">
    <div class="outer_container">
      <div class="container">
        <div class="row">
          <div class="col col-md-5 col-md-push-7 col-sm-12"><h1>Directivos</h1></div>
          <div class="col col-md-7 col-md-pull-5 col-sm-12 center-row" id="team_content">
            <div class="row center">
              <div class="col col-md-4 col-sm-4 col-xs-4">
                <img src="{{ asset('images/home/jlf.png') }}" alt="Nancy" class="img-circle img-responsive">
                <p>Juan Luis Fleischmann</p>
                <p>Gerente de Finanzas</p>
              </div>
              <div class="col col-md-4 col-sm-4 col-xs-4">
                <img src="{{ asset('images/home/javier-correa.png') }}" alt="Mary" class="img-circle img-responsive">
                <p>Javier Correa</p>
                <p>Gerente General</p>
              </div>        
              <div class="col col-md-4 col-sm-4 col-xs-4">
                <img src="{{ asset('images/home/rafael-irarrazaval.png') }}" alt="Helen" class="img-circle img-responsive">
                <p>Rafael Irarrázaval</p>
                <p>Director Ejecutivo</p>
              </div>        
            </div>        
          </div>        
        </div>
      </div>
    </div>
  </section>
  
  <section id="portfolio">
    <div class="outer_container">
      <div class="container">
        <div class="row">      
          <div class="col col-md-5 col-sm-12"><h1>Portfolio</h1></div>
          <div class="col col-md-7 col-sm-12" id="portfolio_content">
            <div class="row">
              <div class="col col-md-4 col-sm-4 col-xs-6">
                <div class="portfolio-item">                  
                  <div class="portfolio-thumb">
                    <img src="{{ asset('images/home/logo-1.jpg') }}" alt="portfolio image 1" class="img-responsive">
                    <div class="overlay-p">
                      <a href="#">
                        <h2>Dole</h2>
                        <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus elit nec metus pellentesque.</p> 
                      </a>
                    </div>
                  </div>                     
                </div>      
              </div>
              <div class="col col-md-4 col-sm-4 col-xs-6">  
                <div class="portfolio-item">
                  <div class="portfolio-thumb">              
                    <img src="{{ asset('images/home/logo-4.jpg') }}" alt="portfolio image 2" class="img-responsive">
                    <div class="overlay-p">
                      <a href="#">
                        <h2>Santo Tomas</h2>
                        <p>Donec elit arcu, accumsan quis sagittis vitae, porttitor et velit.</p> 
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col-md-4 col-sm-4 col-xs-6">
                <div class="portfolio-item">
                  <div class="portfolio-thumb">
                    <img src="{{ asset('images/home/logo-6.jpg') }}" alt="portfolio image 3" class="img-responsive">
                    <div class="overlay-p">
                      <a href="#">
                        <h2>Thomas</h2>
                        <p>Proin porttitor urna et enim semper lobortis eu vitae diam.</p> 
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col-md-4 col-sm-4 col-xs-6">
                <div class="portfolio-item">
                  <div class="portfolio-thumb">
                    <img src="{{ asset('images/home/logo-2.jpg') }}" alt="portfolio image 4" class="img-responsive">
                    <div class="overlay-p">
                      <a href="#">
                        <h2>Ensucasa</h2>
                        <p>Maecenas semper quis arcu in porta. Donec elit arcu, vitae, porttitor et velit.</p> 
                      </a>
                    </div>
                  </div>                  
                </div>      
              </div>
              <div class="col col-md-4 col-sm-4 col-xs-6">  
                <div class="portfolio-item">
                  <div class="portfolio-thumb">              
                    <img src="{{ asset('images/home/logo-5.jpg') }}" alt="portfolio image 5" class="img-responsive">
                    <div class="overlay-p">
                      <a href="#">
                        <h2>Siegen</h2>
                        <p>Vivamus tempor elit nec metus pellentesque posuere.</p> 
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col-md-4 col-sm-4 col-xs-6">
                <div class="portfolio-item">
                  <div class="portfolio-thumb">
                    <img src="{{ asset('images/home/logo-3.jpg') }}" alt="portfolio image 6" class="img-responsive">
                    <div class="overlay-p">
                      <a href="#">
                        <h2>Perfúmame</h2>
                        <p>Vestibulum ac enim.Vestibulum at mollis justo, eu elementum nisi.</p> 
                      </a>
                    </div>
                  </div>
                </div>
              </div>   
            </div>          
          </div>
        </div>
      </div>
    </div>
  </section>

@stop
