<?php

interface AdapterInterface {
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
}