<?php

/**
 * Generated 2019-10-05T21:24:24+00:00
*/
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Represents properties that can be set when creating a field.
 */
class FieldCreationInformation extends ClientValue
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getServerTypeName()
    {
        return "SP.Field";
    }

    /**
     * @var bool
     */
    public $CanBeDeleted;
    /**
     * @var string
     */
    public $DefaultValue;
    /**
     * @var string
     */
    public $Title;
    /**
     * @var string
     */
    public $Description;
    /**
     * @var int
     */
    public $FieldTypeKind;
    public $Choices;
    public $IsCompactName;
    public $LookupFieldName;
    public $LookupListId;
    public $LookupWebId;
    public $Required;
}