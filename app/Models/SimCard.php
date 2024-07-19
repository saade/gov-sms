<?php

namespace App\Models;

use App\Enums\SimStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use function App\Support\mask;

class SimCard extends Model
{
    use HasFactory;
    use HasUlids;
    use SoftDeletes;

    protected $fillable = [
        'phone_number',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'status' => SimStatus::class,
        ];
    }

    public function phoneNumberFormatted(): Attribute
    {
        return Attribute::make(
            get: fn ($value, array $attributes): string => mask('+## (##) #####-####', data_get($attributes, 'phone_number')),
        );
    }
}
