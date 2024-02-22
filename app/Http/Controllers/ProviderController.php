<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function getAll() {
        $providers = Provider::all();
        return $providers;
    }
}
