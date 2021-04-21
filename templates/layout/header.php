<?php   
use ScssPhp\ScssPhp\Compiler;
use ScssPhp\ScssPhp\OutputStyle;
try {
    $scss = new Compiler();
    $scss->setImportPaths('styles/');
    $scss->setOutputStyle(OutputStyle::COMPRESSED); 
} catch (\Exception $e) {
    syslog(LOG_ERR, 'scssphp: Unable to compile content');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title ?></title>
        <style>
            <?php   echo $scss->compile('@import "global.scss";');?>
            <?php   echo $style;?>
        </style>
    </head>
    <body>
