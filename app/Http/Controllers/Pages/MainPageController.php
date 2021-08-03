<?php

namespace App\Http\Controllers\Pages;

use App\Models\MainTitle\IndexPage;
use App\Models\MainTitle\IndexPageRepository;
use App\Models\MainTitle\IndexPageService;
use Illuminate\Http\Request;

class MainPageController
{
    protected $service;
    protected $repository;

    public function __construct(
        IndexPageRepository $indexPageRepository,
        IndexPageService $indexPageServices
    )
    {
        $this->repository = $indexPageRepository;
        $this->service = $indexPageServices;
    }

    public function index() {
        $sliders = $this->repository->getEntitiesFromSlider();
        $titles = $this->repository->getAllDataFromTitleIndexPage();

        return view('admin.pages.main.index', compact('titles', 'sliders'));
    }

    public function createSlider()
    {
        return view('admin.pages.main.createSlider');
    }

    public function storeSlider(Request $request)
    {
        $filenamePath = $this->service->uploadImage($request);

        $this->repository->getCreateSlider($request->input('title'), $filenamePath);

        return redirect()->route('main-index')->with('message', 'Изображение добавленно!');

    }

    public function mainIndexTitleEdit($id)
    {
        $titles = $this->repository->getTitleIndexPageById($id);

        return view('admin.pages.main.titleIndexPage', compact('titles'));
    }

    public function updateTitle(Request $request, $id)
    {
//        $titleIndexPage = IndexPage::query()->findOrFail($id);

        $this->repository->setTitleFromIndexPage($id, $request->input('title'));

        return redirect()->route('main-index')->with('message', 'Заголовок главной страницы изменен!');
    }
}
