# EmanuelBuss\ApitudeTransfer\AvailabilityApi

All URIs are relative to *https://api.test.hotelbeds.com/transfor-api/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**availability**](AvailabilityApi.md#availability) | **GET** /availability/{language}/from/{fromType}/{fromCode}/to/{toType}/{toCode}/{outbound}/{adults}/{children}/{infants} | Availability without comeBack parameter
[**availability1**](AvailabilityApi.md#availability1) | **GET** /availability/{language}/from/{fromType}/{fromCode}/to/{toType}/{toCode}/{outbound}/{inbound}/{adults}/{children}/{infants} | Availability with comeBack parameter
[**availability2**](AvailabilityApi.md#availability2) | **POST** /availability/routes/{language}/{adults}/{children}/{infants} | Availability routes

# **availability**
> \EmanuelBuss\ApitudeTransfer\Model\AvailabilityResponse availability($language, $from_type, $from_code, $to_type, $to_code, $outbound, $adults, $children, $infants)

Availability without comeBack parameter

Returns a Response with the RQ, a list of comeBack services and a list of departure services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-key
$config = EmanuelBuss\ApitudeTransfer\Configuration::getDefaultConfiguration()->setApiKey('Api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmanuelBuss\ApitudeTransfer\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-key', 'Bearer');

$apiInstance = new EmanuelBuss\ApitudeTransfer\APITudeTransfer\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | language iso code of response
$from_type = "from_type_example"; // string | origin transfer point type
$from_code = "from_code_example"; // string | origin code
$to_type = "to_type_example"; // string | destination transfer point type
$to_code = "to_code_example"; // string | destination code
$outbound = "outbound_example"; // string | departure datetime
$adults = 56; // int | number of adults
$children = 56; // int | number of children
$infants = 56; // int | number of infants

try {
    $result = $apiInstance->availability($language, $from_type, $from_code, $to_type, $to_code, $outbound, $adults, $children, $infants);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| language iso code of response |
 **from_type** | **string**| origin transfer point type |
 **from_code** | **string**| origin code |
 **to_type** | **string**| destination transfer point type |
 **to_code** | **string**| destination code |
 **outbound** | **string**| departure datetime |
 **adults** | **int**| number of adults |
 **children** | **int**| number of children |
 **infants** | **int**| number of infants |

### Return type

[**\EmanuelBuss\ApitudeTransfer\Model\AvailabilityResponse**](../Model/AvailabilityResponse.md)

### Authorization

[Api-key](../../README.md#Api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availability1**
> \EmanuelBuss\ApitudeTransfer\Model\AvailabilityResponse availability1($language, $from_type, $from_code, $to_type, $to_code, $outbound, $inbound, $adults, $children, $infants)

Availability with comeBack parameter

Returns a Response with the RQ, a list of comeBack services and a list of departure services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-key
$config = EmanuelBuss\ApitudeTransfer\Configuration::getDefaultConfiguration()->setApiKey('Api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmanuelBuss\ApitudeTransfer\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-key', 'Bearer');

$apiInstance = new EmanuelBuss\ApitudeTransfer\APITudeTransfer\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | language iso code of response
$from_type = "from_type_example"; // string | origin transfer point type
$from_code = "from_code_example"; // string | origin code
$to_type = "to_type_example"; // string | destination transfer point type
$to_code = "to_code_example"; // string | destination code
$outbound = "outbound_example"; // string | departure datetime
$inbound = "inbound_example"; // string | return datetime
$adults = 56; // int | number of adults
$children = 56; // int | number of children
$infants = 56; // int | number of infants

try {
    $result = $apiInstance->availability1($language, $from_type, $from_code, $to_type, $to_code, $outbound, $inbound, $adults, $children, $infants);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availability1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| language iso code of response |
 **from_type** | **string**| origin transfer point type |
 **from_code** | **string**| origin code |
 **to_type** | **string**| destination transfer point type |
 **to_code** | **string**| destination code |
 **outbound** | **string**| departure datetime |
 **inbound** | **string**| return datetime |
 **adults** | **int**| number of adults |
 **children** | **int**| number of children |
 **infants** | **int**| number of infants |

### Return type

[**\EmanuelBuss\ApitudeTransfer\Model\AvailabilityResponse**](../Model/AvailabilityResponse.md)

### Authorization

[Api-key](../../README.md#Api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availability2**
> \EmanuelBuss\ApitudeTransfer\Model\AvailabilityResponse availability2($body, $language, $adults, $children, $infants, $vehicle, $type, $category, $allow_partial_results)

Availability routes

Returns a Response with the RQ, a list of routes with available transfer services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-key
$config = EmanuelBuss\ApitudeTransfer\Configuration::getDefaultConfiguration()->setApiKey('Api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmanuelBuss\ApitudeTransfer\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-key', 'Bearer');

$apiInstance = new EmanuelBuss\ApitudeTransfer\APITudeTransfer\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \EmanuelBuss\ApitudeTransfer\Model\RouteRequest()); // \EmanuelBuss\ApitudeTransfer\Model\RouteRequest[] | routeRequests
$language = "language_example"; // string | language iso code of response
$adults = 56; // int | number of adults
$children = 56; // int | number of children
$infants = 56; // int | number of infants
$vehicle = "vehicle_example"; // string | Used for filtering results. Availability routes can be filtered by vehicle.
$type = "type_example"; // string | Used for filtering results. Availability routes can be filtered by type.
$category = "category_example"; // string | Used for filtering results. Availability routes can be filtered by category.
$allow_partial_results = true; // bool | Show the results of the routes including no results or exception errors

try {
    $result = $apiInstance->availability2($body, $language, $adults, $children, $infants, $vehicle, $type, $category, $allow_partial_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availability2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EmanuelBuss\ApitudeTransfer\Model\RouteRequest[]**](../Model/RouteRequest.md)| routeRequests |
 **language** | **string**| language iso code of response |
 **adults** | **int**| number of adults |
 **children** | **int**| number of children |
 **infants** | **int**| number of infants |
 **vehicle** | **string**| Used for filtering results. Availability routes can be filtered by vehicle. | [optional]
 **type** | **string**| Used for filtering results. Availability routes can be filtered by type. | [optional]
 **category** | **string**| Used for filtering results. Availability routes can be filtered by category. | [optional]
 **allow_partial_results** | **bool**| Show the results of the routes including no results or exception errors | [optional] [default to true]

### Return type

[**\EmanuelBuss\ApitudeTransfer\Model\AvailabilityResponse**](../Model/AvailabilityResponse.md)

### Authorization

[Api-key](../../README.md#Api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

