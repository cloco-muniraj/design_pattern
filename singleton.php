<?php

class DatabaseConnection
{
    private static $instance = null;
    
    private $connection;
    
    public function __construct() //For singleton instance constructor should be private to prevent direct initialization from outside the class.
    {
        $this->connection = "Database connection established \n";
        echo "Creating the singleton instance \n";
    }
    
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }
    
    public function getConnection()
    {
        return $this->connection;
    }
}

//Usage 
$db1 = DatabaseConnection::getInstance();
echo $db1->getConnection();

$db2 = DatabaseConnection::getInstance();
echo $db2->getConnection();

$db3 = new DatabaseConnection();
echo $db3->getConnection();

$db4 = new DatabaseConnection();
echo $db4->getConnection();

echo $db3->getConnection();
if ($db1 === $db2){
    echo "db1 and db2 are the same instance \n";
}

if ($db3 === $db4) {
    echo "db3 and db4 are the same instance \n";
} else {
    echo "db3 and db4 are the different instance \n";
}


class Logger
{
    private static $instance = null;
    
    private $logFile;
    
    public function __construct()
    {
        $this->logFile = fopen("log.txt", "a");
        if ($this->logFile){
            echo "Logger instance created and log file opened.\n";
        }
    }
    
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Logger();
        }
        return self::$instance;
    }
    
    public function log($msg)
    {
        $timestamp = date('Y-m-d H:i:s');
        $formattedMsg = "[{$timestamp}] {$msg}\n";
        fwrite($this->logFile, $formattedMsg);
        echo "Logged Message: {$formattedMsg}\n";
    }
    
    public function __destruct()
    {
        if ($this->logFile){
            fclose($this->logFile);
            echo "Log file closed \n";
        }
    }
}

// With singleton
$logger1 = Logger::getInstance();
$logger1->log("This is first log message");

$logger2 = Logger::getInstance();
$logger2->log("This is the second log message");


// Without Singleton
$logger3 = new Logger();
$logger3->log('This is third message');

$logger4 = new Logger();
$logger4->log('This is fourth message');