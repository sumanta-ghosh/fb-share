<?php
 
use Sumanta\FbShare\FbShare;
 
class FbShareTest extends PHPUnit_Framework_TestCase {
 
  public function testNachHasCheese()
  {
    $FbShare = new FbShare;
    $this->assertTrue($FbShare->hasCheese());
  }
 
}