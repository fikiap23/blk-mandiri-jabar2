<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Artikel extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];
    protected $with = ['kategori'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['cari'] ?? false, function ($query, $cari) {
            return $query->where('judul', 'like', '%' . $cari . '%')
                ->orWhere('body', 'like', '%' . $cari . '%');
        });

        $query->when($filters['kategori'] ?? false, function ($query, $kategori) {
            return $query->whereHas('kategori', function ($query) use ($kategori) {
                $query->where('slug', $kategori);
            });
        });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
