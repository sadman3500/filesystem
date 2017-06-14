<?php

class FileSystem implements FilesystemInterface{
    
    private $adapter;
    
    public function __construct(FilesystemAdapter $adapter) {
        $this->adapter = $adapter;
    }
    
}