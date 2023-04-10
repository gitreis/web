<?php

namespace webII;

  spl_autoload_register(function($className) {
    $file = str_replace('src','\lib', strtolower($className));
    $file = str_replace('\\',DIRECTORY_SEPARATOR, $file.".class.php");
    $path = __DIR__;
    $path = "src/lib/".strtolower($className).".class.php";
      if (file_exists($file)) {
          include_once $file;
      }
  });
