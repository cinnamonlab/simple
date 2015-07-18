<?php

namespace App\Controller;
use Framework\Config;

class SampleController {
    function hello( ) {
        echo Config::get('app.sample');
    }
}