<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>NexoFav - Transparencia</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <script src=" https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://sandbox-paybox.pagoplux.com/paybox/index.js"></script>
        <script src="https://paybox.pagoplux.com/paybox/index.js"></script>
        <script type="text/javascript">
var data = {
    /* Requerido. Email del establecimiento o Id/Class del elemento html que
posee el valor */
PayboxRemail: "correocomercio@gmail.com",
/* Opcional. Email del usuario que realiza el pago o Id/Class del elemento
html que posee el valor */
PayboxSendmail: "correocliente@gmail.com",
/* Requerido. Nombre del usuario/cuenta Plux o Id/Class del elemento html
que posee el valor */
PayboxRename: "Nombre Negocio",
/* Opcional. nombre de persona que realiza el pago o Id/Class del elemento
html */
PayboxSendname: "Nombre tarjetahabiente",
/* Requerido. Valor Base 0. Valor que no incluye impuesto */
PayboxBase0: "2.0",
/* Requerido. Valor Base 12. Valor que si incluye impuesto */
PayboxBase12: "10.0",
/* Requerido. Descripcion del pago o Id/Class del elemento html que posee
el valor */
PayboxDescription: "Descripcion del pago",
/* Opcional. Lenguaje del Paybox
* Español: es | (string) (Paybox en español)
* Inglés: us | (string) (Paybox en Inglés)*/
PayboxLanguage: "es",
/* Requerido. direccion del pago */
PayboxDirection: "Dirección tarjetahabiente",
/*Requerido. Teléfono del cliente */
PayBoxClientPhone: 'Teléfono tarjetahabiente',
/**
* True -> producción
* False -> test */
PayboxProduction: false,
// ===============================LOS SIGUIENTES PARÁMETROS SOLO SE USA EN PAGOS RECURRENTES============================================
/* True -> en caso de realizar un pago recurrente almacena datos tarjeta
* False -> si es pago normal */
PayboxRecurrent: true,
/* Id o nombre del plan registrado en el comercio en la plataforma de plux
(el nombre debe ser exacto) */
PayboxIdPlan: '171',
/* true -> los cobros se realizan de manera automática según la frecuencia
del plan asignado en PLUX
* false -> los cobros se realizan mediante solicitud */
PayboxPermitirCalendarizar: true,
/**
* true -> El débito se realiza en el momento del pago
* false -> El débito se realizará en la fecha de corte según el plan
contratado */
PayboxPagoInmediato: true,
/**
* true -> si desea realizar un pago de prueba de 1$ y reverso del mismo
de manera automática
* nota: PayboxPagoImediato debe ser igual false
* false -> no se realizará ningún cobro de prueba */
PayboxCobroPrueba: false,
/**
* Valor de identificación de tarjetahabiente
*/
PayBoxClientIdentification: 'Cédula tarjetahabiente',
/* Entorno de ejecución del botón de pagos valores: prod (ambiente de
producción), sandbox (ambiente de pruebas)*/

PayboxEnvironment: 'sandbox',
//<----ESTAS VARIABLES SE USAN PARA PAGOS RECURRENTES CON MONTO VARIABLES---->
PayboxAmountVariablePlan: true,
/*Frecuencia del plan
"SEM" SEMANAL
"MEN" MENSUAL
"BME" BIMESTRAL
"TME" TRIMESTRAL
"SME" SEMESTRAL
"ANU" ANUAL */
PayboxFrequencyPlan: 'MEN',
/**
* true ->tiene iva
* false ->no tiene iva
*/
PayboxTieneIvaPlan: true,
/**
* La descripción del plan, no debe superar los 200 caracteres.
*/
PayboxDescriptionPlan: 'Descripcion plan',
/**
* Se usa en TRUE cuando se necesita enlazar el paybox a un botón ya
existente en el sitio del cliente, caso contrario FALSE o NULL
*/
PayboxPagoPlux: true,
/* Requerido para manejo de ofertas
* Nombre del evento configurado, que podría hacer referencia a una oferta
de tipo descuento y preventa. */
PayboxEvento: 'Evento descuento uno',

/* Opcional
* true o false->
* Bandera booleana que permite o no pagos solo con tarjeta de crédito.
*/
PayboxOnlyCredit: true,
/* Opcional
* true o false->
* Bandera booleana que permite o no pagos solo con tarjeta de débito.
*/
PayboxOnlyDebit: true,
/**
* Identificador del botón o elemento en el comercio del cliente
*/
PayboxIdElement: 'idElementoTest',
/**
* Información adicional a incluir en la transacción como un ID único
*/
PayboxExtras: 'id de pedido',
/**
* Habilita SOLO la forma de pago de tipo corriente, caso contrario se
muestran las opciones de corriente y diferidos
*/
PayboxPermitirBloquearDiferimientos: true,
/**
* Permite agregar los campos de entradas para dirección y teléfono del
tarjeta habiente
*/
PayboxPermitirDatosAdicionales: true
};

