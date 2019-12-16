<?php
/**
 * MergeBasesApi
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
 * MergeBasesApi Class Doc Comment
 *
 * @category Class
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MergeBasesApi
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
     * Operation mergeBasesList
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $repositoryNameOrId ID or name of the local repository. (required)
     * @param  string $commitId First commit, usually the tip of the target branch of the potential merge. (required)
     * @param  string $otherCommitId Other commit, usually the tip of the source branch of the potential merge. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $otherCollectionId The collection ID where otherCommitId lives. (optional)
     * @param  string $otherRepositoryId The repository ID where otherCommitId lives. (optional)
     *
     * @throws \AzureDevOpsClient\Git\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef[]
     */
    public function mergeBasesList($organization, $repositoryNameOrId, $commitId, $otherCommitId, $project, $apiVersion, $otherCollectionId = null, $otherRepositoryId = null)
    {
        list($response) = $this->mergeBasesListWithHttpInfo($organization, $repositoryNameOrId, $commitId, $otherCommitId, $project, $apiVersion, $otherCollectionId, $otherRepositoryId);
        return $response;
    }

    /**
     * Operation mergeBasesListWithHttpInfo
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $repositoryNameOrId ID or name of the local repository. (required)
     * @param  string $commitId First commit, usually the tip of the target branch of the potential merge. (required)
     * @param  string $otherCommitId Other commit, usually the tip of the source branch of the potential merge. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $otherCollectionId The collection ID where otherCommitId lives. (optional)
     * @param  string $otherRepositoryId The repository ID where otherCommitId lives. (optional)
     *
     * @throws \AzureDevOpsClient\Git\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef[], HTTP status code, HTTP response headers (array of strings)
     */
    public function mergeBasesListWithHttpInfo($organization, $repositoryNameOrId, $commitId, $otherCommitId, $project, $apiVersion, $otherCollectionId = null, $otherRepositoryId = null)
    {
        $returnType = '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef[]';
        $request = $this->mergeBasesListRequest($organization, $repositoryNameOrId, $commitId, $otherCommitId, $project, $apiVersion, $otherCollectionId, $otherRepositoryId);

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
                        '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation mergeBasesListAsync
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $repositoryNameOrId ID or name of the local repository. (required)
     * @param  string $commitId First commit, usually the tip of the target branch of the potential merge. (required)
     * @param  string $otherCommitId Other commit, usually the tip of the source branch of the potential merge. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $otherCollectionId The collection ID where otherCommitId lives. (optional)
     * @param  string $otherRepositoryId The repository ID where otherCommitId lives. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mergeBasesListAsync($organization, $repositoryNameOrId, $commitId, $otherCommitId, $project, $apiVersion, $otherCollectionId = null, $otherRepositoryId = null)
    {
        return $this->mergeBasesListAsyncWithHttpInfo($organization, $repositoryNameOrId, $commitId, $otherCommitId, $project, $apiVersion, $otherCollectionId, $otherRepositoryId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mergeBasesListAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $repositoryNameOrId ID or name of the local repository. (required)
     * @param  string $commitId First commit, usually the tip of the target branch of the potential merge. (required)
     * @param  string $otherCommitId Other commit, usually the tip of the source branch of the potential merge. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $otherCollectionId The collection ID where otherCommitId lives. (optional)
     * @param  string $otherRepositoryId The repository ID where otherCommitId lives. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mergeBasesListAsyncWithHttpInfo($organization, $repositoryNameOrId, $commitId, $otherCommitId, $project, $apiVersion, $otherCollectionId = null, $otherRepositoryId = null)
    {
        $returnType = '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef[]';
        $request = $this->mergeBasesListRequest($organization, $repositoryNameOrId, $commitId, $otherCommitId, $project, $apiVersion, $otherCollectionId, $otherRepositoryId);

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
     * Create request for operation 'mergeBasesList'
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $repositoryNameOrId ID or name of the local repository. (required)
     * @param  string $commitId First commit, usually the tip of the target branch of the potential merge. (required)
     * @param  string $otherCommitId Other commit, usually the tip of the source branch of the potential merge. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $otherCollectionId The collection ID where otherCommitId lives. (optional)
     * @param  string $otherRepositoryId The repository ID where otherCommitId lives. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function mergeBasesListRequest($organization, $repositoryNameOrId, $commitId, $otherCommitId, $project, $apiVersion, $otherCollectionId = null, $otherRepositoryId = null)
    {
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling mergeBasesList'
            );
        }
        // verify the required parameter 'repositoryNameOrId' is set
        if ($repositoryNameOrId === null || (is_array($repositoryNameOrId) && count($repositoryNameOrId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $repositoryNameOrId when calling mergeBasesList'
            );
        }
        // verify the required parameter 'commitId' is set
        if ($commitId === null || (is_array($commitId) && count($commitId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $commitId when calling mergeBasesList'
            );
        }
        // verify the required parameter 'otherCommitId' is set
        if ($otherCommitId === null || (is_array($otherCommitId) && count($otherCommitId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $otherCommitId when calling mergeBasesList'
            );
        }
        // verify the required parameter 'project' is set
        if ($project === null || (is_array($project) && count($project) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project when calling mergeBasesList'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling mergeBasesList'
            );
        }

        $resourcePath = '/{organization}/{project}/_apis/git/repositories/{repositoryNameOrId}/commits/{commitId}/mergebases';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($otherCommitId !== null) {
            $queryParams['otherCommitId'] = ObjectSerializer::toQueryValue($otherCommitId);
        }
        // query params
        if ($otherCollectionId !== null) {
            $queryParams['otherCollectionId'] = ObjectSerializer::toQueryValue($otherCollectionId);
        }
        // query params
        if ($otherRepositoryId !== null) {
            $queryParams['otherRepositoryId'] = ObjectSerializer::toQueryValue($otherRepositoryId);
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
        if ($repositoryNameOrId !== null) {
            $resourcePath = str_replace(
                '{' . 'repositoryNameOrId' . '}',
                ObjectSerializer::toPathValue($repositoryNameOrId),
                $resourcePath
            );
        }
        // path params
        if ($commitId !== null) {
            $resourcePath = str_replace(
                '{' . 'commitId' . '}',
                ObjectSerializer::toPathValue($commitId),
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
