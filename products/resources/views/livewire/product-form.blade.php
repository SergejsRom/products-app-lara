<div>
    <form action="{{ route('products.store') }}" method="post" class="flex">
                        
        @csrf
        <div class="col-8">
        SKU:
        <input class="form-control m-1" required type="text" name="SKU">
        Name:
        <input class="form-control m-1" required type="text" name="name">
        Price:
        <input class="form-control m-1" required type="number" name="price">
        Attributes:
        <select wire:model="attname"
            class="form-control m-1" name="attribute">
            <option value="">-- Choose attribute --</option>

            @foreach ($attnames as $attname)
            <option value="{{$attname->id}}">{{$attname->att_name}}</option>
            @endforeach
            {{-- <option value="{{$att}}" @selected('Select')>{{$att}}</option> --}}
        </select>
        <div wire:model="attvalue">
        @foreach ($attvalues as $attvalue)
        {{$attvalue -> att_value}}
        <input  type="text">
 
        
        @endforeach
    </div>
        <button type="submit" class="btn btn-primary m-2">Save</button>
    </div>
    </form>
</div>