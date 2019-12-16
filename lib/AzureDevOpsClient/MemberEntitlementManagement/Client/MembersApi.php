<?php
/**
 * MembersApi
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\MemberEntitlementManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MemberEntitlementManagement
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 6.0-preview
 * Contact: nugetvss@microsoft.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.11-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use AzureDevOpsClient\MemberEntitlementManagement\ApiException;
use AzureDevOpsClient\MemberEntitlementManagement\Configuration;
use AzureDevOpsClient\MemberEntitlementManagement\HeaderSelector;
use AzureDevOpsClient\MemberEntitlementManagement\ObjectSerializer;

/**
 * MembersApi Class Doc Comment
 *
 * @category Class
 * @package  AzureDevOpsClient\MemberEntitlementManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MembersApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation membersAdd
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $groupId Id of the Group. (required)
     * @param  string $memberId Id of the member to add. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \AzureDevOpsClient\MemberEntitlementManagement\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function membersAdd($organization, $groupId, $memberId, $apiVersion)
    {
        $this->membersAddWithHttpInfo($organization, $groupId, $memberId, $apiVersion);
    }

    /**
     * Operation membersAddWithHttpInfo
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $groupId Id of the Group. (required)
     * @param  string $memberId Id of the member to add. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \AzureDevOpsClient\MemberEntitlementManagement\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function membersAddWithHttpInfo($organization, $groupId, $memberId, $apiVersion)
    {
        $returnType = '';
        $request = $this->membersAddRequest($organization, $groupId, $memberId, $apiVersion);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation membersAddAsync
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $groupId Id of the Group. (required)
     * @param  string $memberId Id of the member to add. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function membersAddAsync($organization, $groupId, $memberId, $apiVersion)
    {
        return $this->membersAddAsyncWithHttpInfo($organization, $groupId, $memberId, $apiVersion)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation membersAddAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $groupId Id of the Group. (required)
     * @param  string $memberId Id of the member to add. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function membersAddAsyncWithHttpInfo($organization, $groupId, $memberId, $apiVersion)
    {
        $returnType = '';
        $request = $this->membersAddRequest($organization, $groupId, $memberId, $apiVersion);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'membersAdd'
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $groupId Id of the Group. (required)
     * @param  string $memberId Id of the member to add. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function membersAddRequest($organization, $groupId, $memberId, $apiVersion)
    {
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling membersAdd'
            );
        }
        // verify the required parameter 'groupId' is set
        if ($groupId === null || (is_array($groupId) && count($groupId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $groupId when calling membersAdd'
            );
        }
        // verify the required parameter 'memberId' is set
        if ($memberId === null || (is_array($memberId) && count($memberId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $memberId when calling membersAdd'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling membersAdd'
            );
        }

        $resourcePath = '/{organization}/_apis/GroupEntitlements/{groupId}/members/{memberId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($apiVersion !== null) {
            $queryParams['api-version'] = ObjectSerializer::toQueryValue($apiVersion);
        }

        // path params
        if ($organization !== null) {
            $resourcePath = str_replace(
                '{' . 'organization' . '}',
                ObjectSerializer::toPathValue($organization),
                $resourcePath
            );
        }
        // path params
        if ($groupId !== null) {
            $resourcePath = str_replace(
                '{' . 'groupId' . '}',
                ObjectSerializer::toPathValue($groupId),
                $resourcePath
            );
        }
        // path params
        if ($memberId !== null) {
            $resourcePath = str_replace(
                '{' . 'memberId' . '}',
                ObjectSerializer::toPathValue($memberId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation membersGet
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $groupId Id of the Group. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $maxResults Maximum number of results to retrieve. (optional)
     * @param  string $pagingToken Paging Token from the previous page fetched. If the &#39;pagingToken&#39; is null, the results would be fetched from the beginning of the Members List. (optional)
     *
     * @throws \AzureDevOpsClient\MemberEntitlementManagement\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\PagedGraphMemberList
     */
    public function membersGet($organization, $groupId, $apiVersion, $maxResults = null, $pagingToken = null)
    {
        list($response) = $this->membersGetWithHttpInfo($organization, $groupId, $apiVersion, $maxResults, $pagingToken);
        return $response;
    }

    /**
     * Operation membersGetWithHttpInfo
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $groupId Id of the Group. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $maxResults Maximum number of results to retrieve. (optional)
     * @param  string $pagingToken Paging Token from the previous page fetched. If the &#39;pagingToken&#39; is null, the results would be fetched from the beginning of the Members List. (optional)
     *
     * @throws \AzureDevOpsClient\MemberEntitlementManagement\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\PagedGraphMemberList, HTTP status code, HTTP response headers (array of strings)
     */
    public function membersGetWithHttpInfo($organization, $groupId, $apiVersion, $maxResults = null, $pagingToken = null)
    {
        $returnType = '\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\PagedGraphMemberList';
        $request = $this->membersGetRequest($organization, $groupId, $apiVersion, $maxResults, $pagingToken);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\PagedGraphMemberList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation membersGetAsync
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $groupId Id of the Group. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $maxResults Maximum number of results to retrieve. (optional)
     * @param  string $pagingToken Paging Token from the previous page fetched. If the &#39;pagingToken&#39; is null, the results would be fetched from the beginning of the Members List. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function membersGetAsync($organization, $groupId, $apiVersion, $maxResults = null, $pagingToken = null)
    {
        return $this->membersGetAsyncWithHttpInfo($organization, $groupId, $apiVersion, $maxResults, $pagingToken)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation membersGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $groupId Id of the Group. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $maxResults Maximum number of results to retrieve. (optional)
     * @param  string $pagingToken Paging Token from the previous page fetched. If the &#39;pagingToken&#39; is null, the results would be fetched from the beginning of the Members List. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function membersGetAsyncWithHttpInfo($organization, $groupId, $apiVersion, $maxResults = null, $pagingToken = null)
    {
        $returnType = '\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\PagedGraphMemberList';
        $request = $this->membersGetRequest($organization, $groupId, $apiVersion, $maxResults, $pagingToken);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'membersGet'
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $groupId Id of the Group. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $maxResults Maximum number of results to retrieve. (optional)
     * @param  string $pagingToken Paging Token from the previous page fetched. If the &#39;pagingToken&#39; is null, the results would be fetched from the beginning of the Members List. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function membersGetRequest($organization, $groupId, $apiVersion, $maxResults = null, $pagingToken = null)
    {
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling membersGet'
            );
        }
        // verify the required parameter 'groupId' is set
        if ($groupId === null || (is_array($groupId) && count($groupId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $groupId when calling membersGet'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling membersGet'
            );
        }

        $resourcePath = '/{organization}/_apis/GroupEntitlements/{groupId}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($maxResults !== null) {
            $queryParams['maxResults'] = ObjectSerializer::toQueryValue($maxResults);
        }
        // query params
        if ($pagingToken !== null) {
            $queryParams['pagingToken'] = ObjectSerializer::toQueryValue($pagingToken);
        }
        // query params
        if ($apiVersion !== null) {
            $queryParams['api-version'] = ObjectSerializer::toQueryValue($apiVersion);
        }

        // path params
        if ($organization !== null) {
            $resourcePath = str_replace(
                '{' . 'organization' . '}',
                ObjectSerializer::toPathValue($organization),
                $resourcePath
            );
        }
        // path params
        if ($groupId !== null) {
            $resourcePath = str_replace(
                '{' . 'groupId' . '}',
                ObjectSerializer::toPathValue($groupId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation membersRemoveMemberFromGroup
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $groupId Id of the group. (required)
     * @param  string $memberId Id of the member to remove. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \AzureDevOpsClient\MemberEntitlementManagement\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function membersRemoveMemberFromGroup($organization, $groupId, $memberId, $apiVersion)
    {
        $this->membersRemoveMemberFromGroupWithHttpInfo($organization, $groupId, $memberId, $apiVersion);
    }

    /**
     * Operation membersRemoveMemberFromGroupWithHttpInfo
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $groupId Id of the group. (required)
     * @param  string $memberId Id of the member to remove. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \AzureDevOpsClient\MemberEntitlementManagement\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function membersRemoveMemberFromGroupWithHttpInfo($organization, $groupId, $memberId, $apiVersion)
    {
        $returnType = '';
        $request = $this->membersRemoveMemberFromGroupRequest($organization, $groupId, $memberId, $apiVersion);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation membersRemoveMemberFromGroupAsync
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $groupId Id of the group. (required)
     * @param  string $memberId Id of the member to remove. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function membersRemoveMemberFromGroupAsync($organization, $groupId, $memberId, $apiVersion)
    {
        return $this->membersRemoveMemberFromGroupAsyncWithHttpInfo($organization, $groupId, $memberId, $apiVersion)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation membersRemoveMemberFromGroupAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $groupId Id of the group. (required)
     * @param  string $memberId Id of the member to remove. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function membersRemoveMemberFromGroupAsyncWithHttpInfo($organization, $groupId, $memberId, $apiVersion)
    {
        $returnType = '';
        $request = $this->membersRemoveMemberFromGroupRequest($organization, $groupId, $memberId, $apiVersion);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'membersRemoveMemberFromGroup'
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $groupId Id of the group. (required)
     * @param  string $memberId Id of the member to remove. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function membersRemoveMemberFromGroupRequest($organization, $groupId, $memberId, $apiVersion)
    {
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling membersRemoveMemberFromGroup'
            );
        }
        // verify the required parameter 'groupId' is set
        if ($groupId === null || (is_array($groupId) && count($groupId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $groupId when calling membersRemoveMemberFromGroup'
            );
        }
        // verify the required parameter 'memberId' is set
        if ($memberId === null || (is_array($memberId) && count($memberId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $memberId when calling membersRemoveMemberFromGroup'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling membersRemoveMemberFromGroup'
            );
        }

        $resourcePath = '/{organization}/_apis/GroupEntitlements/{groupId}/members/{memberId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($apiVersion !== null) {
            $queryParams['api-version'] = ObjectSerializer::toQueryValue($apiVersion);
        }

        // path params
        if ($organization !== null) {
            $resourcePath = str_replace(
                '{' . 'organization' . '}',
                ObjectSerializer::toPathValue($organization),
                $resourcePath
            );
        }
        // path params
        if ($groupId !== null) {
            $resourcePath = str_replace(
                '{' . 'groupId' . '}',
                ObjectSerializer::toPathValue($groupId),
                $resourcePath
            );
        }
        // path params
        if ($memberId !== null) {
            $resourcePath = str_replace(
                '{' . 'memberId' . '}',
                ObjectSerializer::toPathValue($memberId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
