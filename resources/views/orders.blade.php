<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        @if(count($orders))
                        @foreach($orders as $order)
                        <div>
                            <div class="card">
                                <img src={{ $order->product->image->image_path }} alt="product image" style="width:100%">
                                <div class="container">
                                    <h4><b>{{$order->product->name}}</b></h4>
                                    <p>
                                        <span class="block">Quantity :{{$order->quantity}}</span>
                                        <span class="block">Total Price : &#8377; {{$order->total_price}}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
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

    .container {
        padding: 2px 16px;
    }
</style>