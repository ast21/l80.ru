<?php

/*
|--------------------------------------------------------------------------
| Ship Helpers
|--------------------------------------------------------------------------
|
| Write only general helper functions here.
| Container specific helper functions should go into their own related Containers.
| All files under app/{section_name}/{container_name}/Helpers/ folder will be autoloaded by Apiato.
|
*/

if (!function_exists('stub_path')) {
    function stub_path($path = ''): string
    {
        $path = trim($path, "/ \t\n\r\0\x0B");
        return app()->basePath("app/Ship/Generators/CustomStubs/$path");
    }
}

if (!function_exists('two_rand')) {
    /**
     * @param $min
     * @param $max
     * @return int[]
     */
    function two_rand($min, $max): array
    {
        $random1 = mt_rand($min, $max);
        while (($random2 = mt_rand($min, $max)) == $random1) {
        }

        return [$random1, $random2];
    }
}
