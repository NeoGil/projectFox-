<?php

namespace App\Modules\Admin\Dashboard\Controllers;

use App\Modules\Admin\Dashboard\Classes\Base;
use App\Modules\Admin\Dashboard\Services\DashboardService;
use App\Modules\Admin\Gallery\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Base
{
    public function __construct(DashboardService $dashboardService)
    {
        parent::__construct();
        $this->service = $dashboardService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $gallery= Gallery::all();
        $this->title = __("admin.dashboard_title_page");
        $this->content  = view('Admin::Dashboard.index')->with([
            'title' => $this->title,
            'gallery' => $gallery
        ])->render();

        return $this->renderOutput();

    }

}
