<?php
  namespace Shipcloud;

  class Carrier {
    /**
     * @return string The endpoints URL for a given class.
     */
    public static function classUrl() {
      return "/v1/carriers";
    }
  }
?>
