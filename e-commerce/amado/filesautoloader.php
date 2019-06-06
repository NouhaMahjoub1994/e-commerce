<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 14/03/2019
 * Time: 18:04
 */
function load($class){
    $ext='.php';
    $path=$class.$ext;
    echo $path;
    if(file_exists($path)){
        require $path;
    }else{
        $path='Models/'.$path;
        echo $path;

        if(file_exists($path)){
            require $path;
        }else{
            $path='../includes/'.$path.$ext;
            if (file_exists($path)){
                require $path;
            }
        }
    }

}
spl_autoload_register('load');