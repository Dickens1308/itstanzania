<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
    public function index(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('pages.index');
    }

    public function contact(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('pages.contact');
    }

    public function service(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('pages.services');
    }

    public function about(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('pages.about');
    }

    public function news(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('pages.news');
    }
}
