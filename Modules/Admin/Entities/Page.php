<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    public $timestamps = false;

    protected $fillable = [
        'title', 'template_id', 'slug', 'content',
        'seo_title', 'seo_description', 'seo_keywords', 'seo_noindex', 'seo_nofollow'
    ];


    public function setSlugAttribute($value)
    {
        //remove last "/" char if exist
        if(substr($value,-1) === '/'){
            $this->attributes['slug'] = substr($value, 0, -1);
        }
    }

    public function template()
    {
        return $this->belongsTo(PageTemplate::class);
    }
}
