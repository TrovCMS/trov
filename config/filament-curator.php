<?php

return [
    'load_styles' => true,
    'model' => \FilamentCurator\Models\Media::class,
    'media_resource' => \FilamentCurator\Resources\MediaResource::class,
    'disk' => 'public',
    'directory' => 'media',
    'visibility' => 'public',
    'preserve_file_names' => false,
    'accepted_file_types' => ['image/jpeg', 'image/png', 'image/webp', 'image/svg+xml', 'application/pdf'],
    'max_width' => 5000,
    'min_size' => null,
    'max_size' => 5000,
    'rules' => [],
    'cloud_disks' => ['cloudinary', 's3'],
    'sizes' => [
        'thumbnail' => ['width' => 200, 'height' => 200, 'quality' => 60],
        'medium' => ['width' => 640, 'height' => null, 'quality' => 60],
        'large' => ['width' => 1024, 'height' => null, 'quality' => 60],
    ],
];
