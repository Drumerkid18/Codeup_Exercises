<?php

function logMessage($logInfo)
{
	date_default_timezone_set('America/Dallas');
	$stringToWrite = date('Y-m-d H:i:s') . ' ' . $logInfo;
    $filename = 'log-' . date('Y-m-d') . '.log';
	$handle = fopen($filename, 'a');
	    fwrite($handle, PHP_EOL . $stringToWrite);
	fclose($handle);

}

function logInfo($message)
{
	$logInfo = "[INFO] " . $message;
	logMessage($logInfo);
}

function logError($message)
{
	$logInfo = "[ERROR] " . $message;
	logMessage($logInfo);
}

logInfo("This is an info message.");
logError("This is an info message.");
