<div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="navbar-nav me-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <button wire:click="delete" type="button" class="btn btn-dark">DELETE</button>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success" href="{{ route('products.create') }}">ADD NEW</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div>
            <div class="row row-cols-4">
                {{-- @json($checkbox) --}}

                @foreach ($products as $product)
                    <div class="col product-list">
                        <input wire:model="checkbox" type="checkbox" value=" {{ $product->id }} ">
                        <h3>{{ $product->SKU }}</h3>
                        <h5>{{ $product->name }}</h5>
                        <h5>{{ $product->price }}</h5>
                        <h6>{{ $product->attributes }}</h6>
                        <div>
                        @foreach ($product->values as $item)
                            <h5>{{ $item }}</h5>
                        @endforeach
                        @foreach ($product->att_value_name as $item)
                            <h5>{{ $item }}</h5>
                        @endforeach
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
