<?php 
    return [
        'menus' => [
            'dashboard' => [
                'name' => 'Bảng điều khiển',
                'url' => 'dashboard',
                'icon' => '<i class="fas fa-cog"></i>',
                'submenu' => []
            ],
            'product' => [
                'name' => 'Sản phẩm',
                'url' => '',
                'icon' => '<i class="fab fa-product-hunt"></i>',
                'submenu' => [
                    'product' => [
                        'name' => 'Sản phẩm',
                        'url' => '',
                    ],
                    'category' => [
                        'name' => 'Danh mục sản phẩm',
                        'url' => 'categories.index'
                    ]
                ]
            ],
        ],
    ];
?>