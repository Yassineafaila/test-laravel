<head>
@vite('resources/css/app.css')
</head>
<h1 class="text-3xl">List des produits</h1>
<table class="table-auto">
    <tr class="text-center">
        <td>ID</td>
        <td>Name</td>
        <td>Detail</td>
        <td>Created_at</td>
        <td>Updated_at</td>
    </tr>
    @foreach($listeProduits as $products)
    <tr class="text-center">
        <td>{{$products->id}}</td>
        <td>{{$products->name}}</td>
        <td>{{$products->detail}}</td>
        <td>{{$products->created_at}}</td>
        <td>{{$products->updated_at}}</td>
        
    </tr>
    @endforeach
</table>