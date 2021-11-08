<?php

declare(strict_types=1);

namespace App\Services\Pages;


use App\Models\Page;
use App\Services\Pages\Contracts\PageQueries;
use SEOMeta;

final class SeoToolPageHandle
{
    private PageQueries $eloquentPageQueries;

    /**
     * SeoToolPageHandle constructor.
     *
     * @param  EloquentPageQueries  $eloquentPageQueries
     */
    public function __construct(EloquentPageQueries $eloquentPageQueries)
    {
        $this->eloquentPageQueries = $eloquentPageQueries;
    }


    public function setSeoByStaticPage(string $path): Page
    {
        $page = $this->eloquentPageQueries->getByPath($path);

        SEOMeta::setTitle($page->meta_title);
        SEOMeta::setDescription($page->meta_description);
        SEOMeta::addKeyword($page->meta_keywords);

        return $page;
    }

    public function setSeoByArray(array $params): void
    {
        SEOMeta::setTitle($params['title'] ?? '');
        SEOMeta::setDescription($params['description'] ?? '');
        SEOMeta::addKeyword($params['keywords'] ?? '');
    }
}
