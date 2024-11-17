<x-layout>
    <h1 class="text-4xl font-bold mb-6">Tea Details</h1>
    <h2 class="text-3xl bg-blue-500 text-white p-4 mt-4 rounded-xl shadow-lg">
        {{ $tea['name'] }}
    </h2 >
    <h2 class="text-3xl bg-black p-3 rounded-xl mt-4">{{$tea['price']}}</h2>
    <a class="bg-orange-500 p-4 m-4" href="/teas">Go Back</a>
</x-layout>
