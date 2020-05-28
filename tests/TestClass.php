<?php

namespace Tests;

use Heath\ClassLogger\ClassLogger;

class TestClass
{
    use ClassLogger;

    public function defaultLog()
    {
       $this->log('This is a log');
    }

    public function defaultLogWithContext()
    {
        $this->log('This is a log with context', ['a' => 'b']);
    }

    public function emergencyLog()
    {
        $this->logEmergency('This is an emergency log');
    }

    public function emergencyLogWithContext()
    {
        $this->logEmergency('This is an emergency log with context', ['a' => 'b']);
    }

    public function alertLog()
    {
        $this->logAlert('This is an alert log');
    }

    public function alertLogWithContext()
    {
        $this->logAlert('This is an alert log with context', ['a' => 'b']);
    }

    public function criticalLog()
    {
        $this->logCritical('This is an critical log');
    }

    public function criticalLogWithContext()
    {
        $this->logCritical('This is an critical log with context', ['a' => 'b']);
    }

    public function errorLog()
    {
        $this->logError('This is an error log');
    }

    public function errorLogWithContext()
    {
        $this->logError('This is an error log with context', ['a' => 'b']);
    }

    public function warningLog()
    {
        $this->logWarning('This is an warning log');
    }

    public function warningLogWithContext()
    {
        $this->logWarning('This is an warning log with context', ['a' => 'b']);
    }

    public function noticeLog()
    {
        $this->logNotice('This is an notice log');
    }

    public function noticeLogWithContext()
    {
        $this->logNotice('This is an notice log with context', ['a' => 'b']);
    }

    public function infoLog()
    {
        $this->logInfo('This is an info log');
    }

    public function infoLogWithContext()
    {
        $this->logInfo('This is an info log with context', ['a' => 'b']);
    }

    public function debugLog()
    {
        $this->logDebug('This is an debug log');
    }

    public function debugLogWithContext()
    {
        $this->logDebug('This is an debug log with context', ['a' => 'b']);
    }

    public function customLogWithContext()
    {
        $this->customLog('alert', 'This is an custom log with context', ['a' => 'b']);
    }
}