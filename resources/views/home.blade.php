@extends('layouts.main')

@section('title', 'Home')

@section('content')
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>

                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="http://via.placeholder.com/700x350" alt="First slide" style="width:100%;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://via.placeholder.com/700x350" alt="Second slide" style="width:100%;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://via.placeholder.com/700x350" alt="Third slide" style="width:100%;">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://via.placeholder.com/700x350" alt="Second slide" style="width:100%;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://via.placeholder.com/700x350" alt="Third slide" style="width:100%;">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://via.placeholder.com/700x350" alt="Second slide" style="width:100%;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://via.placeholder.com/700x350" alt="Third slide" style="width:100%;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

    Hoje no mundo dos Motores
    <div class="grid">
        @foreach($data as $key)
            <div class="grid-item" style="width: {{$key["image_width"]}}px;height: {{$key["image_height"]}}px">
                <h5>{!! $key["title"]!!}</h5>
                <img class="img-responsive" src="{{ URL::asset($key["image_url"]) }}" alt="" width="{{$key["image_width"]}}" height="{{$key["image_height"]}}">
            </div>
        @endforeach
    </div>


<script>
    $(document).ready( function() {
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
            layoutMode: 'masonry',
        });

        // layout Isotope after each image loads
        $grid.imagesLoaded().progress(function () {
            $grid.isotope('layout');
        });
    });
</script>
@stop


