<?php
/**
 * StatusApi
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Build
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

namespace AzureDevOpsClient\Build\AzureDevOpsClient\Build\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use AzureDevOpsClient\Build\ApiException;
use AzureDevOpsClient\Build\Configuration;
use AzureDevOpsClient\Build\HeaderSelector;
use AzureDevOpsClient\Build\ObjectSerializer;

/**
 * StatusApi Class Doc Comment
 *
 * @category Class
 * @package  AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StatusApi
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
     * Operation statusGet
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $definition Either the definition name with optional leading folder path, or the definition id. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $branchName Only consider the most recent build for this branch. (optional)
     * @param  string $stageName Use this stage within the pipeline to render the status. (optional)
     * @param  string $jobName Use this job within a stage of the pipeline to render the status. (optional)
     * @param  string $configuration Use this job configuration to render the status (optional)
     * @param  string $label Replaces the default text on the left side of the badge. (optional)
     *
     * @throws \AzureDevOpsClient\Build\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function statusGet($organization, $project, $definition, $apiVersion, $branchName = null, $stageName = null, $jobName = null, $configuration = null, $label = null)
    {
        list($response) = $this->statusGetWithHttpInfo($organization, $project, $definition, $apiVersion, $branchName, $stageName, $jobName, $configuration, $label);
        return $response;
    }

    /**
     * Operation statusGetWithHttpInfo
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $definition Either the definition name with optional leading folder path, or the definition id. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $branchName Only consider the most recent build for this branch. (optional)
     * @param  string $stageName Use this stage within the pipeline to render the status. (optional)
     * @param  string $jobName Use this job within a stage of the pipeline to render the status. (optional)
     * @param  string $configuration Use this job configuration to render the status (optional)
     * @param  string $label Replaces the default text on the left side of the badge. (optional)
     *
     * @throws \AzureDevOpsClient\Build\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function statusGetWithHttpInfo($organization, $project, $definition, $apiVersion, $branchName = null, $stageName = null, $jobName = null, $configuration = null, $label = null)
    {
        $returnType = 'string';
        $request = $this->statusGetRequest($organization, $project, $definition, $apiVersion, $branchName, $stageName, $jobName, $configuration, $label);

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
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation statusGetAsync
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $definition Either the definition name with optional leading folder path, or the definition id. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $branchName Only consider the most recent build for this branch. (optional)
     * @param  string $stageName Use this stage within the pipeline to render the status. (optional)
     * @param  string $jobName Use this job within a stage of the pipeline to render the status. (optional)
     * @param  string $configuration Use this job configuration to render the status (optional)
     * @param  string $label Replaces the default text on the left side of the badge. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function statusGetAsync($organization, $project, $definition, $apiVersion, $branchName = null, $stageName = null, $jobName = null, $configuration = null, $label = null)
    {
        return $this->statusGetAsyncWithHttpInfo($organization, $project, $definition, $apiVersion, $branchName, $stageName, $jobName, $configuration, $label)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation statusGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $definition Either the definition name with optional leading folder path, or the definition id. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $branchName Only consider the most recent build for this branch. (optional)
     * @param  string $stageName Use this stage within the pipeline to render the status. (optional)
     * @param  string $jobName Use this job within a stage of the pipeline to render the status. (optional)
     * @param  string $configuration Use this job configuration to render the status (optional)
     * @param  string $label Replaces the default text on the left side of the badge. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function statusGetAsyncWithHttpInfo($organization, $project, $definition, $apiVersion, $branchName = null, $stageName = null, $jobName = null, $configuration = null, $label = null)
    {
        $returnType = 'string';
        $request = $this->statusGetRequest($organization, $project, $definition, $apiVersion, $branchName, $stageName, $jobName, $configuration, $label);

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
     * Create request for operation 'statusGet'
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $definition Either the definition name with optional leading folder path, or the definition id. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $branchName Only consider the most recent build for this branch. (optional)
     * @param  string $stageName Use this stage within the pipeline to render the status. (optional)
     * @param  string $jobName Use this job within a stage of the pipeline to render the status. (optional)
     * @param  string $configuration Use this job configuration to render the status (optional)
     * @param  string $label Replaces the default text on the left side of the badge. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function statusGetRequest($organization, $project, $definition, $apiVersion, $branchName = null, $stageName = null, $jobName = null, $configuration = null, $label = null)
    {
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling statusGet'
            );
        }
        // verify the required parameter 'project' is set
        if ($project === null || (is_array($project) && count($project) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project when calling statusGet'
            );
        }
        // verify the required parameter 'definition' is set
        if ($definition === null || (is_array($definition) && count($definition) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $definition when calling statusGet'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling statusGet'
            );
        }

        $resourcePath = '/{organization}/{project}/_apis/build/status/{definition}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($branchName !== null) {
            $queryParams['branchName'] = ObjectSerializer::toQueryValue($branchName);
        }
        // query params
        if ($stageName !== null) {
            $queryParams['stageName'] = ObjectSerializer::toQueryValue($stageName);
        }
        // query params
        if ($jobName !== null) {
            $queryParams['jobName'] = ObjectSerializer::toQueryValue($jobName);
        }
        // query params
        if ($configuration !== null) {
            $queryParams['configuration'] = ObjectSerializer::toQueryValue($configuration);
        }
        // query params
        if ($label !== null) {
            $queryParams['label'] = ObjectSerializer::toQueryValue($label);
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
        if ($project !== null) {
            $resourcePath = str_replace(
                '{' . 'project' . '}',
                ObjectSerializer::toPathValue($project),
                $resourcePath
            );
        }
        // path params
        if ($definition !== null) {
            $resourcePath = str_replace(
                '{' . 'definition' . '}',
                ObjectSerializer::toPathValue($definition),
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
