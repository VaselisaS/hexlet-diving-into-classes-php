<?php

namespace App\LessonsException;

use App\LessonsException\Exceptions\NotExistsException;
use App\LessonsException\Exceptions\NotReadableException;

class File
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function read()
    {
        if (!file_exists($this->path)) {
            throw new NotExistsException();
        }
        if (!is_readable($this->path)) {
            throw new NotReadableException();
        }
        return file_get_contents($this->path);
    }
}
