<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    public function index(){

        $title ='Painel AleTur';

        return view('panel.home.index', array('title' => 'Title'));
    }
}
