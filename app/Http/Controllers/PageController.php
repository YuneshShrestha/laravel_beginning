<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        $data = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa provident tempore natus exercitationem nobis totam doloribus, voluptates illum perferendis similique voluptatibus dicta neque molestias hic odit, commodi in dolorem labore? Yunesh";
        return view('frontend.about', compact("data"));
    }
    function service(){
        $data = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum earum molestiae quaerat dolorem recusandae animi sint labore maiores voluptate perferendis quia vel, velit est vitae incidunt, soluta iure fuga illum? Service";
        $color = 'red';
        return view('frontend.service', compact('data','color'));
    }
    function gallery()
    {
        $color1 = 'yellow';
        $color2 = 'green';
        $color3 = 'red';
        $color4 = 'orange';
        $color5 = 'indigo';
        return view('frontend.gallery',compact('color1', 'color2', 'color3', 'color4', 'color5'));
    }

}
