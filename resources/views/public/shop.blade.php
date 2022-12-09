@extends('layouts.public')
@section('content')
<div class="page-heading4 header-text wow fadeInLeft" data-wow-delay="0.8s">
    <div class="container">
        
    </div>
</div>
<div id="content">
    <div class="home_content" id="post-10">
        <div class="post-header">
            <h1 class="page-title"><a>FROGS SHOP</a></h1>
        </div>
    </div>
</div>
<section class="section" id="menu">
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach($products as $key => $product)
                    <div class="item">
                    <div class='card' style="background-image: url({{ (count($product->images) > 0) ? asset($product->images[0]->route) : '' }})">
                            <div class="price">
                                <h6>{{ $product->price }}</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>{{ $product->name }}</h1>
                                <p class='description'>{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
