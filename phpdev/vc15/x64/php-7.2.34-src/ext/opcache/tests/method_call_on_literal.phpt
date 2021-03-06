--TEST--
Literal compaction should take method calls on literals into account
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php

try {
    (42)->foo();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

?>
--EXPECT--
Call to a member function foo() on integer
