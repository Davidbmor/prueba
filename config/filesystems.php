<?php
return [

    'default' => env('FILESYSTEM_DISK', 'local'),

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'private' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'url' => env('APP_URL').'/storage/private',
            'visibility' => 'private',
        ],

    ],

    'links' => [
        public_path('storage') => storage_path('app/public'),
        public_path('private') => storage_path('app/private'),
    ],

];