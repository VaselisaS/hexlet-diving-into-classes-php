<?php


namespace App;


class HTMLPairElement extends HTMLElement
{
    private $body;
    protected $tag = 'p';

    public function __toString()
    {
        return "<$this->tag" . "{$this->stringifyAttributes()}>" . $this->getTextContent() . "</$this->tag>";
    }

    public function getTextContent()
    {
        return $this->body;
    }

    public function setTextContent(string $body)
    {
        $this->body = $body;
    }
}
