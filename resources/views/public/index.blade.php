@extends('layouts.public')
@section('content')
<div id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <a href="{{ route('public.index') }}" class="logo">
                            <img src="{{ asset('assets/images/LogoFinal.png') }}" width="300px">
                        </a>
                        <h6>LA MEILLEURE EXPÉRIENCE</h6>
                        <div class="main-white-button scroll-to-section">
                            <a href="#reservation">Faire Une Réservation</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="main-banner header-text">
                    <div class="Modern-Slider">
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('assets/images/slide-01.jpg') }}" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('assets/images/slide-02.jpg') }}" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('assets/images/slide-03.jpg') }}" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<div class="request-form">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col-md-8">
                <h4>Jetez un coup d'œil à notre prix Tripadvisor Travellers' Choice</h4>
                <p>Nous sommes situés dans les 10% d'établissements
                    qui reçoivent régulièrement des notes élevées de nos visiteurs et cela nous permet de nous
                    différencier des autres.</p>
            </div>
            <div class="col-lg-4">
                <div class="tripadvisor">
                    <a target="_blank"
                        href="https://www.tripadvisor.fr/Restaurant_Review-g198814-d8766342-Reviews-Frogs_Roses_Cafe-Estavayer_le_Lac_Canton_of_Fribourg.html">
                        <img src="https://static.tacdn.com/img2/travelers_choice/widgets/tchotel_2022_LL.png"
                            alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO" /></a></div>
            </div>
        </div>
    </div>
</div>

<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Près de nous</h6>
                        <h2>UN PETITMOT...</h2>
                    </div>
                    <p>“Au Frogs and Roses Café, nous vous accueillons dans un intérieur authentique où il fait bon
                        vivre. Nous vous concoctons des petits plats goûteux avec de bons produits, frais et de saison.”
                        <br><br>“Nous nous réjouissons d’ores et déjà de vous recevoir au Frogs & Roses Café”.</p>
                    <div class="home_content">
                        <h2>Eva et Imanol</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="right-content">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/bienvenue.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Reservation Us Area Starts ***** -->
<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>NOUS CONTACTER</h6>
                        <h2>Ici, vous pouvez faire une réservation ou simplement entrer dans notre restaurant</h2>
                    </div>
                    <p>Chez Frogs&Roses, nous serons heureux de vous aider, contactez-nous dès maintenant.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Numéro de Téléphone</h4>
                                <span><a href="#">026-664-01-01</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>E-mails</h4>
                                <span><a href="https://mail.google.com/mail/u/0/?hl=es&tf=cm&fs=1&to=contact@frogsandroses.ch"
                                        target="_blank">contact@frogsandroses.ch</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="https://formspree.io/f/mbjbzzwl" method="post">
                        <input name="subject" type="hidden" id="subject" value="Contacto Página Web" required="">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Réservation de Table</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Votre Nom*" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Votre Adresse E-mail" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="phone" type="text" id="phone" placeholder="Numéro de Téléphone*"
                                        required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <select value="number-guests" name="number-guests" id="number-guests">
                                        <option value="number-guests">Número D'invitations</option>
                                        <option name="1" id="1">1</option>
                                        <option name="2" id="2">2</option>
                                        <option name="3" id="3">3</option>
                                        <option name="4" id="4">4</option>
                                        <option name="5" id="5">5</option>
                                        <option name="6" id="6">6</option>
                                        <option name="7" id="7">7</option>
                                        <option name="8" id="8">8</option>
                                        <option name="9" id="9">9</option>
                                        <option name="10" id="10">10</option>
                                        <option name="11" id="11">11</option>
                                        <option name="12" id="12">12</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <div id="filterDate2">
                                    <div class="input-group date" data-date-format="dd/mm/yyyy">
                                        <input name="date" id="date" type="text" class="form-control"
                                            placeholder="dd/mm/yyyy">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br><br><br>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Message"
                                        required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button-icon">Faire Une
                                        Réservation</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Reservation Area Ends ***** -->
@endsection
