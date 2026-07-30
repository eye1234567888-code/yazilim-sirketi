<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'technologies',
        'client',
        'category',
        'project_url',
        'is_completed'
    ];

    protected $casts = [
        'is_completed' => 'boolean'
    ];

    // technologies alanını her zaman array olarak döndür
    public function getTechnologiesAttribute($value)
    {
        if (is_null($value)) {
            return [];
        }

        // Eğer JSON ise decode et
        if (is_string($value) && str_starts_with($value, '[')) {
            return json_decode($value, true);
        }

        // Eğer virgülle ayrılmış string ise array'e çevir
        if (is_string($value) && str_contains($value, ',')) {
            return array_map('trim', explode(',', $value));
        }

        // Tek bir değer ise array yap
        if (is_string($value)) {
            return [$value];
        }

        return [];
    }

    // Veritabanına kaydederken array'i JSON'a çevir
    public function setTechnologiesAttribute($value)
    {
        if (is_array($value)) {
            $this->attributes['technologies'] = json_encode($value);
        } else {
            $this->attributes['technologies'] = $value;
        }
    }
}
