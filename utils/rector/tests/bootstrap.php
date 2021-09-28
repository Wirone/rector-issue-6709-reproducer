<?php

declare(strict_types=1);

use Rector\Core\Stubs\PHPStanStubLoader;

// Simulate Rector's test environment (https://github.com/rectorphp/rector-src/blob/main/tests/bootstrap.php)
require_once __DIR__ . '/../../../vendor/rector/rector/src/constants.php';
require_once __DIR__ . '/../../../vendor/rector/rector/preload.php';
require_once __DIR__ . '/../../../vendor/rector/rector/vendor/autoload.php';

// silent deprecations, since we test them
error_reporting(E_ALL ^ E_DEPRECATED);

// performance boost
gc_disable();

$phpStanStubLoader = new PHPStanStubLoader();
$phpStanStubLoader->loadStubs();
