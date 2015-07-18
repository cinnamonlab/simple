<?php

use Framework\Router;

Router::action('GET', '/welcome', function(){
    echo "welcome";
});

Router::action('GET', '/hello', 'SampleController@hello');
