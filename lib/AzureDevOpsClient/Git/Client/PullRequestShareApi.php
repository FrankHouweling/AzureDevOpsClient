<?php
/**
 * PullRequestShareApi
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Git
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

namespace AzureDevOpsClient\Git\AzureDevOpsClient\Git\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use AzureDevOpsClient\Git\ApiException;
use AzureDevOpsClient\Git\Configuration;
use AzureDevOpsClient\Git\HeaderSelector;
use AzureDevOpsClient\Git\ObjectSerializer;

/**
 * PullRequestShareApi Class Doc Comment
 *
 * @category Class
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PullRequestShareApi
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
     * Operation pullRequestShareSharePullRequest
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ShareNotificationContext $body  (required)
     * @param  string $repositoryId ID of the git repository. (required)
     * @param  int $pullRequestId ID of the pull request. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \AzureDevOpsClient\Git\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function pullRequestShareSharePullRequest($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion)
    {
        $this->pullRequestShareSharePullRequestWithHttpInfo($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion);
    }

    /**
     * Operation pullRequestShareSharePullRequestWithHttpInfo
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ShareNotificationContext $body  (required)
     * @param  string $repositoryId ID of the git repository. (required)
     * @param  int $pullRequestId ID of the pull request. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \AzureDevOpsClient\Git\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function pullRequestShareSharePullRequestWithHttpInfo($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion)
    {
        $returnType = '';
        $request = $this->pullRequestShareSharePullRequestRequest($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion);

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
     * Operation pullRequestShareSharePullRequestAsync
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ShareNotificationContext $body  (required)
     * @param  string $repositoryId ID of the git repository. (required)
     * @param  int $pullRequestId ID of the pull request. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pullRequestShareSharePullRequestAsync($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion)
    {
        return $this->pullRequestShareSharePullRequestAsyncWithHttpInfo($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation pullRequestShareSharePullRequestAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ShareNotificationContext $body  (required)
     * @param  string $repositoryId ID of the git repository. (required)
     * @param  int $pullRequestId ID of the pull request. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pullRequestShareSharePullRequestAsyncWithHttpInfo($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion)
    {
        $returnType = '';
        $request = $this->pullRequestShareSharePullRequestRequest($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion);

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
     * Create request for operation 'pullRequestShareSharePullRequest'
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ShareNotificationContext $body  (required)
     * @param  string $repositoryId ID of the git repository. (required)
     * @param  int $pullRequestId ID of the pull request. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function pullRequestShareSharePullRequestRequest($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion)
    {
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling pullRequestShareSharePullRequest'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling pullRequestShareSharePullRequest'
            );
        }
        // verify the required parameter 'repositoryId' is set
        if ($repositoryId === null || (is_array($repositoryId) && count($repositoryId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $repositoryId when calling pullRequestShareSharePullRequest'
            );
        }
        // verify the required parameter 'pullRequestId' is set
        if ($pullRequestId === null || (is_array($pullRequestId) && count($pullRequestId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pullRequestId when calling pullRequestShareSharePullRequest'
            );
        }
        // verify the required parameter 'project' is set
        if ($project === null || (is_array($project) && count($project) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project when calling pullRequestShareSharePullRequest'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling pullRequestShareSharePullRequest'
            );
        }

        $resourcePath = '/{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/share';
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
        if ($repositoryId !== null) {
            $resourcePath = str_replace(
                '{' . 'repositoryId' . '}',
                ObjectSerializer::toPathValue($repositoryId),
                $resourcePath
            );
        }
        // path params
        if ($pullRequestId !== null) {
            $resourcePath = str_replace(
                '{' . 'pullRequestId' . '}',
                ObjectSerializer::toPathValue($pullRequestId),
                $resourcePath
            );
        }
        // path params
        if ($project !== null) {
            $resourcePath = str_replace(
                '{' . 'project' . '}',
                ObjectSerializer::toPathValue($project),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
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
            'POST',
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
