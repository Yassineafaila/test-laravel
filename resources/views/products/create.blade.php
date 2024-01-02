@extends("layouts.layout")
@section("content")
    <h1 class="text-3xl font-bold mb-4">Ajouter un produit</h1>
    <form method="post" action="{{ route('products.store') }}" class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
            <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>
        <div class="mb-4">
            <label for="detail" class="block text-sm font-medium text-gray-600">Detail</label>
            <input type="text" name="detail" id="detail" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Envoyer</button>
    </form>
    @endsection
