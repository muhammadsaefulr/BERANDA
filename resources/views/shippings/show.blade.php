@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Shipping Details</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Order ID: {{ $shipping->id }}</h5>
            <p class="card-text"><strong>Customer Name:</strong> {{ $shipping->customer_name }}</p>
            <p class="card-text"><strong>Shipping Status:</strong> {{ $shipping->shipping_status }}</p>
            <p class="card-text"><strong>Address:</strong> {{ $shipping->address }}</p>
        </div>
    </div>

    <a href="{{ route('shippings.index') }}" class="btn btn-secondary mt-3">Back to Shipping Management</a>
</div>
@endsection
