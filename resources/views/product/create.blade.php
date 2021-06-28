

@extends('layout.index')

@section('content')
<html>

        <head>

        </head>
    <body>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">{{$errors->first('name')}}</span>
                <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">{{$errors->first('price')}}</span>
                <input type="number" name="price" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">{{$errors->first('quantity')}}</span>
                <input type="number" name="quantity" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">{{$errors->first('category_id')}}</span>
                <input type="number" name="category_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default"></span>
                <input type="file" name="image" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>




            <button type="submit" class="btn btn-danger">save</button>

        </form>
    </body>
</html>
@endsection
