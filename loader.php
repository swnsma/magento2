<?php
$operation = $argv[1];
$command = '';
switch ($operation)
{
    case 'pu': //pull update
        $command = 'git pull && bin/magento cache:flush --all && bin/magento setup:upgrade';
        break;
}
exec($command);