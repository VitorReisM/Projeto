@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="justify-content-center" style="max-height: 50%;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
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
        @stop
