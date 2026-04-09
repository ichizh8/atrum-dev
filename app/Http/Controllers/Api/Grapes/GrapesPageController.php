<?php

namespace App\Http\Controllers\Api\Grapes;

use App\Http\Controllers\Controller;
use App\Services\Grapes\Pages\GrapesPageService;
use Illuminate\Http\Request;

class GrapesPageController extends Controller
{
    public function getProjectContent(Request $request)
    {
        $pageId = $request->get('page_id');

        $page = GrapesPageService::getProjectContent($pageId);

        return response()->json($page);
    }

    public function savePageContent(Request $request) {
        $pageId = $request->get('page_id');
        $project = $request->get('project');
        $html = $request->get('html');

        $page = GrapesPageService::savePageContent($pageId, $project, $html);

        return response()->json($page);
    }
}