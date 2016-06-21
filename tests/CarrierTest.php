<?php
  namespace Shipcloud;

  // require_once 'PHPUnit/Autoload.php';
  use PHPUnit\Framework\TestCase;

  class CarrierTest extends TestCase {
    public function testUrls()
    {
        $this->assertSame(Carrier::classUrl(), '/v1/carriers');
        // $charge = new Charge('abcd/efgh');
        // $this->assertSame($charge->instanceUrl(), '/v1/charges/abcd%2Fefgh');
    }
  }
?>
