<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <title>Jacaranda</title>
    <script src="https://kit.fontawesome.com/d6b5728526.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/icono_psicologia.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset ('css/nav.css') }}">
    <script type="text/javascript" src="/js/test.js"></script>
</head>
<body style=" background-image: url(img/psicologia_2.png);background-attachment: fixed;
  overflow: scroll;background-repeat: no-repeat;background-size: 100% 100%;">
    <header style="background-image: url(img/psicologia_4.jpg);height: 720px;background-size: 100% 92%;">
        <div>
            <nav style="width: 47%;padding-top: 15px">
                <a href="#1">
                    <h4>Programas</h4>
                </a>
                <a href="#2">
                    <h4>Áreas</h4>
                </a>
                <a href="#3">
                    <h4> Valores</h4>
                </a>
                <a href="{{ route('register') }}">
                    <h4> Registrar</h4>
                </a>
                <a href="{{ route('login') }}">
                    <h4> Ingresar</h4>
                </a>
                <div class="animation start-home"></div>
            </nav>
            <section class="textos-header">

                <h1 style="color: #a615ff ;margin-bottom: 250px">jacaranda Educacion Emocional</h1>
            </section>
        </div>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fface5;"></path>
            </svg>
        </div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">¿Quiénes Somos?</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/psicologia_1.png" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Sobre nosotros</h3>
                    <b style="font-size: x-large;">Un Centro de Educación
                        Emocional comprometido en
                        incrementar el bienestar de los
                        niños, niñas y cuidadores a
                        través del desarrollo de las
                        competencias
                        socioemocionales y del
                        acompañamiento en crianza y
                        educación emocional de
                        padres, madres y cuidadores
                    </b>
                </div>
            </div>
        </section>
        <a name="1"></a>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Programa Grupal de Educación Emocional</h2>

                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/psicologia_5.png" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Habilidades de vida y bienestar</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/psicologia_6.png" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Conciencia Emocional</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/psicologia_7.png" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Competencia Social</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/psicologia_8.png" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Autonomia Emocional</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/psicologia_9.png" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Regulación Emocional</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">Testimonios</h2>
            <div class="cards">
                <div class="card" style="background-color: #857d7d">
                    <img src="img/psicologia_13.png" alt="">
                    <div class="contenido-texto-card col-12">
                        <h4>Testimoniales - Docentes</h4>
                        <div class="col-12">
                            <img src="img/psicologia_8.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="card" style="background-color: #857d7d">
                    <img src="img/psicologia_14.jpg" alt="">
                    <div class="contenido-texto-card col-12">
                        <h4>Testimoniales- Padres y Madres</h4>
                        <div class="col-12">
                            <img src="img/psicologia_8.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <a name="2"></a>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Áreas de trabajo</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/psicologia_10.png" alt="">
                        <h3>Mentes creativas </h3>
                        <p>DESCRIPTION</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/psicologia_11.png" alt="">
                        <h3>Self</h3>
                        <p>DESCRIPTION</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/psicologia_12.png" alt="">
                        <h3>Yummy Yummy</h3>
                        <p>DESCRIPTION</p>
                    </div>
                </div>
            </div>
        </section>

        <a name="3"></a>

        
        <div style="margin-bottom: 30px;margin-top: 30px">
            <img src="img/palabras.png" style="width: 100%">
        </div>
    </main>
    <a name="5"></a>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Contacto</h4>
                <p>33 13 98 25 39</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>jacaranda.eduemocional@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Facebock</h4>
                <p>Jacaranda Educación Emocional</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; jacaranda Eduemociona | jacaranda Eduemociona </h2>
    </footer>
</body>

</html>