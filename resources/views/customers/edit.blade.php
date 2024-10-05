@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Customer</h2>

    <!-- Tampilkan pesan error jika validasi gagal -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form untuk mengedit data pelanggan -->
    <form method="POST" action="{{ route('customers.update', $customer->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Customer Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $customer->name) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $customer->email) }}" required>
        </div>

        <div class="form-group">
            <label for="orders">Orders</label>
            <input type="number" class="form-control" id="orders" name="orders" value="{{ old('orders', $customer->orders) }}" required>
        </div>

        <div class="form-group">
            <label for="last_order">Last Order (Optional)</label>
            <input type="date" class="form-control" id="last_order" name="last_order" value="{{ old('last_order', $customer->last_order) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Customer</button>
        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
