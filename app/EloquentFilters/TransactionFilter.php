<?php

namespace App\EloquentFilters;

use Illuminate\Database\Eloquent\Builder;

class TransactionFilter
{
    /**
     * Apply the filter after validation passes & sanitize
     * @param string $value
     * @param  Builder  $builder
     */
    public function handle(string $value, Builder $builder): void
    {
        $builder->where('name', $value);
    }

    
}