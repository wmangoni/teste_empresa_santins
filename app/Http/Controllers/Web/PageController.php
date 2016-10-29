<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Domains\Pages\PageRepository;

class PageController extends Controller
{
    private $pageRepo;

    public function __construct(PageRepository $pageRepo)
    {
        $this->pageRepo = $pageRepo;
    }

    public function show($slug = 'home')
    {
        $page = $this->pageRepo->getPage($slug);
        return (count($page)) ? View('web.page_generated')->with('page', $page) : View('errors.204');
    }
}
