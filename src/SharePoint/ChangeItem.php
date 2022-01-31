<?php

/**
 * Generated 2020-08-19T18:22:34+00:00 16.0.20405.12008
 */
namespace Office365\SharePoint;

/**
 * Specifies 
 * a change on an item. The ActivityType, ContentTypeId, EditorLoginName, 
 * FileSystemObjectType, FileType, Hidden, ListTemplate, ListTitle, RelativeTime 
 * and Title properties are not included in the default scalar property set 
 * for this type.
 */
class ChangeItem extends Change
{
    /**
     * Returns 
     * activity type defined in section 3.2.5.464
     * @return integer
     */
    public function getActivityType()
    {
        return $this->getProperty("ActivityType");
    }

    /**
     * Sets
     * activity type defined in section 3.2.5.464
     *
     * @return self
     * @var integer
     */
    public function setActivityType($value)
    {
        return $this->setProperty("ActivityType", $value, true);
    }
    /**
     * Specifies 
     * an identifier for the content type as 
     * specified in [MS-WSSTS] 
     * section 2.1.2.8.1.
     * @return ContentTypeId
     */
    public function getContentTypeId()
    {
        if (!$this->isPropertyAvailable("ContentTypeId")) {
            return null;
        }
        return $this->getProperty("ContentTypeId");
    }
    /**
     * Specifies 
     * an identifier for the content type as 
     * specified in [MS-WSSTS] 
     * section 2.1.2.8.1.
     * @var ContentTypeId
     */
    public function setContentTypeId($value)
    {
        $this->setProperty("ContentTypeId", $value, true);
    }
    /**
     * Specifies 
     * the editor of the changed item.
     * @return string
     */
    public function getEditor()
    {
        if (!$this->isPropertyAvailable("Editor")) {
            return null;
        }
        return $this->getProperty("Editor");
    }
    /**
     * Specifies 
     * the editor of the changed item.
     * @var string
     */
    public function setEditor($value)
    {
        $this->setProperty("Editor", $value, true);
    }
    /**
     * Returns 
     * the email corresponding to '
     * @return string
     */
    public function getEditorEmailHint()
    {
        if (!$this->isPropertyAvailable("EditorEmailHint")) {
            return null;
        }
        return $this->getProperty("EditorEmailHint");
    }
    /**
     * Returns 
     * the email corresponding to '
     * @var string
     */
    public function setEditorEmailHint($value)
    {
        $this->setProperty("EditorEmailHint", $value, true);
    }
    /**
     * Returns login 
     * name of the Editor.
     * @return string
     */
    public function getEditorLoginName()
    {
        if (!$this->isPropertyAvailable("EditorLoginName")) {
            return null;
        }
        return $this->getProperty("EditorLoginName");
    }
    /**
     * Returns login 
     * name of the Editor.
     * @var string
     */
    public function setEditorLoginName($value)
    {
        $this->setProperty("EditorLoginName", $value, true);
    }
    /**
     * Returns 
     * the list 
     * item’s object type in file system.
     * @return integer
     */
    public function getFileSystemObjectType()
    {
        if (!$this->isPropertyAvailable("FileSystemObjectType")) {
            return null;
        }
        return $this->getProperty("FileSystemObjectType");
    }
    /**
     * Returns 
     * the list 
     * item’s object type in file system.
     * @var integer
     */
    public function setFileSystemObjectType($value)
    {
        $this->setProperty("FileSystemObjectType", $value, true);
    }
    /**
     * Returns 
     * the list 
     * item’sfile type.
     * @return string
     */
    public function getFileType()
    {
        if (!$this->isPropertyAvailable("FileType")) {
            return null;
        }
        return $this->getProperty("FileType");
    }
    /**
     * Returns 
     * the list 
     * item’sfile type.
     * @var string
     */
    public function setFileType($value)
    {
        $this->setProperty("FileType", $value, true);
    }
    /**
     * @return string
     */
    public function getHashtag()
    {
        if (!$this->isPropertyAvailable("Hashtag")) {
            return null;
        }
        return $this->getProperty("Hashtag");
    }
    /**
     * @var string
     */
    public function setHashtag($value)
    {
        $this->setProperty("Hashtag", $value, true);
    }
    /**
     * Returns a Boolean 
     * value that indicates whether the parent list is a hidden 
     * list.
     * @return bool
     */
    public function getHidden()
    {
        if (!$this->isPropertyAvailable("Hidden")) {
            return null;
        }
        return $this->getProperty("Hidden");
    }
    /**
     * Returns a Boolean 
     * value that indicates whether the parent list is a hidden 
     * list.
     * @var bool
     */
    public function setHidden($value)
    {
        $this->setProperty("Hidden", $value, true);
    }
    /**
     * Identifies 
     * the changed item.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe item identifier in 
     *   the change fields (2) item of 
     *   the change collection is NULL.
     * @return integer
     */
    public function getItemId()
    {
        if (!$this->isPropertyAvailable("ItemId")) {
            return null;
        }
        return $this->getProperty("ItemId");
    }
    /**
     * Identifies 
     * the changed item.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe item identifier in 
     *   the change fields (2) item of 
     *   the change collection is NULL.
     * @var integer
     */
    public function setItemId($value)
    {
        $this->setProperty("ItemId", $value, true);
    }
    /**
     * Identifies 
     * the list 
     * that contains the changed item. In the case of 
     * a change that includes moving the item between lists, ListId MUST 
     * contain the value it had before the move.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe list identifier in 
     *   the change fields (2) item of 
     *   the change collection is NULL.
     * @return string
     */
    public function getListId()
    {
        if (!$this->isPropertyAvailable("ListId")) {
            return null;
        }
        return $this->getProperty("ListId");
    }
    /**
     * Identifies 
     * the list 
     * that contains the changed item. In the case of 
     * a change that includes moving the item between lists, ListId MUST 
     * contain the value it had before the move.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe list identifier in 
     *   the change fields (2) item of 
     *   the change collection is NULL.
     * @var string
     */
    public function setListId($value)
    {
        $this->setProperty("ListId", $value, true);
    }
    /**
     * An 
     * SPListTemplateType object that returns the list template type 
     * of the list.
     * @return integer
     */
    public function getListTemplate()
    {
        if (!$this->isPropertyAvailable("ListTemplate")) {
            return null;
        }
        return $this->getProperty("ListTemplate");
    }
    /**
     * An 
     * SPListTemplateType object that returns the list template type 
     * of the list.
     * @var integer
     */
    public function setListTemplate($value)
    {
        $this->setProperty("ListTemplate", $value, true);
    }
    /**
     * A string 
     * representing the title of the list.
     * @return string
     */
    public function getListTitle()
    {
        if (!$this->isPropertyAvailable("ListTitle")) {
            return null;
        }
        return $this->getProperty("ListTitle");
    }
    /**
     * A string 
     * representing the title of the list.
     * @var string
     */
    public function setListTitle($value)
    {
        $this->setProperty("ListTitle", $value, true);
    }
    /**
     * Specifies 
     * the server-relative 
     * URL of the item.
     * @return string
     */
    public function getServerRelativeUrl()
    {
        if (!$this->isPropertyAvailable("ServerRelativeUrl")) {
            return null;
        }
        return $this->getProperty("ServerRelativeUrl");
    }
    /**
     * Specifies 
     * the server-relative 
     * URL of the item.
     * @var string
     */
    public function setServerRelativeUrl($value)
    {
        $this->setProperty("ServerRelativeUrl", $value, true);
    }
    /**
     * Return the 
     * sharedBy User Information in sharing action for change log.
     * @return SharedWithUser
     */
    public function getSharedByUser()
    {
        if (!$this->isPropertyAvailable("SharedByUser")) {
            return null;
        }
        return $this->getProperty("SharedByUser");
    }
    /**
     * Return the 
     * sharedBy User Information in sharing action for change log.
     * @var SharedWithUser
     */
    public function setSharedByUser($value)
    {
        $this->setProperty("SharedByUser", $value, true);
    }
    /**
     * Returns 
     * the array of users that have been shared in sharing action for the change log.
     * @return SharedWithUserCollection
     */
    public function getSharedWithUsers()
    {
        if (!$this->isPropertyAvailable("SharedWithUsers")) {
            return null;
        }
        return $this->getProperty("SharedWithUsers");
    }
    /**
     * Returns 
     * the array of users that have been shared in sharing action for the change log.
     * @var SharedWithUserCollection
     */
    public function setSharedWithUsers($value)
    {
        $this->setProperty("SharedWithUsers", $value, true);
    }
    /**
     * A string 
     * representing the title of the list.
     * @return string
     */
    public function getTitle()
    {
        if (!$this->isPropertyAvailable("Title")) {
            return null;
        }
        return $this->getProperty("Title");
    }
    /**
     * A string 
     * representing the title of the list.
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * The Document 
     * identifier of the item.
     * @return string
     */
    public function getUniqueId()
    {
        if (!$this->isPropertyAvailable("UniqueId")) {
            return null;
        }
        return $this->getProperty("UniqueId");
    }
    /**
     * The Document 
     * identifier of the item.
     * @var string
     */
    public function setUniqueId($value)
    {
        $this->setProperty("UniqueId", $value, true);
    }
    /**
     * Identifies 
     * the site 
     * (2) that contains the changed item.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe site identifier in 
     *   the change fields (2) item of 
     *   the change collection is NULL.
     * @return string
     */
    public function getWebId()
    {
        if (!$this->isPropertyAvailable("WebId")) {
            return null;
        }
        return $this->getProperty("WebId");
    }
    /**
     * Identifies 
     * the site 
     * (2) that contains the changed item.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe site identifier in 
     *   the change fields (2) item of 
     *   the change collection is NULL.
     * @var string
     */
    public function setWebId($value)
    {
        $this->setProperty("WebId", $value, true);
    }
    /**
     * @return bool
     */
    public function getMoveWasForRecycle()
    {
        if (!$this->isPropertyAvailable("MoveWasForRecycle")) {
            return null;
        }
        return $this->getProperty("MoveWasForRecycle");
    }
    /**
     * @var bool
     */
    public function setMoveWasForRecycle($value)
    {
        $this->setProperty("MoveWasForRecycle", $value, true);
    }
    /**
     * @return bool
     */
    public function getMoveWasForRestore()
    {
        if (!$this->isPropertyAvailable("MoveWasForRestore")) {
            return null;
        }
        return $this->getProperty("MoveWasForRestore");
    }
    /**
     * @var bool
     */
    public function setMoveWasForRestore($value)
    {
        $this->setProperty("MoveWasForRestore", $value, true);
    }
}