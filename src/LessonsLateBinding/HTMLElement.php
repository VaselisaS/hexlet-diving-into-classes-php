<?php


namespace App\LessonsLateBinding;


class HTMLElement
{
    private $body;

    public function setTextContent($body)
    {
        $this->body = $body;
    }

    public function __toString()
    {
        $params = static::$params;
        $result = "<{$params['name']}>";
        $result .= isset($this->body) ? $this->body : "";
        $result .= $params['pair'] ? "</{$params['name']}>" : "";
        return $result;
    }
}
