<?php

namespace Modules\Application\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Entities\PageTemplate;
class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    public function template()
    {
        return $this->belongsTo(PageTemplate::class);
    }
}
