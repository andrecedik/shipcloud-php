<?php

namespace Shipcloud;

class Shipcloud {
  // @var string The shipcloud API key to be used for requests.
  public static $apiKey;

  // @var string The base URL of the shipcloud API to be used for requests.
  public static $apiBase = 'https://api.shipcloud.io';

  // @var string|null The version of the shipcloud API to be used for requests.
  public static $apiVersion = null;

  /**
   * @return string The API key used for requests.
   */
  public static function getApiKey()
  {
    return self::$apiKey;
  }

  /**
   * Setting the shipcloud API key to be used for requests.
   *
   * @param string $apiKey
   */
  public static function setApiKey($apiKey)
  {
      self::$apiKey = $apiKey;
  }

  /**
   * @return string The API version used for requests. null if we're using the
   *   latest version.
   */
  public static function getApiVersion()
  {
    return self::$apiVersion;
  }

  /**
   * @param string Setting the API version to be used for requests.
   */
  public static function setApiVersion($apiVersion)
  {
    self::$apiVersion = $apiVersion;
  }
}
?>
