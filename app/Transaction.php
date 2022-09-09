<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\EloquentFilters\TransactionFilter;
use Abdrzakoxa\EloquentFilter\Traits\Filterable;

class Transaction extends Model
{
    use Filterable;

    protected $filters = [
        TransactionFilter::class,
    ];
}
