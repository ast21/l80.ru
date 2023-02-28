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
