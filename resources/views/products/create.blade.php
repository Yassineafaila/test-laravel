<h1>Ajouter un produit</h1>
<form method="post" action="{{route('products.store')}}">
    <label >Name</label><input type="text" name="name">
    <label >Detail</label><input type="text" name="detail">
    <input type="hidden" name="_token"  value="{{csrf_token()}}">
    <input type="submit" value="Envoyer">

</form>