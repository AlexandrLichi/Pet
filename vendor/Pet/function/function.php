<?php
function search_file($path, $class = '')
{


    foreach (scandir($path) as $dir) {

        if ($dir == ".." || $dir == '.') continue;
        $dir = $path . "\\" . $dir;

        if (is_dir($dir)) {

            search_file($dir, $class);
        } else {

            if (is_readable($dir)) {

                $file = file($dir);

                foreach ($file as $row)
                    if (str_contains($row, "class " . $class))
                        require_once($dir);
            }
        }
    }
}
?>