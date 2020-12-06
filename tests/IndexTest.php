<?php

use PHPUnit\Framework\TestCase;

require __DIR__."/../index.php";

class IndexTest extends TestCase
{
  public function testManipulatingString()
  {
    $this->assertEquals(strtoupper('foo'), 'FOO');
  }

  public function testSolution()
  {
    $result=solution();
    $this->assertEquals($result, "HELLO");
  }
}
