<?php

/**
 * Generated 2020-10-07T07:21:11+00:00 16.0.20523.12005
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Specifies 
 * the properties of a list itemfield (2) 
 * and its value.
 */
class ListItemFormUpdateValue extends ClientValue
{
    /**
     * Specifies 
     * the error message result after validating the value for the field (2).
     * @var string
     */
    public $ErrorMessage;
    /**
     * Specifies 
     * the field 
     * internal name for a field (2).
     * @var string
     */
    public $FieldName;
    /**
     * Specifies 
     * a value for a field (2).
     * @var string
     */
    public $FieldValue;
    /**
     * Specifies 
     * whether there was an error result after validating the value for the field (2).
     * @var bool
     */
    public $HasException;
    /**
     * @var integer
     */
    public $ItemId;
    /**
     * @var integer
     */
    public $ErrorCode;
}