@extends('layouts.app')

@section('title', 'Thực Đơn')

@section('content')
    <h2>Thực Đơn</h2>
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:16px;">
        @foreach($drinks as $drink)
            <div class="card">
                <img src="{{ asset($drink['image']) }}" alt="{{ $drink['name'] }}" class="responsive">
                <h3>{{ $drink['name'] }}</h3>
                <p>{{ $drink['description'] }}</p>
                <p><strong>Giá:</strong> {{ number_format($drink['price']) }} VND</p>
            </div>
        @endforeach
    </div>
@endsection