<?php
spl_autoload_register('autoLoader');

/**
 * Class autoloader.
 *
 * @param string $className   The class name.
 */

function autoLoader($className)
{
    $file      = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $explode   = explode(DIRECTORY_SEPARATOR, $file);
    $isModel   = $explode[0] === 'Model';
    $main      = strtolower($explode[0]);
    $category  = strtolower($explode[1]) ? strtolower($explode[1]) : null;
    $name      = '';
    
    if(strtolower($explode[2]))
        foreach(array_slice($explode, 2) as $subName)
            $name .= strtolower($subName) . '.';

    $name      = rtrim($name, '.');
    $extension = $isModel ? 'm.php' : 'c.php';
    $path      = "$main/$category/$category.$name.$extension";

    if(file_exists(__DIR__ . '/' . $path))
        require($path);
}
?>