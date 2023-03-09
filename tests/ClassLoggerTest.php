<?php

namespace Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use TiMacDonald\Log\LogEntry;
use TiMacDonald\Log\LogFake;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class ClassLoggerTest extends Orchestra
{
    protected $testClass;

    public function setUp(): void
    {
        parent::setup();

        LogFake::bind();

        $this->testClass = $this->app->make(TestClass::class);
    }

    /**
     * @test
     * Debug is the default level defied by laravel.
     * https://github.com/laravel/framework/blob/7.x/src/Illuminate/Foundation/helpers.php#L528
     */
    public function can_log_to_default_level()
    {
        $this->testClass->defaultLog();

        Log::assertLogged(function(LogEntry $log) {
            return $log->level === 'debug'
                && Str::contains($log->message, 'Tests\TestClass :: This is a log');
        });
    }

    /**
     * @test
     * Debug is the default level defied by laravel.
     * https://github.com/laravel/framework/blob/7.x/src/Illuminate/Foundation/helpers.php#L528
     */
    public function can_log_to_default_level_with_context()
    {
        $this->testClass->defaultLogWithContext();

        Log::assertLogged(function(LogEntry $log) {
            if($log->level !== 'debug') {
                return false;
            }

            if(! Str::contains($log->message, 'Tests\TestClass :: This is a log with context')) {
                return false;
            }

            return $log->context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_emergency_level()
    {
        $this->testClass->emergencyLog();

        Log::assertLogged(function(LogEntry $log) {
            return $log->level === 'emergency'
                && Str::contains($log->message, 'Tests\TestClass :: This is an emergency log');
        });
    }

    /**
     * @test
     */
    public function can_log_to_emergency_level_with_context()
    {
        $this->testClass->emergencyLogWithContext();

        Log::assertLogged(function(LogEntry $log) {
            if($log->level !== 'emergency') {
                return false;
            }

            if(! Str::contains($log->message, 'Tests\TestClass :: This is an emergency log with context')) {
                return false;
            }

            return $log->context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_alert_level()
    {
        $this->testClass->alertLog();

        Log::assertLogged(function(LogEntry $log) {
            return $log->level === 'alert'
                && Str::contains($log->message, 'Tests\TestClass :: This is an alert log');
        });
    }

    /**
     * @test
     */
    public function can_log_to_alert_level_with_context()
    {
        $this->testClass->alertLogWithContext();

        Log::assertLogged(function(LogEntry $log) {
            if($log->level !== 'alert') {
                return false;
            }

            if(! Str::contains($log->message, 'Tests\TestClass :: This is an alert log with context')) {
                return false;
            }

            return $log->context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_critical_level()
    {
        $this->testClass->criticalLog();

        Log::assertLogged(function(LogEntry $log) {
            return $log->level === 'critical'
                && Str::contains($log->message, 'Tests\TestClass :: This is an critical log');
        });
    }

    /**
     * @test
     */
    public function can_log_to_critical_level_with_context()
    {
        $this->testClass->criticalLogWithContext();

        Log::assertLogged(function(LogEntry $log) {
            if($log->level !== 'critical') {
                return false;
            }

            if(! Str::contains($log->message, 'Tests\TestClass :: This is an critical log with context')) {
                return false;
            }

            return $log->context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_error_level()
    {
        $this->testClass->errorLog();

        Log::assertLogged(function(LogEntry $log) {
            return $log->level === 'error'
                && Str::contains($log->message, 'Tests\TestClass :: This is an error log');
        });
    }

    /**
     * @test
     */
    public function can_log_error_level_with_context()
    {
        $this->testClass->errorLogWithContext();

        Log::assertLogged(function(LogEntry $log) {
            if($log->level !== 'error') {
                return false;
            }

            if(! Str::contains($log->message, 'Tests\TestClass :: This is an error log with context')) {
                return false;
            }

            return $log->context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_warning_level()
    {
        $this->testClass->warningLog();

        Log::assertLogged(function(LogEntry $log) {
            return $log->level === 'warning'
                && Str::contains($log->message, 'Tests\TestClass :: This is an warning log');
        });
    }

    /**
     * @test
     */
    public function can_log_to_warning_level_with_context()
    {
        $this->testClass->warningLogWithContext();

        Log::assertLogged(function(LogEntry $log) {
            if($log->level !== 'warning') {
                return false;
            }

            if(! Str::contains($log->message, 'Tests\TestClass :: This is an warning log with context')) {
                return false;
            }

            return $log->context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_notice_level()
    {
        $this->testClass->noticeLog();

        Log::assertLogged(function(LogEntry $log) {
            return $log->level === 'notice'
                && Str::contains($log->message, 'Tests\TestClass :: This is an notice log');
        });
    }

    /**
     * @test
     */
    public function can_log_to_notice_level_with_context()
    {
        $this->testClass->noticeLogWithContext();

        Log::assertLogged(function(LogEntry $log) {
            if($log->level !== 'notice') {
                return false;
            }

            if(! Str::contains($log->message, 'Tests\TestClass :: This is an notice log with context')) {
                return false;
            }

            return $log->context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_info_level()
    {
        $this->testClass->infoLog();

        Log::assertLogged(function(LogEntry $log) {
            return $log->level === 'info'
                && Str::contains($log->message, 'Tests\TestClass :: This is an info log');
        });
    }

    /**
     * @test
     */
    public function can_log_to_info_level_with_context()
    {
        $this->testClass->infoLogWithContext();

        Log::assertLogged(function(LogEntry $log) {
            if($log->level !== 'info') {
                return false;
            }

            if(! Str::contains($log->message, 'Tests\TestClass :: This is an info log with context')) {
                return false;
            }

            return $log->context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_debug_level()
    {
        $this->testClass->debugLog();

        Log::assertLogged(function(LogEntry $log) {
            return $log->level === 'debug'
                && Str::contains($log->message, 'Tests\TestClass :: This is an debug log');
        });
    }

    /**
     * @test
     */
    public function can_log_to_debug_level_with_context()
    {
        $this->testClass->debugLogWithContext();

        Log::assertLogged(function(LogEntry $log) {
            if($log->level !== 'debug') {
                return false;
            }

            if(! Str::contains($log->message, 'Tests\TestClass :: This is an debug log with context')) {
                return false;
            }

            return $log->context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_custom_level_with_context()
    {
        $this->testClass->customLogWithContext();

        Log::assertLogged(function(LogEntry $log) {
            if($log->level !== 'alert') {
                return false;
            }

            if(! Str::contains($log->message, 'Tests\TestClass :: This is an custom log with context')) {
                return false;
            }

            return $log->context == ['a' => 'b'];
        });
    }
}
