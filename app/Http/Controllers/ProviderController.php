<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Services\ProviderService;
use Illuminate\Http\Request;

class ProviderController extends Controller
{

    public function __construct(private ProviderService $providerService)
    {}

    public function getAll(Request $request) {
        $param = $request->query('order');
        if ($param == SortingOptions::POPULAR) {
            $data = $this->providerService->getPopular();
        };

        return ['data' => $data, 'param' => $param];
    }
}

enum SortingOptions: string
{

    case POPULAR = "popular";
    case CHEAP = "cheap";
    case EXPENSIVE = "expensive";

}
