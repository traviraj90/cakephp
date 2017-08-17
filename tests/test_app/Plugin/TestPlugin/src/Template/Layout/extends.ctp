<?php
$this->extend('TestPlugin./Layout/base');
echo "test plugin extends layout\n";
echo $this->fetch('content');
