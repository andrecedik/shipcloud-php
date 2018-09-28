<?php
  namespace Shipcloud;

  class ApiResource
  {
      public function instanceUrl($id)
      {
          echo "\nApiResource::instanceUrl";
          echo "\nid: ".$id;

          // return static::resourceUrl($this['id']);
          return static::resourceUrl($id);
      }

      /**
       * @return string The base URL for the given class.
       */
      public static function baseUrl()
      {
          return Shipcloud::$apiBase;
      }

      /**
       * @return string The endpoint URL for the given class.
       */
      public static function classUrl()
      {
          echo "\nApiResource::classUrl";
          // Replace dots with slashes for namespaced resources, e.g. if the object's name is
          // "foo.bar", then its URL will be "/v1/foo/bars".
          $base = str_replace('.', '/', static::OBJECT_NAME);
          return "/v1/${base}s";
      }

      /**
       * @return string The instance endpoint URL for the given class.
       */
      public static function resourceUrl($id = null)
      {
          echo "\nApiResource::resourceUrl";
          // if ($id === null) {
          //     $class = get_called_class();
          //     $message = "Could not determine which URL to request: "
          //        . "$class instance has invalid ID: $id";
          //     throw new Error\InvalidRequest($message, null);
          // }
          $base = static::classUrl();
          $extn = urlencode($id);
          return "$base/$extn";
      }
  }
?>
