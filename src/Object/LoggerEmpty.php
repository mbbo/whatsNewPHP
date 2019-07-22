<?php


namespace App\Object;


use App\Definition\Logger;

class LoggerEmpty
{
    private $logger;

    public function getLogger(): Logger {
        return $this->logger;
    }

    public function setLogger(Logger $logger) {
        $this->logger = $logger;
    }
}