</script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Características</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Galeria</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Donaciones</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Nexo fav</a></li>
                        <a href="{{ url('/admin/login') }}"  class="btn btn-primary btn-lg">Ingresar</a>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
      
            <div class="container">
                <div class="masthead-subheading">Nexo</div>
                <div class="masthead-heading text-uppercase">La Plataforma que Conecta el Impacto Social con la Transparencia</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Descargar App</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Características</h2>
                    <h3 class="section-subheading text-muted">Menos papeles, más acciones.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-smile-beam fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Plataforma Simple</h4>
                        <p class="text-muted">"Nexo redefine la gestión de reportes con una interfaz *tan intuitiva que cualquier ONG puede usarla sin capacitación.</p>
                    </div>
                          <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-piggy-bank fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Ahorro de Tiempo y Dinero</h4>
                        <p class="text-muted">Reduce el tiempo de reportes de 8 horas a 30 minutos
</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-robot fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Automatización Inteligente</h4>
                        <p class="text-muted">Capacidad de automatizar procesos, notificaciones y creación de flujos complejos</p>
                    </div>
              
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Cada acción suma esfuerzos, recursos y corazones con un mismo propósito</h2>
                    <h3 class="section-subheading text-muted">Unidos por un impacto que transforma vidas</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/6.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Ayuda Social</div>
                                <div class="portfolio-caption-subheading text-muted">Ayuda Social</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/2.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Enseñanza y Educación</div>
                                <div class="portfolio-caption-subheading text-muted">Escuelas Colegios</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/3.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Equidad de genero</div>
                                <div class="portfolio-caption-subheading text-muted">Capacitación a mujeres</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/4.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Alimentación</div>
                                <div class="portfolio-caption-subheading text-muted">Bancos de Alimentos</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/5.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Emprendimiento</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/1.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Rurales</div>
                                <div class="portfolio-caption-subheading text-muted">Zonas alejadas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Un puente que transforma la conexión en oportunidades </h2>
                    <h3 class="section-subheading text-muted">Nexo Fav</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>1 </h4>
                                <h4 class="subheading">Transparencia</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">En nuestra plataforma, la conexión entre fundaciones y empresas se basa en la claridad y la confianza. Cada acción, aporte y resultado es visible y verificable, creando relaciones honestas y duraderas que impulsan un impacto real y sostenible. </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2</h4>
                                <h4 class="subheading">Automatizacion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Transforma tareas repetitivas en procesos inteligentes, reduciendo errores, costos y tiempo. Su impacto directo: más productividad, eficiencia y enfoque en lo que realmente genera valor para tu negocio.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>3</h4>
                                <h4 class="subheading">Seguimiento de procesos</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Nuestra plataforma permite que tanto la fundación como la empresa visualicen en tiempo real el avance de sus proyectos y aportes. De esta forma, todos pueden monitorear resultados, medir impacto y asegurar que cada acción cumpla su propósito de manera clara y confiable.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>4</h4>
                                <h4 class="subheading">Impacto</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Nuestra fundación impulsa el cambio real en las comunidades, a través de alianzas y proyectos con propósito, conectamos recursos con necesidades, creando oportunidades y mejorando la calidad de vida de quienes más lo necesitan.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                La mejor
                                <br />
                                parte de
                                <br />
                                la historia
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/portfolio/logo1.png" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/portfolio/logo2.jpeg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/portfolio/logo3.png" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/portfolio/logo4.png" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">❤️ Apoya Nuestra Causa</h2>
                    <h3 class="section-subheading text-muted">Cada aporte cuenta para transformar vidas y generar impacto social. ¡Tu ayuda hace la diferencia hoy!</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->

                  <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <!-- Submit Button-->
                        <div id="ButtonPaybox"></div>

                    <div class="text-center"><a  style="background-color: #ffd900ff" class="btn  btn-xl text-uppercase" id="submitButton" href="https://andresp.app.n8n.cloud/form/ca4867f8-e408-4bbf-b4b2-f118ce2a5ccc
" >💚 Donar Ahora!</a></div>
                </form> 
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Titan Codes  2025</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Políticas de Uso</a>
                        <a class="link-dark text-decoration-none" href="#!">Términos</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
