<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/StyleBody.css">
<body>

    <div id="container">
        <div id="containerReserve" class="row">
            <div class="col align-self-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2"></div>
                        <div id="titleHR" class="col-8">
                            <p class="textTitleHr">OROGOLD</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <h2 class="textAbout">Cuando belleza y glamur</h2>
                            <h2 class="textAbout">van de la mano</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 align-self-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Reserva ahora tu cita</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="mensajeCita"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="phone" placeholder="Telefono">
                        </div>
                        <button id="btnAppointment" type="button" class="btn btn-lg btn-block">Reserva ahora</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="containerTreatment" class="row">
            <div class="col-12">
                <div class="col-12 align-self-center">
                    <h2 class="textBody">Nuestros Tratamientos</h2>
                </div>
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-2 align-self-center"></div>
                        <div class="col-8 align-self-center">
                            <p class="text-center">El tratamiento de la casa de dos horas de duración transporta a 
                                los clientes a un oasis de relajación. Incluye un masaje de espalda, hombros, piernas y 
                                pies utilizando aceites de masaje.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 align-self-center">
                            <div class="card efectCard" style="width: 18rem;">
                                <img src="<?php echo base_url() ?>public/assets/img/photo-1516238840914-94dfc0c873ae.JPG" class="card-img-top imagCard efectImag">
                                <div class="card-body">
                                    <h5 class="card-title textBody">MASAJES CON ORO</h5>
                                    <p class="card-text text-center"><strong>SPA Orogold</strong> ofrece tratamientos especializados de la mano de nuestros profesionales expertos, con productos excepcionales de marcas galardonadas</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 align-self-center">
                            <div class="card efectCard" style="width: 18rem;">
                                <img src="<?php echo base_url() ?>public/assets/img/photo-1515377905703-c4788e51af15.JPG" class="card-img-top imagCard efectImag">
                                <div class="card-body">
                                    <h5 class="card-title textBody">EXFOLIACIÓN CON PRODUCTOS NATURALES</h5>
                                    <p class="card-text text-center">El tratamiento de la casa de dos horas de duración transporta a los clientes a un oasis de relajación Incluye un masaje de espalda, hombros, piernas y pies</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 align-self-center">
                            <div class="card efectCard" style="width: 18rem;">
                                <img src="<?php echo base_url() ?>public/assets/img/photo-1552693673-1bf958298935.JPG" class="card-img-top imagCard efectImag">
                                <div class="card-body">
                                    <h5 class="card-title textBody">RECONSTRUCCIÓN FACIAL</h5>
                                    <p class="card-text text-center">El tratamiento de la casa de dos horas de duración transporta a los clientes a un oasis de relajación Incluye un masaje de espalda, hombros, piernas y pies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="containerAbout" class="row">
            <div id="aboutImag" class="col-12 align-self-center">
                <div id="contentAbout">
                    <div class="col-12 align-self-center">
                        <h2 id="titleAbout">QUIENES SOMOS</h2>
                    </div>
                    <div class="col-12 align-self-center">
                        <div class="row">
                            <div class="col-2 align-self-center"></div>
                            <div class="col-8 align-self-center">
                                <p class="text-center textAbout">El lujoso spa en Orogold. En México, ofrece un refugio sublime en pleno corazón de la ciudad.</p>
                                <p class="text-center textAbout">Los huéspedes pueden disfrutar de un gimnasio de última generación, 
                                    una relajante sauna o ducha a chorro durante su escapada de 5 estrellas en nuestro hotel 
                                    boutique en parís. Por otra parte, nuestra nueva asociación con zeal cosmetics asegura la 
                                    disponibilidad de una gama de relajantes tratamientos faciales y corporales para mimarse y 
                                    revitalizarse.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="aboutCarousel" class="col-12 align-self-center">
                <div id="carouselCaptions" class="carousel slide z-depth-1-half" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="2000">
                            <div class="row">
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <img class="card-img-top aboutCarouselImg" src="<?php echo base_url() ?>public/assets/img/photo-1555820585-c5ae44394b79.JPG" alt="Responsive image">
                                </div>
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <img class="card-img-top aboutCarouselImg" src="<?php echo base_url() ?>public/assets/img/photo-1554057009-6798cb3d4a04.JPG" alt="Responsive image">
                                </div>
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <img class="card-img-top aboutCarouselImg" src="<?php echo base_url() ?>public/assets/img/photo-1513104806186-1b00f3e7a65e.JPG" alt="Responsive image">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <div class="row">
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <img class="card-img-top aboutCarouselImg" src="<?php echo base_url() ?>public/assets/img/photo-1553540751-988bd7918c7e.JPG" alt="Responsive image">
                                </div>
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <img class="card-img-top aboutCarouselImg" src="<?php echo base_url() ?>public/assets/img/photo-1489659639091-8b687bc4386e.JPG" alt="Responsive image">
                                </div>
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <img class="card-img-top aboutCarouselImg" src="<?php echo base_url() ?>public/assets/img/photo-1515377905703-c4788e51af15.JPG" alt="Responsive image">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <div class="row">
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <img class="card-img-top aboutCarouselImg" src="<?php echo base_url() ?>public/assets/img/photo-1531853121101-cb94c8ed218d.JPG" alt="Responsive image">
                                </div>
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <img class="card-img-top aboutCarouselImg" src="<?php echo base_url() ?>public/assets/img/photo-1560944527-a4a429848866.JPG" alt="Responsive image">
                                </div>
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <img class="card-img-top aboutCarouselImg" src="<?php echo base_url() ?>public/assets/img/photo-1559058922-5d29e1f00075.JPG" alt="Responsive image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div id="containerMap" class="row">
            <div class="col">
                <div id="map"></div>
            </div>
            <div class="col-4 align-self-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title textBodyHr">HORARIOS</h5>
                        <div class="form-group">
                            <p>Lunes a Viernes de 10:00 a 19:30</p>
                            <p>Sábados, Domingos y festivos de 10:00 a 18:30</p>
                        </div>
                        <div class="form-group">
                            <p>Pueden concertarse tratamientos fuera del horario de apertura indicando con cita previa.</p>
                        </div>
                        <h5 class="card-title textBodyHr">DIRECCIÓN</h5>
                        <div class="form-group">
                            <p>Av. Insurgentes sur 106, roma sur, Cuauhtémoc, 06600 Ciudad de México, cdmx México</p>
                        </div>
                        <button id="btnMap" type="button" class="btn btn-outline-dark">Ver en Mapa</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="containerNow" class="row">
            <div id="nowImag" class="col-12 align-self-center row contImg">
                <div class="col-3"></div>
                <div class="col-8">
                    <img id="imgNow" src="<?php echo base_url() ?>public/assets/img/photo-1560944527-a4a429848866.JPG" class="img-fluid" alt="Responsive image">
                </div>
            </div>
            <div id="infoNow" class="col-12 align-self-center row">
                <div class="col-12 align-self-center">
                    <h2 class="textBody">NO DEJES PASAR ESTA OPORTUNIDAD</h2>
                </div>
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-2 align-self-center"></div>
                        <div class="col-8 align-self-center">
                            <p class="text-center">Sabías que un masaje debido a su acción calmante y analgésica viene 
                                dada mediante actos reflejos que afectan al sistema nervioso central o esta causa la 
                                liberación de endorfinas que anulan las sensaciones de dolor en el cerebro. 
                                El estímulo de los mecanos receptores mediante el masaje se ha demostrado que alivia el dolor y 
                                la tensión muscular.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-5 align-self-center"></div>
                        <div class="col-2 align-self-center">
                            <button id="btnAppointmentNow" type="button" class="btn btn-block">Reserva ahora</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
