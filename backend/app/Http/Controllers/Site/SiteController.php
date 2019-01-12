<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(){

        $title='AleTur';

        return view('site.home.index', array('title' => 'Title'));

    }
    public function promotions(){
        $title='Promoções';

        return view('site.promotions.promotions', array('title' => 'Title'));


    }
}
