

<html>

<head>

</head>
<body>

<form action="{{route('product.update',['product'=>$product->id])}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{$product->name}}"> <br>
    <input type="number" name="price" value="{{$product->price }}"> <br>
    <input type="number" name="quantity" value="{{$product->quantity}}"> <br>
    <input type="number" name="category_id" value="{{$product->category_id}}"><br>
    <button type="submit" class="btn btn-dancer">save</button>

</form>
</body>
</html>
