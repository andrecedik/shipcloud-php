<?php
  namespace Shipcloud;

  /**
   * Class Carrier
   *
   * @property string $id
   * @property string $name
   * @property string $display_name
   * @property string $services
   * @property string $package_types
   *
   * @package Shipcloud
   */
  class Carrier extends ApiResource {
    use ApiOperations\Retrieve;

    const OBJECT_NAME = "carrier";

    /**
     * @return string The endpoints URL for a given class.
     */
    public static function endpointUrl() {
      return self::baseUrl()."/carriers";
    }

    public function instanceUrl($id = null) {
        // if ($this['id'] === null) {
        //     return '/v1/carriers';
        // } else {
        //     return parent::instanceUrl();
        // }
        return parent::instanceUrl($id);
    }
  }
?>
