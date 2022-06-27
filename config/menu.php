<?php
    return [
        // Dashboard
        [
            'label'=>'Dashboard',
            'route'=>'home',
            'icon'=> 'fa-home'
        ],
        // Province
        [
            'label' => 'Province',
            'route' => 'province.index',
            'icon' => 'fa-home',
            'item' => [
                [
                'label' => 'All Province', 
                'route' => 'province.index', 
                ],
                [
                'label' => 'Add Province', 
                'route' => 'province.create', 
                ],
            ]
        ],
        // Branch
        [
            'label' => 'Branch',
            'route' => 'branch.index',
            'icon' => 'fa-home',
            'item' => [
                [
                'label' => 'All Branch', 
                'route' => 'branch.index', 
                ],
                [
                'label' => 'Add Branch', 
                'route' => 'branch.create', 
                ],
            ]
        ],
        // Room
        [
            'label' => 'Room',
            'route' => 'room.index',
            'icon' => 'fa-home',
            'item' => [
                [
                'label' => 'All Room', 
                'route' => 'room.index', 
                ],
                [
                'label' => 'Add Room', 
                'route' => 'room.create', 
                ],
            ]
        ],
        // Service
        [
            'label' => 'Service',
            'route' => 'service.index',
            'icon' => 'fa-home',
            'item' => [
                [
                'label' => 'All Service', 
                'route' => 'service.index', 
                ],
                [
                'label' => 'Add Service', 
                'route' => 'service.create', 
                ],
            ]
        ],
        // Payment
        [
            'label' => 'Payment',
            'route' => 'payment.index',
            'icon' => 'fa-home',
            'item' => [
                [
                'label' => 'All Payment', 
                'route' => 'payment.index', 
                ],
                [
                'label' => 'Add Payment', 
                'route' => 'payment.create', 
                ],
            ]
        ],
        // Review
        [
            'label' => 'Review',
            'route' => 'review.index',
            'icon' => 'fa-home',
            'item' => [
                [
                'label' => 'All Review', 
                'route' => 'review.index', 
                ],
                [
                'label' => 'Add Review', 
                'route' => 'review.create', 
                ],
            ]
        ],
        // Ticket
        [
            'label' => 'Ticket',
            'route' => 'service.index',
            'icon' => 'fa-home',
            'item' => [
                [
                'label' => 'All Ticket', 
                'route' => 'ticket.index', 
                ],
                [
                'label' => 'Add Ticket', 
                'route' => 'ticket.create', 
                ],
            ]
        ],
        // Blog
        [
            'label' => 'Blog',
            'route' => 'blog.index',
            'icon' => 'fa-home',
            'item' => [
                [
                'label' => 'All Blog', 
                'route' => 'blog.index', 
                ],
                [
                'label' => 'Add Blog', 
                'route' => 'blog.create', 
                ],
            ]
        ],
        // Coupon
        [
            'label' => 'Coupon',
            'route' => 'blog.index',
            'icon' => 'fa-home',
            'item' => [
                [
                'label' => 'All Blog', 
                'route' => 'blog.index', 
                ],
                [
                'label' => 'Add Blog', 
                'route' => 'blog.create', 
                ],
            ]
        ],
        // Coupon
        [
            'label' => 'User',
            'route' => 'user.index',
            'icon' => 'fa-home',
            'item' => [
                [
                'label' => 'All User', 
                'route' => 'user.index', 
                ],
                [
                'label' => 'Add User', 
                'route' => 'user.create', 
                ],
            ]
        ],
    ]
?>