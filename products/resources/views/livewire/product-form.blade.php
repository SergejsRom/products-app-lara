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
        <select class="form-control m-1" class="form-control" name="attribute">

            <option value="{{$att}}" @selected('Select')>{{$att}}</option>
            
                
        </select>
        Values:
        
        <button type="submit" class="btn btn-primary m-2">Save</button>
    </div>
    </form>
</div>
