<?php

namespace Utils\Rector\Tests\CustomRector\Fixture;

$bSomeVar = true;

?>
-----
<?php

namespace Utils\Rector\Tests\CustomRector\Fixture;

$someVar = true;

?>
