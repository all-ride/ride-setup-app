<?php

if (!file_exists('application')) {
    mkdir('application');
}

if (!file_exists('application/log')) {
    mkdir('application/log');
}

if (!file_exists('application/config')) {
    mkdir('application/config');
}

if (!file_exists('application/config/parameters.php') && file_exists('vendor/pallo/app/src/parameter.php')) {
    copy('vendor/pallo/app/src/parameters.php', 'application/config/parameters.php');
}