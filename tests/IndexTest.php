<?php

use PHPUnit\Framework\TestCase;

require __DIR__."/../src/index.php";

class IndexTest extends TestCase
{
  public function testManipulatingString()
  {
    $this->assertEquals(strtoupper('foo'), 'FOO');
  }

  public function testSolution0()
  {
    $input="madam";
    $result=solution($input);

    $this->assertEquals($result, true);
  }

  public function testSolution1()
  {
    $input="random string";
    $result=solution($input);
    $this->assertEquals($result, false);
  }

  public function testSolution2()
  {
    $input="wassamassaw";
    $result=solution($input);
    $this->assertEquals($result, true);
  }

  public function testSolution3()
  {
    $input="satanoscillatemymetallicsonatas";
    $result=solution($input);
    $this->assertEquals($result, true);
  }

  public function testSolution4()
  {
    $input="in girum imus nocte et consumimur igni";
    $result=solution($input);
    $this->assertEquals($result, true);
  }

  public function testSolution5()
  {
    $input="No lemoned, no melon";
    $result=solution($input);
    $this->assertEquals($result, false);
  }
}
