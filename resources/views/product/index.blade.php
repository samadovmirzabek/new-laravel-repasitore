@extends('layout.index')
@section('content')
<html>
<div class="container">
    <div class="col md-3">
        <table class="table table-dark">
            @if($products)
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Narxi</th>
                    <th scope="col">Category</th>
                    <th scope="col">Jami Soni</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{$product->name}}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td><a href="{{ route('product.edit',['product'=>$product->id])}}">EDIT</a></td>
                        <td><form action="{{ route('product.destroy',['product'=>$product->id])}}" method="post">
                                @csrf
                                @method('delete')
                               <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <form action="{{ route('product.create') }}" method="get">
                    <button type="submit" class="btn btn-success">Product_ADD</button>
                </form>
                </tbody>
            @endif
        </table>
    </div>
</div>
</html>
@endsection

