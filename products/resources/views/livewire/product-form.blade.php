<div>
    <form id="product_form" action="{{ route('products.store') }}" method="post">
        @csrf

        <nav class="navbar navbar-expand-md navbar-light line">
            <div class="container">

                <!-- Left Side -->
                <ul class="navbar-nav me-auto mt-4">
                    <li>
                        <h4>Product ADD</h4>
                    </li>
                </ul>
                <!-- Right Side -->
                <ul class="navbar-nav ms-auto">
                    @if ($errors->count() !== 0 || $attname == "" || $attvalue = "")
                    <li class="nav-item">
                        <button type="button" class="btn btn-success m-2" disabled>Please check the form</button>
                    </li>    
                    @else
                    <li class="nav-item">
                        <button type="submit" class="btn btn-success m-2">SAVE</button>
                    </li>
                    @endif

                    {{-- @if ($errors->count() == 0)
                        <li class="nav-item">
                            <button type="submit" class="btn btn-success m-2">SAVE</button>
                        </li>
                    @endif
                    @if ($errors->count() !== 0 || $attname == "")
                        <li class="nav-item">
                            <button type="button" class="btn btn-success m-2" disabled>Please check the form</button>
                        </li>
                    @endif --}}
                    
                    <li class="nav-item">
                        <a class="btn btn-danger mt-2" href="{{ route('products.index') }}">CANCEL</a>
                    </li>
                </ul>

            </div>
        </nav>
        <div class="col-12">
            <div class="flex">
                <h5 class="mt-2"> SKU: </h5>
                <input id="sku" wire:model="SKU" class="form-control m-1 col-5 width80" required type="text"
                    name="SKU">


                {{-- @if ($errors->has('SKU'))
                    <div>{{ $errors->first('SKU') }} </div>
                @endif --}}
            </div>
            @if ($errors->has('SKU'))
                <div class="alert alert-danger">
                    {{ $errors->first('SKU') }}
                </div>
            @endif
            <div class="flex">
                <h5 class="mt-2">Name: </h5>
                <input id="name" wire:model="name" class="form-control m-1 width80" required type="text"
                    name="name">
            </div>
            @if ($errors->has('name'))
                <div class="alert alert-danger">
                    {{ $errors->first('name') }}
                </div>
            @endif
            <div class="flex">
                <h5 class="mt-2">Price: </h5>
                <input id="price" wire:model="price" class="form-control m-1 width80" required type="text"
                    name="price">
            </div>
            @if ($errors->has('price'))
                <div class="alert alert-danger">
                    {{ $errors->first('price') }}
                </div>
            @endif
            <div class="flex">
                <h5 class="mt-2">Product type:</h5>
                <select wire:model="attname" name="attributes" class="form-control m-1 width80">
                    @if ($attnames == "")
                        <option id="productType" value="">-- Type switcher --</option>
                    @endif
                    <option id="productType" value="">-- Type switcher --</option>
                    

                    @foreach ($attnames as $attname)
                        <option id="productType" value="{{ $attname->id }}">{{ $attname->att_name }}</option>
                    @endforeach
                </select>
            </div>

            @if ($attvalues->count() !== 0)
            <div class="att_values_box mt-2">
                @foreach ($attvalues as $key => $attvalue)
                    <div class="flex">
                        <h5><label for="values">{{ $attvalue->att_value }}:</label></h5>
                        <input id="{{ strtok($attvalue->att_value, ' ') }}"
                            wire:model="attvalue.{{ $key }}.att_value" class="form-control m-1 width80"
                            required type="text" name="values[]"
                            placeholder="Please provide {{ $attvalue->att_description }}">
                        <input type="hidden" name="att_value_name[]" value="{{ $attvalue->att_value }}">
                    </div>
                @endforeach
                @if ($errors->has('attvalue.*.att_value'))
                    <div class="alert alert-danger">
                        {{ $errors->first('attvalue.*.att_value') }}
                    </div>
                @endif
            </div>
            @endif
            
        </div>
    </form>
</div>
