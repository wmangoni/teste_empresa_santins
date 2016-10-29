<?php
namespace App\Domains\Pages;

use Artesaos\Warehouse\AbstractCrudRepository;
use Illuminate\Support\Facades\DB;

class PageRepository extends AbstractCrudRepository
{
    protected $modelClass = Page::class;
    
}