<?php

namespace App\Models\MainTitle;

use App\Models\MainSlider\Slider;
use Illuminate\Support\Facades\DB;

class IndexPageRepository
{
    public function getEntitiesFromSlider()
    {
        return Slider::all();
    }

    public function getCreateSlider(
        string $title,
        string $imagePath
    )
    {
        $slider = new Slider();
        $slider->title = $title;
        $slider->img = $imagePath;

        $slider->saveOrFail();

        return $slider;
    }

    public function getAllDataFromTitleIndexPage()
    {
        return IndexPage::all();
    }

    public function getTitleIndexPageById($id)
    {
        return IndexPage::query()->findOrFail($id);
    }

    public function setTitleFromIndexPage($id, $string)
    {
        DB::table('index_pages')->update([
            'title' => $string
        ]);
    }
}
