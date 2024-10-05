@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Shipping</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('shippings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="customer_name">Customer Name</label>
            <input type="text" name="customer_name" class="form-control" value="{{ old('customer_name') }}">
        </div>
        <div class="form-group">
            <label for="shipping_status">Shipping Status</label>
            <input type="text" name="shipping_status" class="form-control" value="{{ old('shipping_status') }}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" value="{{ old('address') }}">
        </div>
        <button type="submit" class="btn btn-primary">Add Shipping</button>
    </form>
</div>
@endsection
