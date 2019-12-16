<?php
/**
 * GitConflictRename1to2
 *
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

namespace AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Git\ObjectSerializer;

/**
 * GitConflictRename1to2 Class Doc Comment
 *
 * @category Class
 * @description Data object for Rename1to2 conflict
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GitConflictRename1to2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GitConflictRename1to2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ReferenceLinks',
        'conflictId' => 'int',
        'conflictPath' => 'string',
        'conflictType' => 'string',
        'mergeBaseCommit' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef',
        'mergeOrigin' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitMergeOriginRef',
        'mergeSourceCommit' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef',
        'mergeTargetCommit' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef',
        'resolutionError' => 'string',
        'resolutionStatus' => 'string',
        'resolvedBy' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\IdentityRef',
        'resolvedDate' => '\DateTime',
        'url' => 'string',
        'baseBlob' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitBlobRef',
        'resolution' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitResolutionRename1to2',
        'sourceBlob' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitBlobRef',
        'sourceNewPath' => 'string',
        'targetBlob' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitBlobRef',
        'targetNewPath' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'conflictId' => 'int32',
        'conflictPath' => null,
        'conflictType' => null,
        'mergeBaseCommit' => null,
        'mergeOrigin' => null,
        'mergeSourceCommit' => null,
        'mergeTargetCommit' => null,
        'resolutionError' => null,
        'resolutionStatus' => null,
        'resolvedBy' => null,
        'resolvedDate' => 'date-time',
        'url' => null,
        'baseBlob' => null,
        'resolution' => null,
        'sourceBlob' => null,
        'sourceNewPath' => null,
        'targetBlob' => null,
        'targetNewPath' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'links' => '_links',
        'conflictId' => 'conflictId',
        'conflictPath' => 'conflictPath',
        'conflictType' => 'conflictType',
        'mergeBaseCommit' => 'mergeBaseCommit',
        'mergeOrigin' => 'mergeOrigin',
        'mergeSourceCommit' => 'mergeSourceCommit',
        'mergeTargetCommit' => 'mergeTargetCommit',
        'resolutionError' => 'resolutionError',
        'resolutionStatus' => 'resolutionStatus',
        'resolvedBy' => 'resolvedBy',
        'resolvedDate' => 'resolvedDate',
        'url' => 'url',
        'baseBlob' => 'baseBlob',
        'resolution' => 'resolution',
        'sourceBlob' => 'sourceBlob',
        'sourceNewPath' => 'sourceNewPath',
        'targetBlob' => 'targetBlob',
        'targetNewPath' => 'targetNewPath'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'conflictId' => 'setConflictId',
        'conflictPath' => 'setConflictPath',
        'conflictType' => 'setConflictType',
        'mergeBaseCommit' => 'setMergeBaseCommit',
        'mergeOrigin' => 'setMergeOrigin',
        'mergeSourceCommit' => 'setMergeSourceCommit',
        'mergeTargetCommit' => 'setMergeTargetCommit',
        'resolutionError' => 'setResolutionError',
        'resolutionStatus' => 'setResolutionStatus',
        'resolvedBy' => 'setResolvedBy',
        'resolvedDate' => 'setResolvedDate',
        'url' => 'setUrl',
        'baseBlob' => 'setBaseBlob',
        'resolution' => 'setResolution',
        'sourceBlob' => 'setSourceBlob',
        'sourceNewPath' => 'setSourceNewPath',
        'targetBlob' => 'setTargetBlob',
        'targetNewPath' => 'setTargetNewPath'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'conflictId' => 'getConflictId',
        'conflictPath' => 'getConflictPath',
        'conflictType' => 'getConflictType',
        'mergeBaseCommit' => 'getMergeBaseCommit',
        'mergeOrigin' => 'getMergeOrigin',
        'mergeSourceCommit' => 'getMergeSourceCommit',
        'mergeTargetCommit' => 'getMergeTargetCommit',
        'resolutionError' => 'getResolutionError',
        'resolutionStatus' => 'getResolutionStatus',
        'resolvedBy' => 'getResolvedBy',
        'resolvedDate' => 'getResolvedDate',
        'url' => 'getUrl',
        'baseBlob' => 'getBaseBlob',
        'resolution' => 'getResolution',
        'sourceBlob' => 'getSourceBlob',
        'sourceNewPath' => 'getSourceNewPath',
        'targetBlob' => 'getTargetBlob',
        'targetNewPath' => 'getTargetNewPath'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const CONFLICT_TYPE_NONE = 'none';
    const CONFLICT_TYPE_ADD_ADD = 'addAdd';
    const CONFLICT_TYPE_ADD_RENAME = 'addRename';
    const CONFLICT_TYPE_DELETE_EDIT = 'deleteEdit';
    const CONFLICT_TYPE_DELETE_RENAME = 'deleteRename';
    const CONFLICT_TYPE_DIRECTORY_FILE = 'directoryFile';
    const CONFLICT_TYPE_DIRECTORY_CHILD = 'directoryChild';
    const CONFLICT_TYPE_EDIT_DELETE = 'editDelete';
    const CONFLICT_TYPE_EDIT_EDIT = 'editEdit';
    const CONFLICT_TYPE_FILE_DIRECTORY = 'fileDirectory';
    const CONFLICT_TYPE_RENAME1TO2 = 'rename1to2';
    const CONFLICT_TYPE_RENAME2TO1 = 'rename2to1';
    const CONFLICT_TYPE_RENAME_ADD = 'renameAdd';
    const CONFLICT_TYPE_RENAME_DELETE = 'renameDelete';
    const CONFLICT_TYPE_RENAME_RENAME = 'renameRename';
    const RESOLUTION_ERROR_NONE = 'none';
    const RESOLUTION_ERROR_MERGE_CONTENT_NOT_FOUND = 'mergeContentNotFound';
    const RESOLUTION_ERROR_PATH_IN_USE = 'pathInUse';
    const RESOLUTION_ERROR_INVALID_PATH = 'invalidPath';
    const RESOLUTION_ERROR_UNKNOWN_ACTION = 'unknownAction';
    const RESOLUTION_ERROR_UNKNOWN_MERGE_TYPE = 'unknownMergeType';
    const RESOLUTION_ERROR_OTHER_ERROR = 'otherError';
    const RESOLUTION_STATUS_UNRESOLVED = 'unresolved';
    const RESOLUTION_STATUS_PARTIALLY_RESOLVED = 'partiallyResolved';
    const RESOLUTION_STATUS_RESOLVED = 'resolved';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConflictTypeAllowableValues()
    {
        return [
            self::CONFLICT_TYPE_NONE,
            self::CONFLICT_TYPE_ADD_ADD,
            self::CONFLICT_TYPE_ADD_RENAME,
            self::CONFLICT_TYPE_DELETE_EDIT,
            self::CONFLICT_TYPE_DELETE_RENAME,
            self::CONFLICT_TYPE_DIRECTORY_FILE,
            self::CONFLICT_TYPE_DIRECTORY_CHILD,
            self::CONFLICT_TYPE_EDIT_DELETE,
            self::CONFLICT_TYPE_EDIT_EDIT,
            self::CONFLICT_TYPE_FILE_DIRECTORY,
            self::CONFLICT_TYPE_RENAME1TO2,
            self::CONFLICT_TYPE_RENAME2TO1,
            self::CONFLICT_TYPE_RENAME_ADD,
            self::CONFLICT_TYPE_RENAME_DELETE,
            self::CONFLICT_TYPE_RENAME_RENAME,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResolutionErrorAllowableValues()
    {
        return [
            self::RESOLUTION_ERROR_NONE,
            self::RESOLUTION_ERROR_MERGE_CONTENT_NOT_FOUND,
            self::RESOLUTION_ERROR_PATH_IN_USE,
            self::RESOLUTION_ERROR_INVALID_PATH,
            self::RESOLUTION_ERROR_UNKNOWN_ACTION,
            self::RESOLUTION_ERROR_UNKNOWN_MERGE_TYPE,
            self::RESOLUTION_ERROR_OTHER_ERROR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResolutionStatusAllowableValues()
    {
        return [
            self::RESOLUTION_STATUS_UNRESOLVED,
            self::RESOLUTION_STATUS_PARTIALLY_RESOLVED,
            self::RESOLUTION_STATUS_RESOLVED,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['conflictId'] = isset($data['conflictId']) ? $data['conflictId'] : null;
        $this->container['conflictPath'] = isset($data['conflictPath']) ? $data['conflictPath'] : null;
        $this->container['conflictType'] = isset($data['conflictType']) ? $data['conflictType'] : null;
        $this->container['mergeBaseCommit'] = isset($data['mergeBaseCommit']) ? $data['mergeBaseCommit'] : null;
        $this->container['mergeOrigin'] = isset($data['mergeOrigin']) ? $data['mergeOrigin'] : null;
        $this->container['mergeSourceCommit'] = isset($data['mergeSourceCommit']) ? $data['mergeSourceCommit'] : null;
        $this->container['mergeTargetCommit'] = isset($data['mergeTargetCommit']) ? $data['mergeTargetCommit'] : null;
        $this->container['resolutionError'] = isset($data['resolutionError']) ? $data['resolutionError'] : null;
        $this->container['resolutionStatus'] = isset($data['resolutionStatus']) ? $data['resolutionStatus'] : null;
        $this->container['resolvedBy'] = isset($data['resolvedBy']) ? $data['resolvedBy'] : null;
        $this->container['resolvedDate'] = isset($data['resolvedDate']) ? $data['resolvedDate'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['baseBlob'] = isset($data['baseBlob']) ? $data['baseBlob'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['sourceBlob'] = isset($data['sourceBlob']) ? $data['sourceBlob'] : null;
        $this->container['sourceNewPath'] = isset($data['sourceNewPath']) ? $data['sourceNewPath'] : null;
        $this->container['targetBlob'] = isset($data['targetBlob']) ? $data['targetBlob'] : null;
        $this->container['targetNewPath'] = isset($data['targetNewPath']) ? $data['targetNewPath'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getConflictTypeAllowableValues();
        if (!is_null($this->container['conflictType']) && !in_array($this->container['conflictType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'conflictType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getResolutionErrorAllowableValues();
        if (!is_null($this->container['resolutionError']) && !in_array($this->container['resolutionError'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'resolutionError', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getResolutionStatusAllowableValues();
        if (!is_null($this->container['resolutionStatus']) && !in_array($this->container['resolutionStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'resolutionStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets links
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ReferenceLinks $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets conflictId
     *
     * @return int
     */
    public function getConflictId()
    {
        return $this->container['conflictId'];
    }

    /**
     * Sets conflictId
     *
     * @param int $conflictId conflictId
     *
     * @return $this
     */
    public function setConflictId($conflictId)
    {
        $this->container['conflictId'] = $conflictId;

        return $this;
    }

    /**
     * Gets conflictPath
     *
     * @return string
     */
    public function getConflictPath()
    {
        return $this->container['conflictPath'];
    }

    /**
     * Sets conflictPath
     *
     * @param string $conflictPath conflictPath
     *
     * @return $this
     */
    public function setConflictPath($conflictPath)
    {
        $this->container['conflictPath'] = $conflictPath;

        return $this;
    }

    /**
     * Gets conflictType
     *
     * @return string
     */
    public function getConflictType()
    {
        return $this->container['conflictType'];
    }

    /**
     * Sets conflictType
     *
     * @param string $conflictType conflictType
     *
     * @return $this
     */
    public function setConflictType($conflictType)
    {
        $allowedValues = $this->getConflictTypeAllowableValues();
        if (!is_null($conflictType) && !in_array($conflictType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'conflictType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['conflictType'] = $conflictType;

        return $this;
    }

    /**
     * Gets mergeBaseCommit
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef
     */
    public function getMergeBaseCommit()
    {
        return $this->container['mergeBaseCommit'];
    }

    /**
     * Sets mergeBaseCommit
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef $mergeBaseCommit mergeBaseCommit
     *
     * @return $this
     */
    public function setMergeBaseCommit($mergeBaseCommit)
    {
        $this->container['mergeBaseCommit'] = $mergeBaseCommit;

        return $this;
    }

    /**
     * Gets mergeOrigin
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitMergeOriginRef
     */
    public function getMergeOrigin()
    {
        return $this->container['mergeOrigin'];
    }

    /**
     * Sets mergeOrigin
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitMergeOriginRef $mergeOrigin mergeOrigin
     *
     * @return $this
     */
    public function setMergeOrigin($mergeOrigin)
    {
        $this->container['mergeOrigin'] = $mergeOrigin;

        return $this;
    }

    /**
     * Gets mergeSourceCommit
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef
     */
    public function getMergeSourceCommit()
    {
        return $this->container['mergeSourceCommit'];
    }

    /**
     * Sets mergeSourceCommit
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef $mergeSourceCommit mergeSourceCommit
     *
     * @return $this
     */
    public function setMergeSourceCommit($mergeSourceCommit)
    {
        $this->container['mergeSourceCommit'] = $mergeSourceCommit;

        return $this;
    }

    /**
     * Gets mergeTargetCommit
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef
     */
    public function getMergeTargetCommit()
    {
        return $this->container['mergeTargetCommit'];
    }

    /**
     * Sets mergeTargetCommit
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef $mergeTargetCommit mergeTargetCommit
     *
     * @return $this
     */
    public function setMergeTargetCommit($mergeTargetCommit)
    {
        $this->container['mergeTargetCommit'] = $mergeTargetCommit;

        return $this;
    }

    /**
     * Gets resolutionError
     *
     * @return string
     */
    public function getResolutionError()
    {
        return $this->container['resolutionError'];
    }

    /**
     * Sets resolutionError
     *
     * @param string $resolutionError resolutionError
     *
     * @return $this
     */
    public function setResolutionError($resolutionError)
    {
        $allowedValues = $this->getResolutionErrorAllowableValues();
        if (!is_null($resolutionError) && !in_array($resolutionError, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'resolutionError', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resolutionError'] = $resolutionError;

        return $this;
    }

    /**
     * Gets resolutionStatus
     *
     * @return string
     */
    public function getResolutionStatus()
    {
        return $this->container['resolutionStatus'];
    }

    /**
     * Sets resolutionStatus
     *
     * @param string $resolutionStatus resolutionStatus
     *
     * @return $this
     */
    public function setResolutionStatus($resolutionStatus)
    {
        $allowedValues = $this->getResolutionStatusAllowableValues();
        if (!is_null($resolutionStatus) && !in_array($resolutionStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'resolutionStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resolutionStatus'] = $resolutionStatus;

        return $this;
    }

    /**
     * Gets resolvedBy
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\IdentityRef
     */
    public function getResolvedBy()
    {
        return $this->container['resolvedBy'];
    }

    /**
     * Sets resolvedBy
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\IdentityRef $resolvedBy resolvedBy
     *
     * @return $this
     */
    public function setResolvedBy($resolvedBy)
    {
        $this->container['resolvedBy'] = $resolvedBy;

        return $this;
    }

    /**
     * Gets resolvedDate
     *
     * @return \DateTime
     */
    public function getResolvedDate()
    {
        return $this->container['resolvedDate'];
    }

    /**
     * Sets resolvedDate
     *
     * @param \DateTime $resolvedDate resolvedDate
     *
     * @return $this
     */
    public function setResolvedDate($resolvedDate)
    {
        $this->container['resolvedDate'] = $resolvedDate;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets baseBlob
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitBlobRef
     */
    public function getBaseBlob()
    {
        return $this->container['baseBlob'];
    }

    /**
     * Sets baseBlob
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitBlobRef $baseBlob baseBlob
     *
     * @return $this
     */
    public function setBaseBlob($baseBlob)
    {
        $this->container['baseBlob'] = $baseBlob;

        return $this;
    }

    /**
     * Gets resolution
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitResolutionRename1to2
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitResolutionRename1to2 $resolution resolution
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets sourceBlob
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitBlobRef
     */
    public function getSourceBlob()
    {
        return $this->container['sourceBlob'];
    }

    /**
     * Sets sourceBlob
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitBlobRef $sourceBlob sourceBlob
     *
     * @return $this
     */
    public function setSourceBlob($sourceBlob)
    {
        $this->container['sourceBlob'] = $sourceBlob;

        return $this;
    }

    /**
     * Gets sourceNewPath
     *
     * @return string
     */
    public function getSourceNewPath()
    {
        return $this->container['sourceNewPath'];
    }

    /**
     * Sets sourceNewPath
     *
     * @param string $sourceNewPath sourceNewPath
     *
     * @return $this
     */
    public function setSourceNewPath($sourceNewPath)
    {
        $this->container['sourceNewPath'] = $sourceNewPath;

        return $this;
    }

    /**
     * Gets targetBlob
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitBlobRef
     */
    public function getTargetBlob()
    {
        return $this->container['targetBlob'];
    }

    /**
     * Sets targetBlob
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitBlobRef $targetBlob targetBlob
     *
     * @return $this
     */
    public function setTargetBlob($targetBlob)
    {
        $this->container['targetBlob'] = $targetBlob;

        return $this;
    }

    /**
     * Gets targetNewPath
     *
     * @return string
     */
    public function getTargetNewPath()
    {
        return $this->container['targetNewPath'];
    }

    /**
     * Sets targetNewPath
     *
     * @param string $targetNewPath targetNewPath
     *
     * @return $this
     */
    public function setTargetNewPath($targetNewPath)
    {
        $this->container['targetNewPath'] = $targetNewPath;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


