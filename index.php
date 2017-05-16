<?php

require_once('classes/Github.php');

$github = new Github();

$repos = $github->getUserRepos('symfony');