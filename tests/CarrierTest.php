<?php
  namespace Shipcloud;

  // require_once 'PHPUnit/Autoload.php';
  use PHPUnit\Framework\TestCase;

  final class CarrierTest extends TestCase {
    public function testUrls()
    {
        $carrier = new Carrier();
        $this->assertSame($carrier->instanceUrl(), '/v1/carriers/');
    }
  }
?>
