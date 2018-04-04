<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $logoInt = rand( 1,14 );
        $logo = "images/logoAsset " . $logoInt . ".png";
        $data = [];

        $obj = new \stdClass;
        $obj->id = 1;
        $obj->logo = $logo;
        $obj->page_title = 'Trisha H White - Contact Info';

        $data['content'][] = $obj;
        return view('contact/index', $data);
    }
}
