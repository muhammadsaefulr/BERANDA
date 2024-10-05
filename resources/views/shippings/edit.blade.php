@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Shipping Status</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('shippings.update', $shipping->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="customer_name">Customer Name</label>
            <input type="text" name="customer_name" class="form-control" value="{{ $shipping->customer_name }}">
        </div>
        <div class="form-group">
            <label for="shipping_status">Shipping Status</label>
            <input type="text" name="shipping_status" class="form-control" value="{{ $shipping->shipping_status }}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" value="{{ $shipping->address }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Shipping</button>
    </form>
</div>
@endsection
