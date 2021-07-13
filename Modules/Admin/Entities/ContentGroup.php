<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContentGroup extends Model
{
    use HasFactory;

    protected $table = 'content_groups';

    public $timestamps = false;

    protected $fillable = ['name'];

    public function templates()
    {
        return $this->belongsToMany(PageTemplate::class);
    }
}
