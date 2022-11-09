<div>
    <form action="{{ route('products.store') }}" method="post" class="flex">

        @csrf
        <div class="col-8">
            <div>
                SKU: 
                <input wire:model="SKU" class="form-control m-1" required type="text" name="SKU">
                Name: 
                <input wire:model="name" class="form-control m-1" required type="text" name="name">
                Price: 
                <input wire:model="price" class="form-control m-1" required type="number" name="price">
            </div>
            Attributes:
            <div>
                <select wire:model="attname" name="attributes" class="form-control m-1">
                    <option value="">-- Choose attribute --</option>
                    
                    @foreach ($attnames as $attname)
                        <option value="{{ $attname->id }}">{{ $attname->att_name }}</option>
                    @endforeach
                </select>
            </div>
            
            
            <div class="mt-4">   
            @foreach($attvalues as $key => $attvalue)
                    <div class="mt-2">
                        <label for="values">{{$attvalue->att_value}}:</label>
                        <input wire:model.defer="attvalue.{{ $key }}.att_value" class="form-control m-1" required type="text" name="values" placeholder="Please enter: {{$attvalue->att_value}}">
                    </div>
            @endforeach
        </div>
        </div>
        <button type="submit" class="btn btn-primary m-2">Save</button>

    </form>
</div>
