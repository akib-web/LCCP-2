<?php

interface Storage
{
    public function saveData(string $filename, array $data);

    public function loadData(string $filname);

    public function getFilePath(string $filename);
}