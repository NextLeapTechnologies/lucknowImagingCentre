<?php

if (!function_exists('setActiveTab')) {
    function setActiveTab($routeName)
    {
        return request()->routeIs($routeName) ? 'active' : '';
    }
}
