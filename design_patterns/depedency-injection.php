<?php

interface Log {
    public function write($log);
}

class TextLogger implements Log {
    public function write($log) {
        echo $log;
    }
}

class DatabaseLogger implements Log {
    public function write($log) {
        echo $log;
    }
}

    class App {

        private $logger;
        public function __construct(Log $logger) {
            $this->logger = $logger;
        }

        public function run($log) {
            $this->logger->write($log);
        }
    }
$app = new App(new DatabaseLogger);
$app->run("Save to DatabaseLog");

$appText = new App(new TextLogger);
$appText->run("Save to TextLog");