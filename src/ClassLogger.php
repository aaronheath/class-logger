<?php

namespace Heath\ClassLogger;

trait ClassLogger
{
    public function log($message, $context = [])
    {
        $this->logDebug($message, $context);
    }

    public function logEmergency($message, $context = [])
    {
        $this->customLog('emergency', $message, $context);
    }

    public function logAlert($message, $context = [])
    {
        $this->customLog('alert', $message, $context);
    }

    public function logCritical($message, $context = [])
    {
        $this->customLog('critical', $message, $context);
    }

    public function logError($message, $context = [])
    {
        $this->customLog('error', $message, $context);
    }

    public function logWarning($message, $context = [])
    {
        $this->customLog('warning', $message, $context);
    }

    public function logNotice($message, $context = [])
    {
        $this->customLog('notice', $message, $context);
    }

    public function logInfo($message, $context = [])
    {
        $this->customLog('info', $message, $context);
    }

    public function logDebug($message, $context = [])
    {
        $this->customLog('debug', $message, $context);
    }

    public function customLog($level, $message, $context = [])
    {
        logger()->$level(
            sprintf('%s :: %s', get_class($this), $message),
            $context
        );
    }
}