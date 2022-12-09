@extends('layouts.public')
@section('content')
<div class="page-heading1 header-text wow fadeInLeft" data-wow-delay="0.8s">
    <div class="container">
       
    </div>
</div>
<div id="content">
    <div class="home_content" id="post-10">
        <div class="post-header">
            <h1 class="page-title"><a>TAPAS DU LUNDI AU MERCREDI</a></h1>
            <p>Toutes nos tapas sont faites maison et à la minute.</p>
        </div>
    </div>
</div>
<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                <div class="item">
                    <div class='card' style="background-image: url({{ asset('assets/images/menu-item-01.jpeg') }})">
                        <div class="price">
                            <h6>9 Fr</h6>
                        </div>
                        <div class='info'>
                            <h1 class='title'>Pan Tumaca </h1>
                            <p class='description'> Huile d’Arbequina (4 pain grillés + tomate).</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card' style="background-image: url({{ asset('assets/images/menu-item-02.jpeg') }})">
                        <div class="price">
                            <h6>9.50 Fr</h6>
                        </div>
                        <div class='info'>
                            <h1 class='title'>Poivrons de Padrón</h1>
                            <p class='description'>Poivrons padrón frits</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card' style="background-image: url({{ asset('assets/images/menu-item-03.jpeg') }})">
                        <div class="price">
                            <h6>29 Fr</h6>
                        </div>
                        <div class='info'>
                            <h1 class='title'>Crevettes "a la plancha"</h1>
                            <p class='description'>(7 pièces)</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card' style="background-image: url({{ asset('assets/images/menu-item-04.jpeg') }})">
                        <div class="price">
                            <h6>19 Fr</h6>
                        </div>
                        <div class='info'>
                            <h1 class='title'>Chorizo au cidre</h1>
                            <p class='description'></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card' style="background-image: url({{ asset('assets/images/menu-item-05.jpeg') }})">
                        <div class="price">
                            <h6>21 Fr</h6>
                        </div>
                        <div class='info'>
                            <h1 class='title'>Calamars à l'ail</h1>
                            <p class='description'></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card' style="background-image: url({{ asset('assets/images/menu-item-06.jpeg') }})">
                        <div class="price">
                            <h6>33 Fr</h6>
                        </div>
                        <div class='info'>
                            <h1 class='title'>Assortiment ibérique</h1>
                            <p class='description'>(Lomo, Chorizo, Salchichón, Jamón, Queso) </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card' style="background-image: url({{ asset('assets/images/menu-item-07.jpeg') }})">
                        <div class="price">
                            <h6>24 Fr</h6>
                        </div>
                        <div class='info'>
                            <h1 class='title'>"Chichos" avec œuf au plat</h1>
                            <p class='description'>(Viande de porc marinée)</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card' style="background-image: url({{ asset('assets/images/menu-item-08.jpeg') }})">
                        <div class="price">
                            <h6>16 Fr</h6>
                        </div>
                        <div class='info'>
                            <h1 class='title'>Croquettes assorties</h1>
                            <p class='description'>(6 pièces)</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card' style="background-image: url({{ asset('assets/images/menu-item-09.jpeg') }})">
                        <div class="price">
                            <h6>16 Fr</h6>
                        </div>
                        <div class='info'>
                            <h1 class='title'>Empanadillas</h1>
                            <p class='description'>(Chausson fourrés salés)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->
@endsection
