<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ue extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $fillable = [
        self::name,
        self::time,
        self::time_end,
        self::location,
        self::description,
    ];

    public const id = 'id';
    public const name = 'name';
    public const time = 'time';
    public const time_end = 'time_end';
    public const location = 'location';
    public const description = 'description';
    public const created_at = 'created_at';
    public const updated_at = 'updated_at';
    public const deleted_at = 'deleted_at';

    public static function validate(array $attributes = []): array
    {
        $result = [];

        foreach ($attributes as $attribute) {
            $result[$attribute] = match ($attribute) {
                self::name,
                self::location,
                self::description => ['string', 'max:255'],
                self::time,
                self::time_end => ['iso_date'],
                default => [],
            };
        }

        return $result;
    }
}
