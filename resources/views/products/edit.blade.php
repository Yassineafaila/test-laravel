<h1>Editer un produit</h1>
<form method="post" action="{{route('products.update',['product'->$product])    }}">
    @method('PUT')
    <label >Name</label><input type="text" name="name" value="{{$product->name}}">
    <label >Dtail</label><input type="text" name="Dtail" value="{{$product->detail}}">
    @csrf
    <input type="submit" value="Envoyer">

</form>