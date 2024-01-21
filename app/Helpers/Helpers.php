<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class Helpers
{
    public static function generateUniqueFileName($originalName)
    {
        $extension = pathinfo($originalName, PATHINFO_EXTENSION);
        $uniqueName = Str::uuid()->toString() . '.' . $extension;

        return $uniqueName;
    }
}
