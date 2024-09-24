# Class Logger

![Build](https://github.com/aaronheath/class-logger/workflows/Build/badge.svg)

## Introduction

This is a personal package which provides a simple logging for use within a class. 

## Methods

```php
$this->log(); // alias for $this->logDebug()
$this->logEmergency();
$this->logAlert();
$this->logCritical();
$this->logError();
$this->logWarning();
$this->logNotice();
$this->logInfo();
$this->logDebug();
```

## Example

```php
<?php

namespace App\Support;

use Heath\ClassLogger\ClassLogger;

class Example 
{
    use ClassLogger;

    public function doSomething()
    {
        ...
        $this->log('something done');
        $this->log('also with array of data', ['aaa' => 'bbb']);
        ...
    }
}
```

Outputs to log file:

```text
[2024-05-27 02:55:10] testing.DEBUG: App\Support\Example :: something done
[2024-05-27 02:55:10] testing.DEBUG: App\Support\Example :: also with array of data {"aaa":"bbb"}
```

## Installation

This package is installed via [Composer](https://getcomposer.org/). To install, run the following command.

### Laravel 11

```bash
composer require aaronheath/class-logger:^2.0
```

### Laravel 9 to 10

```bash
composer require aaronheath/class-logger:^1.2
```