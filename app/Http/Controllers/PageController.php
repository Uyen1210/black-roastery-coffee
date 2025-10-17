<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $drinks = [
        [
            'id' => 1,
            'name' => 'Tinh Vân Latte',
            'price' => '55000',
            'description' => 'Latte ngọt ngào với lớp bọt sữa mịn như mây.',
            'image' => 'images/latte.jpg'
        ],
        [
            'id' => 2,
            'name' => 'Hố Đen Americano',
            'price' => '45000',
            'description' => 'Americano đậm đà, mạnh mẽ đánh thức mọi giác quan.',
            'image' => 'images/americano.jpg'
        ],
        [
            'id' => 3,
            'name' => 'Vũ Trụ Cold Brew',
            'price' => '60000',
            'description' => 'Cold brew ủ lạnh 24 giờ, mang hương vị của cả vũ trụ.',
            'image' => 'images/coldbrew.jpg'
        ],
        [
            'id' => 4,
            'name' => 'Dải Ngân Hà Macchiato',
            'price' => '58000',
            'description' => 'Sự kết hợp hoàn hảo giữa espresso và vệt sữa trắng.',
            'image' => 'images/macchiato.jpg'
        ],
        [
            'id' => 5,
            'name' => 'Tàu bay Cốm Vàng',
            'price' => '49000',
            'description' => 'Trà sữa thanh mát, thoang thoảng hương cốm non mộc mạc, hương vị sẽ đưa bạn bay đến một hành tinh thư giãn xuyên không gian.',
            'image' => 'images/greenrice.jpg'
        ],
        [
            'id' => 6,
            'name' => 'Sao Chổi Chuối Bơ',
            'price' => '59000',
            'description' => 'Sự kết hợp béo ngậy, ấm áp của chuối chín, bơ đậu phộng mặn nhẹ và sữa tươi. Một hương vị đậm đà như một sao chổi rực lửa.',
            'image' => 'images/banana.jpg'
        ],
        [
            'id' => 7,
            'name' => 'Cực Quang Nhiệt Đới',
            'price' => '62000',
            'description' => 'Sự hòa quyện bất ngờ giữa vị chát thanh của Matcha và vị ngọt thơm của xoài chín, tạo nên một cực quang bùng nổ vị giác.',
            'image' => 'images/matchamango.jpg'
        ],
        [
            'id' => 8,
            'name' => 'Không gian Lychee',
            'price' => '55000',
            'description' => 'Trà lài thanh tao, kết hợp vị ngọt mọng nước của vải tươi. Một thức uống nhẹ nhàng, giúp bạn tìm thấy sự tĩnh lặng giữa vũ trụ hỗn loạn.',
            'image' => 'images/lychee.jpg'
        ],
    ];

    private $beans = [
        [
            'id' => 1,
            'name' => 'Hạt Sao Chổi (Ethiopia)',
            'origin' => 'Yirgacheffe, Ethiopia',
            'notes' => 'Hương hoa nhài, vị chua thanh của quả mọng.',
            'image' => 'images/ethiopia.jpg'
        ],
        [
            'id' => 2,
            'name' => 'Hạt Thiên Thạch (Colombia)',
            'origin' => 'Huila, Colombia',
            'notes' => 'Vị ngọt caramel, sô cô la và một chút hương cam.',
            'image' => 'images/colombia.jpg'
        ],

    ];

    private $topping = [
        [
            'id' => 1,
            'name' => 'Jasmine Flavor Oolong',
            'price' => '10000',
            'description' => 'Hương hoa nhài, thoang thoảng vị trà xanh và một chút ngọt của trân châu.',
            'image' => 'images/oolong.jpg'
        ],
        [
            'id' => 2,
            'name' => 'White tapioca pearl',
            'price' => '8000',
            'description' => 'Vị ngọt nhẹ, thanh mát. Giòn nhẹ ở bên ngoài, bên trong dai mềm.',
            'image' => 'images/whiteboba.jpg'
        ],
    ];

    public function index()
    {
        $featuredDrinks = array_slice($this->drinks, 0, 3);
        $featuredTopping = array_slice($this->topping, 0, 1);

        $featured = array_merge($featuredDrinks, $featuredTopping);

        return view('pages.home', [
            'featured' => $featured
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function menu()
    {
        return view('pages.menu', [
            'drinks' => $this->drinks,
            'topping' => $this->topping

        ]);
    }

    public function beansStory()
    {
        return view('pages.beans-story', [
            'beans' => $this->beans
        ]);
    }


    public function contact()
    {
        return view('pages.contact');
    }
}
