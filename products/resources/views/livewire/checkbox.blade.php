<div class="row row-cols-4" >
    {{-- @json($checkbox) --}}
    @foreach ($products as $product)
        <div class="col product-list">
            <input wire:model="checkbox" type="checkbox" value=" {{ $product->id}} ">
            <h3>{{ $product->SKU }}</h3>
            <h5>{{ $product->name }}</h5>
            <h5>{{ $product->price }}</h5>
            <h6>{{ $product->attributes }}</h6>
            <h5>{{ $product->values }}</h5>
        </div>
    @endforeach

</div>