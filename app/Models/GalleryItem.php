<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class GalleryItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'file_path',
    ];

    public function getFileUrlAttribute()
    {
        if (!$this->file_path) {
            return null;
        }
        if (Str::startsWith($this->file_path, 'http')) {
            return $this->file_path;
        }
        return asset('storage/' . $this->file_path);
    }
}
