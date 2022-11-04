@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('NEW PRODUCT') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                            @livewire('product-form')
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

                            {{-- <option value="{{$att}}" @selected('Select')>{{$att}}</option> --}}
                            
                                
                        </select>
                        Values:
                            
                        
                        {{-- <?php
                            $attributes = match ($att) {
                                "DVD" => ["MB"],
                                "Furniture" => ["W", "H", "L"],
                                "Books" => ["Weight"],
                                default => [],
                            };
                            echo "Values:";
                            foreach ($attribute as $att => $attribute)
                            echo "<input class='form-control m-1' required type='text' name='value'>";
                        ?> --}}
                        
                        <button type="submit" class="btn btn-primary m-2">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection