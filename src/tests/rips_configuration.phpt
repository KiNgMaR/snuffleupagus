--TEST--
Shipped configuration (rips)
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/../../config/rips.rules
--FILE--
<?php 
system("echo 0");
?>
--EXPECTF--
0
