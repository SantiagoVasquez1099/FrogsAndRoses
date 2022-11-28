<div class="row">
    @foreach($images as $key => $image)
        <div class="col-md-4 col-sm-6 col-lg-2  mt-3">

            <div class="card card-product-img hoverable h-100 z-depth-1">

                <div class="view overlay zoom hoverable waves-effect z-depth-1">
                    <img class="card-img-top img-fluid" src="{{ asset($image->route) }}" alt="{{ $image->name }}"
                        onerror=this.src="{{ asset('img/404.png') }}">
                    <a href="#!">
                        <div class="mask rgba-stylish-light"></div>
                    </a>
                </div>

                <a target="_blank" href="{{ asset($image->route) }}">
                    <div class="card-body div-first-place">
                            <a class="btn btn-link text-white w-100 truncate-text" target="_blank" href="{{ asset($image->route) }}">
                                <small class="card-title truncate-text">{{ $image->name }}</small>
                            </a>
                            <a onclick="delete_image({{ $image->id }} ,'{{$image->name}}', '{{ route($route, $image->id) }}')" 
                                class="btn btn-sm btn-danger waves-effect hoverable text-white">
                                <i class="fa fa-trash-alt fa-lg"></i>
                            </a>
                    </div>
            </div>
        </div>
    @endforeach
</div>
