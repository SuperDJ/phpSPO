<?php

/**
 * Generated 2021-03-12T16:05:00+00:00 16.0.21103.12002
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Specifies 
 * the properties used to create a new list view.
 */
class ViewCreationInformation extends ClientValue
{
    /**
     * @var string
     */
    public $Title;
    /**
     * @var bool
     */
    public $Paged;
    /**
     * @var string
     */
    public $PersonalView;
    /**
     * @var string
     */
    public $Query;
    /**
     * @var int
     */
    public $RowLimit;
    /**
     * @var bool
     */
    public $SetAsDefaultView;
    /**
     * @var string
     */
    public $ViewFields;
    /**
     * @var int
     */
    public $ViewTypeKind;
    public function __construct()
    {
        $this->RowLimit = 30;
        parent::__construct();
    }

    public function getServerTypeName()
    {
        return "SP.View";
    }

    public $baseViewId;
    /**
     * @var string
     */
    public $ViewData;
    /**
     * @var string
     */
    public $ViewType2;
    /**
     * @var string
     */
    public $CalendarViewStyles;
    /**
     * @var string
     */
    public $AssociatedContentTypeId;
    /**
     * @var string
     */
    public $ColumnWidth;
}