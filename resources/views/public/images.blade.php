@extends('layouts.public')
@section('content')
<div class="page-heading3 header-text wow fadeInLeft" data-wow-delay="0.8s">
    <div class="container">
        
    </div>
</div>
<div id="content">
    <div class="home_content" id="post-10">
        <div class="post-header">
            <h1 class="page-title"><a>EN IMAGES</a></h1>
        </div>
    </div>
</div>
<section class="section" id="menu">
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach($images as $key => $img)
                    <div class="item">
                        <div class='card' style="background-image: url({{ asset($img->route) }})"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
