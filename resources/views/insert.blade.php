@extends('base')
@section('title')
This is | InsertPage?
@endsection
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-7 mx-auto">
            <form action="/" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <h4 class="text-danger">Insert about medicine here</h4>
                                <hr>
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                    <small class="text-danger">{{$errors->first('name')}}</small>
                                </div>
                                <div class="mb-3">
                                    <label for="logo">Logo</label>
                                    <input type="file" name="logo" class="form-control" value="{{old('logo')}}">
                                <small  class="text-danger">{{$errors->first('logo')}}</small>
                                </div>
                                <div class="mb-3">
                                    <label for="mrp">MRP</label>
                                    <input type="text" name="mrp" class="form-control" value="{{old('mrp')}}">
                                <small class="text-danger">{{$errors->first('mrp')}}</small>
                                </div>
                                <div class="mb-3">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" class="form-control" value="{{old('price')}}">
                                    <small class="text-danger">{{$errors->first('price')}}</small>
                                </div>
                                <div class="mb-3">
                                    <label for="mfg">mfg Date</label>
                                    <input type="date" name="mfg" class="form-control" value="{{old('mfg')}}">
                                    <small class="text-danger">{{$errors->first('mfg')}}</small>
                                </div>
                                <div class="mb-3">
                                    <label for="expiry">expiry date</label>
                                    <input type="date" name="expiry" class="form-control" value="{{old('expiry')}}">
                                    <small class="text-danger">{{$errors->first('expiry')}}</small>
                                </div>
                                <div class="mb-3">
                                    <label for="desc">Description</label>
                                    <textarea rows="4" name="desc" class="form-control" value="{{old('desc')}}"></textarea>
                                    <small class="text-danger">{{$errors->first('desc')}}
                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="post" class="form-control btn btn-success btn-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    @endsection
