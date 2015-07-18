<?php

namespace App\Controller;
use Framework\Config;
use Framework\Response;

class SampleController {
    function hello( ) {
        return (new Response())
            ->setContent(Config::get('app.sample'))
            ->setContentType('text/plain')
            ->setCode(200);
    }
}