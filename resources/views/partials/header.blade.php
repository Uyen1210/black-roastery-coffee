<header>
    <div class="container" style="display:flex;justify-content:space-between;align-items:center;">
        <div>
            <h1 style="margin:0;"> Black Roastery Coffee</h1>
            <small>The Universe Roastery</small>
        </div>
        <nav>
            <a href="{{ route('home') }}">Trang Chủ</a>
            <a href="{{ route('about') }}">Giới Thiệu</a>
            <a href="{{ route('menu') }}">Thực Đơn</a>
            <a href="{{ route('beans-story') }}">Câu chuyện Hạt cà phê</a>
            <a href="{{ route('contact') }}">Liên Hệ</a>
        </nav>
    </div>
</header>

<style>
    nav a {
        text-decoration: none;
        color: #3e2f1c; /* màu nâu cà phê */
        margin-left: 20px;
        font-weight: 600;
        font-size: 16px;
        padding: 6px 10px;
        border-radius: 4px;
        position: relative;
        transition: all 0.3s ease;
    }

    nav a:hover {
        background-color: #b5651d; /* màu nền khi hover */
        color: #fff;
        transform: scale(1.05);
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    nav a::after {
        content: '';
        position: absolute;
        width: 0%;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #b5651d;
        transition: width 0.3s ease;
    }

    nav a:hover::after {
        width: 100%;
    }
</style>