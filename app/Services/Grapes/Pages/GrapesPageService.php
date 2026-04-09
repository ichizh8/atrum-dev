<?php

namespace App\Services\Grapes\Pages;

use App\Models\Grapes\Pages\GrapesPage;

class GrapesPageService
{
    public static function getProjectContent($pageId): ?GrapesPage
    {
        return GrapesPage::select('project', 'page_id')->where('page_id', $pageId)->first();
    }

    public static function getPageHtml($pageId): ?GrapesPage
    {
        return GrapesPage::select('html', 'page_id')->where('page_id', $pageId)->first();
    }

    public static function savePageContent($pageId, $project, $html): GrapesPage
    {
        $page = GrapesPage::where('page_id', $pageId)->first();
        if ($page) {
            $page->project = json_decode($project);
            $page->html = $html;
            $page->save();
            return $page;
        }
        $page = new GrapesPage([
            'page_id' => $pageId,
            'project' => json_decode($project),
            'html' => $html
        ]);
        $page->save();

        return $page;
    }
}