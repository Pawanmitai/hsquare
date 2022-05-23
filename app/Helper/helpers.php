<?php
use Illuminate\Support\Facades\Request;

if (! function_exists('userAsset')) {
    /**
     * Get the path to the application folder.
     *
     * @param  string  $assetUrl
     * @return string
     */
    function userAsset(string $assetUrl): string
    {
        return asset('userAssets/' . $assetUrl);
    }
}

if (! function_exists('userView')) {
    /**
     * Get the path to the application folder.
     *
     * @param  string  $path 
     * @param  array   $data
     * @return string 
     */
    function userView(string $path, array $data = [])
    {
        return view('user.' . $path, $data);
    }
}

if (! function_exists('url_helper')) {
    /**
     * Get the path to the application folder.
     *
     * @param  string  $path
     * @return string
     */
    function url_helper(string $path)
    {
        return url(Request::segment(1) . '/' . $path);
    }
}