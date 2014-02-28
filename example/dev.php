<?php

require __DIR__.'/../vendor/autoload.php';

$process = Core\Process::getCurrent();

d((string) $process);
d($process->getGroups());
echo 'DONE';
