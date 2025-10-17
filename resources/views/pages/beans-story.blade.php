@extends('layouts.app')

@section('title', 'Câu chuyện Hạt cà phê')

@section('content')
    <h2>Câu chuyện Hạt cà phê</h2>

    @foreach($beans as $bean)
        <div style="display:flex; gap:16px; margin-bottom:20px;">
            <div style="flex:0 0 220px;">
                <img src="{{ asset($bean['image']) }}" alt="{{ $bean['name'] }}" class="responsive">
            </div>
            <div style="flex:1;">
                <h3>{{ $bean['name'] }}</h3>
                <p><strong>Nguồn gốc:</strong> {{ $bean['origin'] }}</p>
                <p><strong>Ghi chú hương vị:</strong> {{ $bean['notes'] }}</p>
            </div>
        </div>
    @endforeach

@endsection