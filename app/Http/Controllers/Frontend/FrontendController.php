<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * @var string
     */
    protected $_frontendPath='Frontend.';
    protected $pagePath= null;

    /**
     * FrontendController constructor.
     */
    public function __construct()
    {
        $this->data('title',$this->makeTitle('home'));
        $this->pagePath=$this->_frontendPath.'pages.';

    }
}
