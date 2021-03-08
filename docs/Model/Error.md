# Error

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Error code | [optional] 
**date_time** | **string** | Time and date the error was thrown | [optional] 
**description** | **string** | Error description | [optional] 
**field_errors** | [**\Swagger\Client\Model\FieldError[]**](FieldError.md) | List of errors caused by field validations | [optional] 
**is_bad_request** | **bool** | The error is caused by a bad request from client, it&#x27;s not due to an internal service | [optional] 
**message** | **string** | Error message | [optional] 
**nested_error** | [**\Swagger\Client\Model\Error**](Error.md) |  | [optional] 
**service_name** | **string** | The name of the service that threw this error | [optional] 
**trace_id** | **string** | The trace ID | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

