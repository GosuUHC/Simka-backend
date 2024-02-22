<?php

namespace App\Services;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Collection;

class ProviderService
{
    public function getAll(): Collection
    {
        return Provider::all();
    }

    public function getPopular(): Collection
    {
        return Provider::all()->orderBy('rating_overall');
    }

    public function getCheap(): Collection
    {
        return Provider::all()->orderBy('min_price');
    }

    public function getExpensive(): Collection
    {
        return Provider::all()->orderBy('min_price', 'desc');
    }
}
