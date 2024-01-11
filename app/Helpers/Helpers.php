<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

class Helpers
{

    public static function deleteMedia($filePath) {
        $path = parse_url($filePath);
        $storagePath = public_path();
        $fullPath = $storagePath . str_replace('/','\\',$path['path']);
        File::delete($fullPath);
    }
}
