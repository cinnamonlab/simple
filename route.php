<?php

use Framework\Router;

Router::action('GET', '/hello', function(){
    echo "hello";
});

