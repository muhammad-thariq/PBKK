<x-layout>
  <h2>Currently Available products</h2>

  <ul>
    @foreach($products as $product)
      <li>
        <x-card :highlight="$product['price'] > 10" href="/products/{{$product['id']}}">
          <h3>{{ $product['name'] }}</h3>
        </x-card>
      </li>
    @endforeach
  </ul>
</x-layout>