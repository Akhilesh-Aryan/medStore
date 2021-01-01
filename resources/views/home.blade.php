@extends('base')
@section('title')
This is | homepage
@endsection
@section('content')
<div class="jumbotron bg-transparent rounded-0" style="background-image:url('wp1929358.jpg');height:500px;background:cover;">
    <div class="col-lg-6 mx-auto">
        <form action="" class="mt-5 pt-5">
            <h2 class="text-white">Find your Medicine</h2>
            <input type="search" class="form-control" placeholder="medicine name">
        </form>
        
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach($data as $d)
        <div class="col-lg-3">
            <div class="card">
                <img src="{{asset('images'.$d->logo)}}" alt="" class="card-image-top">
                <div class="card-header">
                    <h5>{{$d->id}}</h5>
                    <div class="card-body">
                        <div class="card-footer">
                            <p class="lead">{{$d->name}}<p>
                            <small>{{$d->price}}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
