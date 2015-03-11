Math
====

General purpose math library for php that allows you to switch between various
math extension such as BC Math and GMP.

# Features

* Support for GMP
* Support for BC Math
* Auto select based on server configuration

# Installation

## Composer

```bash
composer.phar require "joshuaestes/math:~0.1"
```

# Usage

```php
<?php

$math = new \Math\Math(new \Math\Extension\AutoExtension());

$result = $math->add(2, 2);
// $result == 4
```

# Extensions

This project currently supports only a few extensions.

## GMP Extension

Use the GNU Multiple Precision PHP extension.

## BC Math Extension

Uses the BC Math PHP extension.

## Auto Select Extension

This extension selects the best possible extension based on your current server
configuration.

# How to contribute?

See [CONTRIBUTING.md]

# Change log

See [CHANGELOG.md]

# License (MIT)

Copyright (c) 2015 Joshua Estes

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
of the Software, and to permit persons to whom the Software is furnished to do
so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
DEALINGS IN THE SOFTWARE.

[CONTRIBUTING.md]: https://github.com/JoshuaEstes/Math/blob/master/CONTRIBUTING.md
[CHANGELOG.md]: https://github.com/JoshuaEstes/Math/blob/master/CHANGELOG.md
