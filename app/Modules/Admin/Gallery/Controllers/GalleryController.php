<?php

namespace App\Modules\Admin\Gallery\Controllers;

use App\Modules\Admin\Dashboard\Classes\Base;
use App\Modules\Admin\Gallery\Models\Gallery;
use App\Modules\Admin\Gallery\Requests\GalleryRequest;
use App\Modules\Admin\Gallery\Services\GalleryService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class GalleryController extends Base
{
    /**
     * RoleController constructor.
     * @param GalleryService $galleryService
     */
    public function __construct(GalleryService $galleryService)
    {
        parent::__construct();
        $this->service = $galleryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|void
     * @throws AuthorizationException
     */
    public function index()
    {

        $galley = Gallery::all();

        $this->title = "Галерея";

        $this->content = view('Admin::Gallery.index')->
        with([
            'galley' => $galley,
            'title' => $this->title,
        ])->
        render();

        return $this->renderOutput();
    }

    /**
     * Create of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function create()
    {

        $this->title = "Добавление ного творение";

        $this->content = view('Admin::Gallery.create')->
        with([
            'title' => $this->title,
        ])->
        render();

        return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(GalleryRequest $request)
    {

        if($request->alias == null) {
            $new_alias = $this->service->translit_sef($request->title);

            $request['alias'] = $new_alias;
        }
        $this->service->save($request, new Gallery());

        return  \Redirect::route('galleries.index')->with([
            'message' => __('Success')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Admin\Gallery\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Admin\Gallery\Models\Gallery  $gallery
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $this->title = "Редактирование творения";

        $this->content = view('Admin::Gallery.edit')->
        with([
            'title' => $this->title,
            'item' => $gallery,
        ])->
        render();

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Admin\Gallery\Models\Gallery  $gallery
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        if($request->alias == null) {
            $new_alias = $this->service->translit_sef($request->title);
            $request['alias'] = $new_alias;
        }
        $this->service->save($request, $gallery);
        return  \Redirect::route('galleries.index')->with([
            'message' => __('Success')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modules\Admin\Gallery\Models\Gallery  $gallery
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return  \Redirect::route('galleries.index')->with([
            'message' => __('Success')
        ]);
    }
}
