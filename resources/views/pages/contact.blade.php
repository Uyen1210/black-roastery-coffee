@extends('layouts.app')

@section('title', 'Liên Hệ')

@section('content')
    <h2>Liên Hệ</h2>
    <p>Địa chỉ: 123 Tôn Đức Thắng, Đà Nẵng</p>
    <p>Phone: 0123 456 789</p>

    <h3>Feedback for us</h3>
    <form action="#" method="post">
        <label>Tên</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email</label><br>
        <input type="email" name="email" required><br><br>

        <label>Nội dung</label><br>
        <textarea name="message" rows="5" required></textarea><br><br>

        <button type="submit">Gửi</button>
    </form>
@endsection