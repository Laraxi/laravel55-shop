<?php
function test_helper() {
    return 'OK1111111111111111111111';
}


function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}