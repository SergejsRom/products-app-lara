<div>
    <form action="{{ route('products.store') }}" method="post" class="flex">

        @csrf
        <div class="col-8">
            <div>
                SKU: {{$SKU}}
                <input wire:model="SKU" class="form-control m-1" required type="text" name="SKU">
                Name: {{$name}}
                <input wire:model="name" class="form-control m-1" required type="text" name="name">
                Price: {{$price}}
                <input wire:model="price" class="form-control m-1" required type="number" name="price">
            </div>
            Attributes:
            {{-- <div>
                <select wire:model="attname" name="attributes" class="form-control m-1">
                    <option value="">-- Choose attribute --</option>
                    
                    @foreach ($attnames as $attname)
                        <option value="{{ $attname->id }}">{{ $attname->att_name }}</option>
                    @endforeach
                </select>
            </div>
            Values: 
            <div>
                <select wire:model="attvalue" name="values" class="form-control">
                    @if ($attvalues->count() == 0)
                        <option value="">-- Choose attribute first --</option>
                    @endif
                    @foreach ($attvalues as $attvalue)
                        <option value="{{ $attvalue->id }}">{{ $attvalue->name }}</option>
                    @endforeach
                </select>
            </div> --}}

        </div>
        <button type="submit" class="btn btn-primary m-2">Save</button>

    </form>
</div>
