<?php

namespace App\Models\MainTitle;

use Illuminate\Support\Str;

class IndexPageService
{
    public function uploadImage($request)
    {
        if ($request->hasFile('image')) {
            $filename = Str::random(10). '.'.$request->file('image')->extension();
            $request->file('image')->move(public_path("/img/upload"), $filename);
            return "/img/upload/{$filename}";
        }

    }
}
