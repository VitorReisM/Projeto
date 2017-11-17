@extends('layouts.main')

@section('title', 'Home')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h3>{{$data->title}}</h3>

    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <img class="img-responsive" src="{{ $data->url }}" alt="">
        </div>
    </div>

    {!! $data->texto !!}
    <div class="row justify-content-md-center">
        Author: {{$data->author}}
    </div>
@stop
