<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet" type="text/css">

<script src="{{ asset('plugins/modernizr.js') }}"></script>
    <style type="text/css">

    .header .logo{padding: 2px;}

    </style>
    <style type="text/css">@font-face{font-family:'proxima_nova_rgregular';src:url('http://cdn.nyasha.me/px/ProximaNova-Reg-webfont.eot');src:url('http://cdn.nyasha.me/px/ProximaNova-Reg-webfont.eot?#iefix') format('embedded-opentype'),url('http://cdn.nyasha.me/px/ProximaNova-Reg-webfont.woff2') format('woff2'),url('http://cdn.nyasha.me/px/ProximaNova-Reg-webfont.woff') format('woff'),url('http://cdn.nyasha.me/px/ProximaNova-Reg-webfont.ttf') format('truetype'),url('http://cdn.nyasha.me/px/ProximaNova-Reg-webfont.svg#proxima_nova_rgregular') format('svg');font-weight:normal;font-style:normal;}body,h1,h2,h3,h4,h5,h6,code[class*="language-"],pre[class*="language-"],code,kbd,pre,samp{font-family:'proxima_nova_rgregular',sans-serif;}pre{font-size:12px;}</style>

<header class="header fixed-sticky">
    <div class="container boxed">
        <nav class="heading-font">
            <div class="branding">
                <button type="button" class="mobile-toggle">
                    <span class="ti-menu"></span>
                </button>
                <a href="index.html" class="logo transition">
                    <img src="{{ asset('images/logo-cei.png') }}" height="54" width="135" alt="">
                </a>
            </div>
        </nav>
    </div>
</header>

<div class="center-wrapper">
    <div class="center-content">
        <div class="row">
            <div class="col-xs-10 col-sm-6 caja-centro">
                   
                <section class="panel bg-white no-b">
                    <div class="p25">
                       @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Ups!</strong> Tenemos problemas con tu inicio de sección.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
					    @endif
                       
                        <form action="{{ url('/auth/login') }}" role="form" method="POST" >
                           
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
                            <input type="text" class="form-control input-lg mb25" placeholder="Usuario" name="email" value="{{ old('email') }}">
                            <input type="password" class="form-control input-lg mb25" placeholder="Contraseña" name="password">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">ENTRAR</button>
                            <div class="show">
                                <div class="pull-right">
                                    <a href="{{ url('/password/email') }}">¿Olvidaste tu contraseña?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <p class="text-center">
                    Copyright ©
                    <span id="year" class="mr5">2016</span>
                    <span>CEI Negocios</span>
                </p>
            </div>
        </div>
    </div>
</div>