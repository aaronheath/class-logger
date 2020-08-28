<?php

namespace Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use TiMacDonald\Log\LogFake;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class ClassLoggerTest extends Orchestra
{
    protected $testClass;

    public function setUp(): void
    {
        parent::setup();

        Log::swap(new LogFake);

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

        Log::assertLogged('debug', function($message, $context) {
            return Str::contains($message, 'Tests\TestClass :: This is a log');
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

        Log::assertLogged('debug', function($message, $context) {
            if(! Str::contains($message, 'Tests\TestClass :: This is a log with context')) {
                return false;
            }

            return $context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_emergency_level()
    {
        $this->testClass->emergencyLog();

        Log::assertLogged('emergency', function($message, $context) {
            return Str::contains($message, 'Tests\TestClass :: This is an emergency log');
        });
    }

    /**
     * @test
     */
    public function can_log_to_emergency_level_with_context()
    {
        $this->testClass->emergencyLogWithContext();

        Log::assertLogged('emergency', function($message, $context) {
            if(! Str::contains($message, 'Tests\TestClass :: This is an emergency log with context')) {
                return false;
            }

            return $context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_alert_level()
    {
        $this->testClass->alertLog();

        Log::assertLogged('alert', function($message, $context) {
            return Str::contains($message, 'Tests\TestClass :: This is an alert log');
        });
    }

    /**
     * @test
     */
    public function can_log_to_alert_level_with_context()
    {
        $this->testClass->alertLogWithContext();

        Log::assertLogged('alert', function($message, $context) {
            if(! Str::contains($message, 'Tests\TestClass :: This is an alert log with context')) {
                return false;
            }

            return $context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_crtiical_level()
    {
        $this->testClass->criticalLog();

        Log::assertLogged('critical', function($message, $context) {
            return Str::contains($message, 'Tests\TestClass :: This is an critical log');
        });
    }

    /**
     * @test
     */
    public function can_log_to_critical_level_with_context()
    {
        $this->testClass->criticalLogWithContext();

        Log::assertLogged('critical', function($message, $context) {
            if(! Str::contains($message, 'Tests\TestClass :: This is an critical log with context')) {
                return false;
            }

            return $context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_error_level()
    {
        $this->testClass->errorLog();

        Log::assertLogged('error', function($message, $context) {
            return Str::contains($message, 'Tests\TestClass :: This is an error log');
        });
    }

    /**
     * @test
     */
    public function can_log_error_level_with_context()
    {
        $this->testClass->errorLogWithContext();

        Log::assertLogged('error', function($message, $context) {
            if(! Str::contains($message, 'Tests\TestClass :: This is an error log with context')) {
                return false;
            }

            return $context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_warning_level()
    {
        $this->testClass->warningLog();

        Log::assertLogged('warning', function($message, $context) {
            return Str::contains($message, 'Tests\TestClass :: This is an warning log');
        });
    }

    /**
     * @test
     */
    public function can_log_to_warning_level_with_context()
    {
        $this->testClass->warningLogWithContext();

        Log::assertLogged('warning', function($message, $context) {
            if(! Str::contains($message, 'Tests\TestClass :: This is an warning log with context')) {
                return false;
            }

            return $context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_notice_level()
    {
        $this->testClass->noticeLog();

        Log::assertLogged('notice', function($message, $context) {
            return Str::contains($message, 'Tests\TestClass :: This is an notice log');
        });
    }

    /**
     * @test
     */
    public function can_log_to_notice_level_with_context()
    {
        $this->testClass->noticeLogWithContext();

        Log::assertLogged('notice', function($message, $context) {
            if(! Str::contains($message, 'Tests\TestClass :: This is an notice log with context')) {
                return false;
            }

            return $context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_info_level()
    {
        $this->testClass->infoLog();

        Log::assertLogged('info', function($message, $context) {
            return Str::contains($message, 'Tests\TestClass :: This is an info log');
        });
    }

    /**
     * @test
     */
    public function can_log_to_info_level_with_context()
    {
        $this->testClass->infoLogWithContext();

        Log::assertLogged('info', function($message, $context) {
            if(! Str::contains($message, 'Tests\TestClass :: This is an info log with context')) {
                return false;
            }

            return $context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_debug_level()
    {
        $this->testClass->debugLog();

        Log::assertLogged('debug', function($message, $context) {
            return Str::contains($message, 'Tests\TestClass :: This is an debug log');
        });
    }

    /**
     * @test
     */
    public function can_log_to_debug_level_with_context()
    {
        $this->testClass->debugLogWithContext();

        Log::assertLogged('debug', function($message, $context) {
            if(! Str::contains($message, 'Tests\TestClass :: This is an debug log with context')) {
                return false;
            }

            return $context == ['a' => 'b'];
        });
    }

    /**
     * @test
     */
    public function can_log_to_custom_level_with_context()
    {
        $this->testClass->customLogWithContext();

        Log::assertLogged('alert', function($message, $context) {
            if(! Str::contains($message, 'Tests\TestClass :: This is an custom log with context')) {
                return false;
            }

            return $context == ['a' => 'b'];
        });
    }
}
