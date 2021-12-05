<?php

namespace App\Modules\Admin\Gallery\Controllers\Api;

use App\Modules\Admin\Dashboard\Classes\Base;
use App\Modules\Admin\Gallery\Models\Gallery;
use App\Modules\Admin\Gallery\Services\GalleryService;
use App\Services\Response\ResponseServise;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

        return ResponseServise::sendJsonResponse(true, 200,[],[
            'items' =>  $this->service->getSources()
        ]);
    }

    /**
     * Create of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Admin\Gallery\Models\Gallery  $gallery
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Gallery $gallery)
    {
        return ResponseServise::sendJsonResponse(true, 200, [],[
            'item' => $gallery
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Admin\Gallery\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Admin\Gallery\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modules\Admin\Gallery\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
