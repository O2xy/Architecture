<?php

function dirExplorer(string $dir)
{
    foreach (new DirectoryIterator($dir) as $fileInfo) {
        if ($fileInfo->isDot()) continue;
        echo $dir . "\\" . $fileInfo->getFilename() . "<br>\n";
        if ($fileInfo->isDir()) {
            dirExplorer($dir . "\\" . $fileInfo->getFilename());
        }
    }
}

dirExplorer('.');