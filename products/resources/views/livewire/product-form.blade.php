<div>
    <form id="product_list" action="{{ route('products.store') }}" method="post">
        @csrf

        <nav class="navbar navbar-expand-md navbar-light line">
            <div class="container">
                
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto mt-4">
                        <li>
                            <h4>Product ADD</h4>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <button type="submit" class="btn btn-success m-2">SAVE</button>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-danger mt-2" href="{{ route('products.index') }}">CANCEL</a>
                        </li>
                    </ul>
                
            </div>
        </nav>
        <div class="col-12">
            <div class="flex">
                <h5 class="mt-2"> SKU: </h5>
                <input wire:model="SKU" class="form-control m-1 col-5 width80" required type="text" name="SKU">
            </div>
            <div class="flex">
                <h5 class="mt-2">Name: </h5>
                <input wire:model="name" class="form-control m-1 width80" required type="text" name="name">
            </div>
                <div class="flex">
                <h5 class="mt-2">Price: </h5>
                <input wire:model="price" class="form-control m-1 width80" required type="number" name="price">
            </div>
            <div class="flex">
                <h5 class="mt-2">Attributes:</h5>
                <select wire:model="attname" name="attributes" class="form-control m-1 width80">
                    <option value="">-- Choose attribute --</option>

                    @foreach ($attnames as $attname)
                        <option value="{{ $attname->id }}">{{ $attname->att_name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="mt-4" class="flex""> --}}
                
                @foreach ($attvalues as $key => $attvalue)
                <div class="flex">
                        <h5><label for="values">{{ $attvalue->att_value }}:</label></h5>
                        <input id="{{ $attvalue->att_value }}" wire:model.defer="attvalue.{{ $key }}.att_value"
                            class="form-control m-1 width80" required type="text" name="values[]"
                            placeholder="{{ $attvalue->att_value }}">
                        <input type="hidden" name="att_value_name[]" value="{{ $attvalue->att_value }}">
                    </div>
                    
                @endforeach

            {{-- </div> --}}
        </div>
    </form>
</div>
