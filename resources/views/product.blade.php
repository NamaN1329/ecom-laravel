<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div>
                            <div class="card">
                                <img src={{ $product->image->image_path }} alt="product image" class="w-full h-full">
                            </div>
                        </div>
                        <div class="py-2 gap-4 justify-between">
                            <form action="/buy/{{$product->id}}" method="POST">
                                @csrf
                                <h1 class="font-semibold text-3xl">Product Name : {{$product->name}}</h1>
                                <span class="block capitalize"> Category: {{$product->category->name}}</span>
                                <span class="block">&#8377; {{$product->price}}</span>
                                <span>Product Description</span>
                                <p>{{$product->description}}</p>
                                <label>Add Quantity</label>
                                <input style="width: 70px;" type="number" name="quantity" min=1 required>
                                <div style="margin-top: 24px;">
                                    <button type="submit" class="py-2 px-2" style="background-color:blueviolet">Buy Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 100%;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }
</style>