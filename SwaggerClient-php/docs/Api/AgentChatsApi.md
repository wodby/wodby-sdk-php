# Wodby\Api\AgentChatsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**answerAgentChatApproval()**](AgentChatsApi.md#answerAgentChatApproval) | **POST** /agent-chats/{id}/approvals | Approve or decline agent change |
| [**answerAgentChatQuestion()**](AgentChatsApi.md#answerAgentChatQuestion) | **POST** /agent-chats/{id}/answers | Answer agent question |
| [**deleteAgentChat()**](AgentChatsApi.md#deleteAgentChat) | **DELETE** /agent-chats/{id} | Delete agent chat |
| [**getAgentChat()**](AgentChatsApi.md#getAgentChat) | **GET** /agent-chats/{id} | Get agent chat |
| [**listAgentChats()**](AgentChatsApi.md#listAgentChats) | **GET** /agent-chats | List agent chats |
| [**sendAgentChatMessage()**](AgentChatsApi.md#sendAgentChatMessage) | **POST** /agent-chats/{id}/messages | Send agent chat message |
| [**startAgentChat()**](AgentChatsApi.md#startAgentChat) | **POST** /agent-chats | Start agent chat |
| [**stopAgentChat()**](AgentChatsApi.md#stopAgentChat) | **POST** /agent-chats/{id}/stop | Stop agent chat |
| [**updateAgentChatApprovalMode()**](AgentChatsApi.md#updateAgentChatApprovalMode) | **PUT** /agent-chats/{id}/approval-mode | Set agent chat approval mode |


## `answerAgentChatApproval()`

```php
answerAgentChatApproval($id, $agent_chat_approval_request, $org_id): \Wodby\Api\Model\AgentChat
```

Approve or decline agent change

Approves or declines a tool call that waits for approval. The run continues once nothing waits any more. Approving a destructive call, marked toolDestructive, lets it delete, overwrite, upgrade or interrupt what its arguments name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AgentChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$agent_chat_approval_request = new \Wodby\Api\Model\AgentChatApprovalRequest(); // \Wodby\Api\Model\AgentChatApprovalRequest
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.

try {
    $result = $apiInstance->answerAgentChatApproval($id, $agent_chat_approval_request, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentChatsApi->answerAgentChatApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **agent_chat_approval_request** | [**\Wodby\Api\Model\AgentChatApprovalRequest**](../Model/AgentChatApprovalRequest.md)|  | |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |

### Return type

[**\Wodby\Api\Model\AgentChat**](../Model/AgentChat.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `answerAgentChatQuestion()`

```php
answerAgentChatQuestion($id, $agent_chat_answer_request, $org_id): \Wodby\Api\Model\AgentChat
```

Answer agent question

Answers a question the agent asked with the tool ask_user, with option labels from its arguments or other text. The run continues once nothing waits any more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AgentChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$agent_chat_answer_request = new \Wodby\Api\Model\AgentChatAnswerRequest(); // \Wodby\Api\Model\AgentChatAnswerRequest
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.

try {
    $result = $apiInstance->answerAgentChatQuestion($id, $agent_chat_answer_request, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentChatsApi->answerAgentChatQuestion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **agent_chat_answer_request** | [**\Wodby\Api\Model\AgentChatAnswerRequest**](../Model/AgentChatAnswerRequest.md)|  | |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |

### Return type

[**\Wodby\Api\Model\AgentChat**](../Model/AgentChat.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAgentChat()`

```php
deleteAgentChat($id, $org_id): \Wodby\Api\Model\OperationResult
```

Delete agent chat

Deletes a chat and its messages. It does not undo what the agent did.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AgentChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.

try {
    $result = $apiInstance->deleteAgentChat($id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentChatsApi->deleteAgentChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAgentChat()`

```php
getAgentChat($id, $org_id): \Wodby\Api\Model\AgentChatDetail
```

Get agent chat

Returns a chat with its messages. A tool message with approval pending is a change that waits for approval, or, for the tool ask_user, a question that waits for an answer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AgentChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.

try {
    $result = $apiInstance->getAgentChat($id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentChatsApi->getAgentChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |

### Return type

[**\Wodby\Api\Model\AgentChatDetail**](../Model/AgentChatDetail.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAgentChats()`

```php
listAgentChats($org_id): \Wodby\Api\Model\AgentChat[]
```

List agent chats

Returns the API key user's chats with Wodby Agent in the organization, the most recently active first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AgentChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.

try {
    $result = $apiInstance->listAgentChats($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentChatsApi->listAgentChats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |

### Return type

[**\Wodby\Api\Model\AgentChat[]**](../Model/AgentChat.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendAgentChatMessage()`

```php
sendAgentChatMessage($id, $agent_chat_message_request, $org_id): \Wodby\Api\Model\AgentChat
```

Send agent chat message

Adds a message to an idle chat and starts the agent's run, which continues after the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AgentChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$agent_chat_message_request = new \Wodby\Api\Model\AgentChatMessageRequest(); // \Wodby\Api\Model\AgentChatMessageRequest
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.

try {
    $result = $apiInstance->sendAgentChatMessage($id, $agent_chat_message_request, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentChatsApi->sendAgentChatMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **agent_chat_message_request** | [**\Wodby\Api\Model\AgentChatMessageRequest**](../Model/AgentChatMessageRequest.md)|  | |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |

### Return type

[**\Wodby\Api\Model\AgentChat**](../Model/AgentChat.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startAgentChat()`

```php
startAgentChat($start_agent_chat_request): \Wodby\Api\Model\AgentChat
```

Start agent chat

Starts a chat with Wodby Agent with its first message. The agent's run continues after the response: read the chat until its status is idle, or waiting for an approval or an answer. Each run uses the organization's AI credits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AgentChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_agent_chat_request = new \Wodby\Api\Model\StartAgentChatRequest(); // \Wodby\Api\Model\StartAgentChatRequest

try {
    $result = $apiInstance->startAgentChat($start_agent_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentChatsApi->startAgentChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_agent_chat_request** | [**\Wodby\Api\Model\StartAgentChatRequest**](../Model/StartAgentChatRequest.md)|  | |

### Return type

[**\Wodby\Api\Model\AgentChat**](../Model/AgentChat.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopAgentChat()`

```php
stopAgentChat($id, $org_id): \Wodby\Api\Model\AgentChat
```

Stop agent chat

Stops the chat's run and declines the calls that wait for approval. A chat without a run is returned as it is.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AgentChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.

try {
    $result = $apiInstance->stopAgentChat($id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentChatsApi->stopAgentChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |

### Return type

[**\Wodby\Api\Model\AgentChat**](../Model/AgentChat.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAgentChatApprovalMode()`

```php
updateAgentChatApprovalMode($id, $agent_chat_approval_mode_request, $org_id): \Wodby\Api\Model\AgentChat
```

Set agent chat approval mode

Sets whether the chat asks before a change. A run that is going on follows the new mode from its next step; calls that already wait for approval keep waiting for an answer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AgentChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$agent_chat_approval_mode_request = new \Wodby\Api\Model\AgentChatApprovalModeRequest(); // \Wodby\Api\Model\AgentChatApprovalModeRequest
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.

try {
    $result = $apiInstance->updateAgentChatApprovalMode($id, $agent_chat_approval_mode_request, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentChatsApi->updateAgentChatApprovalMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **agent_chat_approval_mode_request** | [**\Wodby\Api\Model\AgentChatApprovalModeRequest**](../Model/AgentChatApprovalModeRequest.md)|  | |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |

### Return type

[**\Wodby\Api\Model\AgentChat**](../Model/AgentChat.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
