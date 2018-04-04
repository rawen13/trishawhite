<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('pages/index');
    }

    public function home()
    {
        $logoInt = rand( 1,14 );
        $logo = "images/logoAsset " . $logoInt . ".png";
        $data = [];

        $obj = new \stdClass;
        $obj->id = 1;
        $obj->logo = $logo;
        $obj->page_title = 'Trisha H White';
        $obj->paragraph_1_title = 'Objective';
        $obj->paragraph_1_content_type = 'text';
        $obj->paragraph_1_content = 'Obtain a position as a primarily back end PHP software engineer creating functional, modern web applications that are well crafted and easy to maintain.';
        $obj->paragraph_2_title = 'Highlights';
        $obj->paragraph_2_content_type = 'list';
        $obj->paragraph_2_content = [
            'Works daily and is well versed in PHP, MySQL, HTML5, CSS3, and Javascript including Node.js, SCSS, and jQuery.',
        'Over 8 years experience in PHP, MySQL, HTML, CSS and Javascript.',
        'Builds and manages web applications following the MVC model in tools like Laravel.',
        'Worked with and managed Apache servers, Windows Server 2012 instances, Ubuntu installations, Code Igniter Applications, ExpressionEngine CMS platforms, WordPress CMS sites, Amazon Web Services (AWS) instances, and Craft CMS sites.',
        'Strong work ethic with a focus on exceeding expectations, meeting deadlines and putting the customer first.',
       'Proven ability to overcome significant challenges and obstacles to achieve successful outcomes.'
        ];

        $data['content'][] = $obj;

        return view('pages/home',$data);
    }
}
