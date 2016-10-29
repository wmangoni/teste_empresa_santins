<?php
namespace App\Domains\Pages;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'slug', 'title', 'description', 'symbol', 'color_symbol', 'created_at', 'updated_at'
    ];
    protected $dates = ['deleted_at'];

}