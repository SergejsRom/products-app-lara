<div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light line">
            <div class="container">

                <!-- Left Side -->
                <ul class="navbar-nav me-auto mt-4">
                    <li>
                        <h4>Product List</h4>
                    </li>
                </ul>
                <!-- Right Side -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button wire:click="delete" type="button" class="btn btn-dark m-2">MASS DELETE</button>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success mt-2" href="{{ route('add-product') }}">ADD</a>
                    </li>
                </ul>

            </div>
        </nav>
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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
        </nav> --}}

        <div class="row mt-3">
            {{-- @json($checkbox) --}}

            @foreach ($products as $product)
                <div class="col-xl-3 col-sm-12 col-md-5 col-lg-3 product-list att_values_box">
                    <input wire:model="checkbox" class="checkbox-posititon {{ $delete_checkbox }}" type="checkbox"
                        value=" {{ $product->id }} ">
                    <h3>SKU: {{ $product->SKU }}</h3>
                    <h5>Name: {{ $product->name }}</h5>
                    <h5>Price: {{ $product->price }} &dollar;</h5>
                    {{-- <h6>{{ $product->attributes }}</h6> --}}
                    <div class="flex">
                        <div class="margin10">
                            @foreach ($product->att_value_name as $item)
                                <h5 class="">{{ $item }}:</h5>
                            @endforeach
                        </div>
                        <div class="margin10">
                            @foreach ($product->values as $item)
                                <h5 class="">{{ $item }}</h5>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</div>
