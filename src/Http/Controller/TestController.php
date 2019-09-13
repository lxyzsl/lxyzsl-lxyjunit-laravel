<?php
/**
 * Created by PhpStorm.
 * User: lxy
 * Date: 2019-09-01
 * Time: 14:07
 */
namespace Lxy\LxyjunitLaravel\Http\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function index()
    {
        return 'test/index';
    }
}
