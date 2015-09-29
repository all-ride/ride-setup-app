<?php

if (!file_exists('application')) {
    mkdir('application');
}

if (!file_exists('application/config')) {
    mkdir('application/config');
}

if (!file_exists('application/config/parameters.php') && file_exists('vendor/ride/app/src/parameters.php')) {
    copy('vendor/ride/app/src/parameters.php', 'application/config/parameters.php');
}

if (!file_exists('application/src')) {
    mkdir('application/src');
}

if (!file_exists('application/src/bootstrap.php') && file_exists('vendor/ride/app/src/bootstrap.php')) {
    copy('vendor/ride/app/src/bootstrap.php', 'application/src/bootstrap.php');
}

if (!file_exists('application/data')) {
    mkdir('application/data');
}

if (!file_exists('application/data/log')) {
    mkdir('application/data/log');
}