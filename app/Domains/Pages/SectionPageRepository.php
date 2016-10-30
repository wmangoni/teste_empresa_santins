<?php
namespace App\Domains\Pages;

use Artesaos\Warehouse\AbstractCrudRepository;
use Illuminate\Support\Facades\DB;

class SectionPageRepository extends AbstractCrudRepository
{
    protected $modelClass = SectionPage::class;

    public function getActives()
    {
        return $this->newQuery()->where('active', '=', true)->get();
    }

    /**
     * @param $slug
     */
    public function getPage($slug)
    {
        return $this->newQuery()
            ->where('slug', '=', str_slug($slug))
            ->where('active', '=', true)
            ->first();
    }

    public function activeThePage($id)
    {
        return $this->newQuery()
            ->where('id', '=', $id)
            ->update(['active' => true]);
    }
    public function inactiveThePage($id)
    {
        return $this->newQuery()
            ->where('id', '=', $id)
            ->update(['active' => false]);
    }
}