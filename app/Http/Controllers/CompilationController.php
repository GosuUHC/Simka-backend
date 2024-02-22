<?php

namespace App\Http\Controllers;

use App\Models\Compilation;
use Illuminate\Http\Request;

class CompilationController extends Controller
{
    public function getAll() {
        return ['data' => Compilation::all()];
    }
}
