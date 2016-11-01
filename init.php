<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 17:26
 */

spl_autoload_register(function($class){
    $root = str_replace('designPattern', '', str_replace('\\', '/', __DIR__));
    $file = $root. str_replace('\\', '/', $class) . '.php';
    if(is_file($file)){
        require "$file";
    }
});

function println($content, $exit = false){
    static $_send_header = array();
    if (!$_send_header) {
        header("Content-Type:text/html;charset=utf-8");
    }
    if (is_bool($content)) {
        var_dump($content);
    } else {
        echo "<pre>";
        print_r($content);
        echo "</pre>";
    }
    if (!!$exit)
        exit;
}