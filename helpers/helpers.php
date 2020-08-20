<?php
if (!function_exists('getCategories')) {
    function getCategories() {
        $categories= \App\Models\Categories::with('news')->get();
        //dd($categories);
        return ($categories);
    }
}
