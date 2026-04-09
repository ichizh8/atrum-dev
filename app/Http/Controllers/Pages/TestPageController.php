<?php
namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Services\Grapes\Pages\GrapesPageService;
use Illuminate\Database\Eloquent\Casts\Json;

class TestPageController extends Controller
{
    public function index()
    {
        $page = GrapesPageService::getPageHtml('test-page');
        return view('test-page.index', compact('page'));
    }

    public function editor()
    {
        return view('test-page.editor');
    }
}