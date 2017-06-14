<?php

interface FileInterface {
    public function open();
    public function close();
    public function read();
    public function write();
    public function update();
    public function copy();
    public function move();
    public function delete();
    public function grab();
    public function touch();
}