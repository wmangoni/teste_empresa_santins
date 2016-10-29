<?php
namespace App\Domains\Pages;

use Artesaos\Warehouse\AbstractCrudRepository;
use Illuminate\Support\Facades\DB;

class PageRepository extends AbstractCrudRepository
{
    protected $modelClass = Page::class;

    public function getActives(){
        return $this->newQuery()->where('active', '=', true)->get();
    }

    /**
     * @param $slug
     */
    public function getPage($slug){
        return $this->newQuery()->where('slug', '=', str_slug($slug))->first();
    }
}