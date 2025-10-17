@extends('layouts.app')

@section('title', 'Trang Chủ')

@section('content')
    <div class="banner">
        <h2>Chào mừng đến với Neyu Roastery Coffee</h2>
        <p>Khám phá những ly cà phê mang hương vị vũ trụ.</p>
    </div>

    <h3 style="margin-top:24px;">Món nước nổi bật</h3>
    <div style="display:flex;gap:12px;">
        @foreach($featured as $d)
            <div class="card" style="flex:1">
                <img src="{{ asset($d['image']) }}" alt="{{ $d['name'] }}" class="responsive">
                <h4>{{ $d['name'] }} — {{ number_format($d['price']) }} VND</h4>
                <p>{{ $d['description'] }}</p>
            </div>
        @endforeach
    </div>
@endsection