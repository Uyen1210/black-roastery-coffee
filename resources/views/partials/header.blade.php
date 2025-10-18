<header>
    <div class="container" style="display:flex;justify-content:space-between;align-items:center;">
        <div>
            <h1 style="margin:0;">BLACK Roastery Coffee</h1>
            <small>The Universe Roastery</small>
        </div>
        <nav>
            <a href="{{ route('home') }}">Trang Chủ</a>
            <a href="{{ route('about') }}">Giới Thiệu</a>
            <a href="{{ route('menu') }}">Thực Đơn</a>
            <a href="{{ route('beans-story') }}">Story Hạt cà phê</a>
            <a href="{{ route('contact') }}">Liên Hệ</a>
        </nav>
    </div>
</header>

<style>
    nav {
        display: flex;
        gap: 18px;
        white-space: nowrap;
    }

    nav a {
        text-decoration: none;
        color: #ffffff;
        padding: 8px 14px;
        font-weight: 500;
        letter-spacing: 0.5px;
        border-radius: 8px;
        position: relative;
        transition: all 0.3s ease;
    }

    nav a:hover::after {
        width: 70%;
    }

    nav a:hover {
        background-color: #ffffff;
        color: #000000;
    }

    header {
        background-color: #000000;
        color: white;
        padding: 15px 0;
    }

    header h1 {
        margin: 0;
        font-size: 26px;
        font-weight: 700;
        letter-spacing: 1px;
    }
</style>