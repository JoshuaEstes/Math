Math
====

General purpose math library for php that allows you to switch between various
math extension such as BC Math and GMP.

# Usage

```php
<?php

$math = new \Math\Math(new \Math\Extension\AutoExtension());

$result = $math->add(2, 2);
// $result == 4
```

# License

MIT
