<?php

namespace Modules\Admin\Entities;

use Modules\Application\Entities\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageTemplate extends Model
{
    use HasFactory;

    protected $table = 'pages_templates';

    public function pages()
    {
        return $this->hasMany(Page::class);
    }
}
