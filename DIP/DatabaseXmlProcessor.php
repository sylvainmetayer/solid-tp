<?php

namespace DIP;

class DatabaseXmlProcessor extends XmlProcessor {

    private $connexionString;

    public function __construct($filename, $connexionString)
    {
        parent::__construct($filename);
        $this->connexionString = $connexionString;
    }
}