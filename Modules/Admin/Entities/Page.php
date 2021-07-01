<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    public function template()
    {
        return $this->belongsTo(PageTemplate::class);
    }
}
