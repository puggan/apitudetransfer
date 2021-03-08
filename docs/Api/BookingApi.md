# Swagger\Client\BookingApi

All URIs are relative to *https://api.test.hotelbeds.com/transfor-api/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**booking**](BookingApi.md#booking) | **DELETE** /booking/{language}/reference/{reference} | Cancel transfers bookings
[**booking1**](BookingApi.md#booking1) | **DELETE** /bookings/{language}/reference/{reference} | Cancel transfers bookings
[**booking2**](BookingApi.md#booking2) | **POST** /booking | Confirm transfers bookings
[**booking3**](BookingApi.md#booking3) | **POST** /bookings | Confirm transfers bookings
[**booking4**](BookingApi.md#booking4) | **GET** /booking/{language}/reference/{reference} | Get a bookings confirmed
[**booking5**](BookingApi.md#booking5) | **GET** /bookings/{language}/reference/{reference} | Get a bookings confirmed
[**booking6**](BookingApi.md#booking6) | **GET** /bookings/{language} | Get a booking list
[**booking7**](BookingApi.md#booking7) | **DELETE** /booking/{language}/reference/{reference}/id/{id} | Modify transfers bookings
[**booking8**](BookingApi.md#booking8) | **DELETE** /bookings/{language}/reference/{reference}/id/{id} | Modify transfers bookings

# **booking**
> \Swagger\Client\Model\BookingResponse booking($language, $reference, $simulation)

Cancel transfers bookings

The cancel endpoint returns a BookingResponseDTO object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-key', 'Bearer');

$apiInstance = new Swagger\Client\APITudeTransfer\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | language iso code of response
$reference = "reference_example"; // string | reference
$simulation = false; // bool | simulation

try {
    $result = $apiInstance->booking($language, $reference, $simulation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->booking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| language iso code of response |
 **reference** | **string**| reference |
 **simulation** | **bool**| simulation | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\BookingResponse**](../Model/BookingResponse.md)

### Authorization

[Api-key](../../README.md#Api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **booking1**
> \Swagger\Client\Model\BookingResponse booking1($language, $reference, $simulation)

Cancel transfers bookings

The cancel endpoint returns a BookingResponseDTO object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-key', 'Bearer');

$apiInstance = new Swagger\Client\APITudeTransfer\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | language iso code of response
$reference = "reference_example"; // string | reference
$simulation = false; // bool | simulation

try {
    $result = $apiInstance->booking1($language, $reference, $simulation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->booking1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| language iso code of response |
 **reference** | **string**| reference |
 **simulation** | **bool**| simulation | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\BookingResponse**](../Model/BookingResponse.md)

### Authorization

[Api-key](../../README.md#Api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **booking2**
> \Swagger\Client\Model\BookingResponse booking2($body, $x_platform_id)

Confirm transfers bookings

The confirm endpoint returns a BookingResponseDTO object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-key', 'Bearer');

$apiInstance = new Swagger\Client\APITudeTransfer\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConfirmRequest(); // \Swagger\Client\Model\ConfirmRequest | confirmRequestDTO
$x_platform_id = "x_platform_id_example"; // string | X-Platform-ID

try {
    $result = $apiInstance->booking2($body, $x_platform_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->booking2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfirmRequest**](../Model/ConfirmRequest.md)| confirmRequestDTO |
 **x_platform_id** | **string**| X-Platform-ID | [optional]

### Return type

[**\Swagger\Client\Model\BookingResponse**](../Model/BookingResponse.md)

### Authorization

[Api-key](../../README.md#Api-key)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **booking3**
> \Swagger\Client\Model\BookingResponse booking3($body, $x_platform_id)

Confirm transfers bookings

The confirm endpoint returns a BookingResponseDTO object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-key', 'Bearer');

$apiInstance = new Swagger\Client\APITudeTransfer\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConfirmRequest(); // \Swagger\Client\Model\ConfirmRequest | confirmRequestDTO
$x_platform_id = "x_platform_id_example"; // string | X-Platform-ID

try {
    $result = $apiInstance->booking3($body, $x_platform_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->booking3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfirmRequest**](../Model/ConfirmRequest.md)| confirmRequestDTO |
 **x_platform_id** | **string**| X-Platform-ID | [optional]

### Return type

[**\Swagger\Client\Model\BookingResponse**](../Model/BookingResponse.md)

### Authorization

[Api-key](../../README.md#Api-key)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **booking4**
> \Swagger\Client\Model\BookingResponse booking4($language, $reference)

Get a bookings confirmed

The booking endpoint returns a BookingResponseDTO object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-key', 'Bearer');

$apiInstance = new Swagger\Client\APITudeTransfer\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | language iso code of response
$reference = "reference_example"; // string | reference

try {
    $result = $apiInstance->booking4($language, $reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->booking4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| language iso code of response |
 **reference** | **string**| reference |

### Return type

[**\Swagger\Client\Model\BookingResponse**](../Model/BookingResponse.md)

### Authorization

[Api-key](../../README.md#Api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **booking5**
> \Swagger\Client\Model\BookingResponse booking5($language, $reference)

Get a bookings confirmed

The booking endpoint returns a BookingResponseDTO object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-key', 'Bearer');

$apiInstance = new Swagger\Client\APITudeTransfer\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | language iso code of response
$reference = "reference_example"; // string | reference

try {
    $result = $apiInstance->booking5($language, $reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->booking5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| language iso code of response |
 **reference** | **string**| reference |

### Return type

[**\Swagger\Client\Model\BookingResponse**](../Model/BookingResponse.md)

### Authorization

[Api-key](../../README.md#Api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **booking6**
> \Swagger\Client\Model\BookingListResponse booking6($language, $from_date, $to_date, $date_type, $offset, $limit, $agency, $surname)

Get a booking list

The booking endpoint returns a BookingListResponseDTO object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-key', 'Bearer');

$apiInstance = new Swagger\Client\APITudeTransfer\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | language iso code of response
$from_date = "from_date_example"; // string | fromDate
$to_date = "to_date_example"; // string | toDate
$date_type = "date_type_example"; // string | dateType, possible values FROM_DATE, CREATION_DATE
$offset = 1; // int | Used for pagination. Index of the item from which the list will be generated in the response object.
$limit = 1; // int | Used for pagination. Number of items from the index indicated by the offset parameter that will be included in the response object.
$agency = "agency_example"; // string | Used for filtering results. Bookings that belong to the agency specified by the reference.
$surname = "surname_example"; // string | Used for filtering results. Bookings that were created by the user specified by surname.

try {
    $result = $apiInstance->booking6($language, $from_date, $to_date, $date_type, $offset, $limit, $agency, $surname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->booking6: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| language iso code of response |
 **from_date** | **string**| fromDate | [optional]
 **to_date** | **string**| toDate | [optional]
 **date_type** | **string**| dateType, possible values FROM_DATE, CREATION_DATE | [optional]
 **offset** | **int**| Used for pagination. Index of the item from which the list will be generated in the response object. | [optional] [default to 1]
 **limit** | **int**| Used for pagination. Number of items from the index indicated by the offset parameter that will be included in the response object. | [optional] [default to 1]
 **agency** | **string**| Used for filtering results. Bookings that belong to the agency specified by the reference. | [optional]
 **surname** | **string**| Used for filtering results. Bookings that were created by the user specified by surname. | [optional]

### Return type

[**\Swagger\Client\Model\BookingListResponse**](../Model/BookingListResponse.md)

### Authorization

[Api-key](../../README.md#Api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **booking7**
> \Swagger\Client\Model\BookingResponse booking7($language, $reference, $id, $simulation)

Modify transfers bookings

The modification endpoint returns a BookingResponseDTO object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-key', 'Bearer');

$apiInstance = new Swagger\Client\APITudeTransfer\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | language iso code of response
$reference = "reference_example"; // string | booking reference
$id = "id_example"; // string | transfer identifier
$simulation = false; // bool | simulation

try {
    $result = $apiInstance->booking7($language, $reference, $id, $simulation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->booking7: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| language iso code of response |
 **reference** | **string**| booking reference |
 **id** | **string**| transfer identifier |
 **simulation** | **bool**| simulation | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\BookingResponse**](../Model/BookingResponse.md)

### Authorization

[Api-key](../../README.md#Api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **booking8**
> \Swagger\Client\Model\BookingResponse booking8($language, $reference, $id, $simulation)

Modify transfers bookings

The modification endpoint returns a BookingResponseDTO object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-key', 'Bearer');

$apiInstance = new Swagger\Client\APITudeTransfer\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | language iso code of response
$reference = "reference_example"; // string | booking reference
$id = "id_example"; // string | transfer identifier
$simulation = false; // bool | simulation

try {
    $result = $apiInstance->booking8($language, $reference, $id, $simulation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->booking8: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| language iso code of response |
 **reference** | **string**| booking reference |
 **id** | **string**| transfer identifier |
 **simulation** | **bool**| simulation | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\BookingResponse**](../Model/BookingResponse.md)

### Authorization

[Api-key](../../README.md#Api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

