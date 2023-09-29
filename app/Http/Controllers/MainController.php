<?php

namespace App\Http\Controllers;

use App\DesignPatterns\PatternFactory;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * @throws \Exception
     */
    public function __invoke(Request $request, string $url = 'property-container')
    {
        $patternDescription = PatternFactory::make()->handle($url);

        return view('main', compact('patternDescription'));
    }
}
