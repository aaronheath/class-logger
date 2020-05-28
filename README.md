# Class Logger

[![Build Status](https://travis-ci.org/aaronheath/class-logger.svg?branch=master)](https://travis-ci.org/aaronheath/class-logger)

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
[2020-05-27 02:55:10] testing.INFO: App\Support\Example :: something done
[2020-05-27 02:55:10] testing.INFO: App\Support\Example :: also with array of data {"aaa":"bbb"}
```

## Installation

This package is installed via [Composer](https://getcomposer.org/). 

Before installing, the repository must be added to the repositories section of the host projects composer.json.

```text
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/aaronheath/class-logger"
    }
],
```

To install, run the following command.

```bash
composer require aaronheath/class-logger
```
