@extends("layouts.layout")
@section("content")
    <h1 class="text-3xl font-bold mb-4">List des produits</h1>
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="text-center bg-gray-200">
                <th class="py-2">ID</th>
                <th class="py-2">Name</th>
                <th class="py-2">Detail</th>
                <th class="py-2">Created_at</th>
                <th class="py-2">Updated_at</th>
                <th class="py-2">Action</th>
                <th class="py-2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($listeProduits as $product)
            <tr class="text-center">
                <td class="py-2">{{ $product->id }}</td>
                <td class="py-2">{{ $product->name }}</td>
                <td class="py-2">{{ $product->detail }}</td>
                <td class="py-2">{{ $product->created_at }}</td>
                <td class="py-2">{{ $product->updated_at }}</td>
                <td class="py-2">
                    <a href="{{ route('products.edit', ['product' => $product]) }}" class="text-blue-500 hover:underline">Editer</a>
                </td>
                <td class="py-2">
                    <form method="post" action="{{ route('products.destroy', ['product' => $product]) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="text-red-500 hover:underline">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
