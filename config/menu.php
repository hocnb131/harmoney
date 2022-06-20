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
                // [
                // 'label' => 'Edit Province', 
                // 'route' => 'province.edit', 
                // ],
                // [
                // 'label' => 'Delete Province', 
                // 'route' => 'province.destroy', 
                // ],
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
                // [
                // 'label' => 'Edit Branch', 
                // 'route' => 'branch.edit', 
                // ],
                // [
                // 'label' => 'Delete Branch', 
                // 'route' => 'branch  .destroy', 
                // ],
            ]
        ],
        
    ]
?>