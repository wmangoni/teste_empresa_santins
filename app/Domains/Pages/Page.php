<?php
namespace App\Domains\Pages;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Page extends Model
{
    use Notifiable;

    protected $fillable = [
        'slug', 'title', 'description', 'symbol', 'color_symbol'
    ];

}