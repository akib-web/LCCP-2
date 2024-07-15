<?php

class FileStorage implements Storage
{
    public function saveData(string $filename, array $data)
    {
        file_put_contents($this->getFilePath($filename), serialize($data));
    }
    public function loadData(string $filename)
    {
        if (file_exists($this->getFilePath($filename))) {
            $data = unserialize(file_get_contents($this->getFilePath($filename)));
        }
        if ( !isset($data) ) {
            return [];
        }

        return $data;
    }
    public function getFilePath(string $filename)
    {
        return "data/" . $filename . ".txt";
    }
}