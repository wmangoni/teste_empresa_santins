<?php
namespace App\Domains\Pages;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class SectionPage extends Model
{
    use Notifiable;

    protected $fillable = [
        'description', 'order', 'box_color', 'created_at', 'updated_at'
    ];

    public function page()
    {
        return $this->belongsTo('App\Domains\Pages\Page');
    }

}