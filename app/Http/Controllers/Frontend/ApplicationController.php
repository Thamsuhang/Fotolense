<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends FrontendController
{



    public function index()
    {
        $this->data('title',$this-> makeTitle('home'));
        return view($this->pagePath. 'home.home',$this->data);
    }
    public function about()
    {
        $this->data('title',$this->makeTitle('about'));
        return view($this->pagePath. 'about.about',$this->data);
    }
    public function  ourServices()
    {
        $this->data('title',$this->makeTitle('Services'));
        return view($this->pagePath.'services.ourServices',$this->data);

    }
    public function  Contact()
    {
        $this->data('title',$this->makeTitle('Contact'));
        return view($this->pagePath.'contact.contact',$this->data);

    }
}
