<?php

namespace Shipcloud;

/**
 * Base class for Stripe test cases.
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
    /** @var string original API base URL */
    protected $origApiBase;

    /** @var string original API key */
    protected $origApiKey;

    /** @var string original API version */
    protected $origApiVersion;

    protected function setUp()
    {
        // Save original values so that we can restore them after running tests
        $this->origApiBase = Shipcloud::$apiBase;
        $this->origApiKey = Shipcloud::getApiKey();
        $this->origApiVersion = Shipcloud::getApiVersion();

        // Set up host and credentials for stripe-mock
        Shipcloud::$apiBase = "http://localhost:" . MOCK_PORT;
        Shipcloud::setApiKey("sk_test_123");
        Shipcloud::setApiVersion("v1");

        // Set up the HTTP client mocker
        // $this->clientMock = $this->getMock('\Stripe\HttpClient\ClientInterface');

        // By default, use the real HTTP client
        // ApiRequestor::setHttpClient(HttpClient\CurlClient::instance());
    }

    protected function tearDown()
    {
        // Restore original values
        Shipcloud::$apiBase = $this->origApiBase;
        Shipcloud::setApiKey($this->origApiKey);
        Shipcloud::setApiVersion($this->origApiVersion);
    }
}
