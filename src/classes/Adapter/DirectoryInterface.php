<?php

interface DirectoryInterface {
    public function mkdir();
    public function ls();
    public function isDir();
    public function rmdir();
}