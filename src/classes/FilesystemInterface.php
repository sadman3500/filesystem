<?php

interface FilesystemInterface {
    public function read($path);
    public function write($path, $content);
    public function update($path, $content);
    public function put($path, $content);
    public function get($path);
    public function has($path);
    public function touch($path);
    public function delete($path);
    public function mkdir($path);
    public function rmdir($path);
    public function copy($from, $to);
    public function move($from, $to);
    public function ls($path);
    public function rename($from, $to);
    public function chmod($path);
    public function pathinfo($path);
    public function dirname($path);
    public function basename($path);
    public function extension($path);
    public function filename($path);
    public function size($path);
    public function type($path);
}