<?php
namespace Foo\Bar\subnamespace;

const FOO = 1;
function foo() { echo __CLASS__ . __FUNCTION__ . "<br>"; }
class foo
{
    static function staticmethod() { echo __CLASS__ . __FUNCTION__ . "<br>"; }
}

?>