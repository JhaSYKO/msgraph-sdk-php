<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationClass File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* EducationClass class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EducationClass extends Entity
{
    /**
    * Gets the displayName
    * Name of the class.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Name of the class.
    *
    * @param string $val The displayName
    *
    * @return EducationClass
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the mailNickname
    * Mail name for sending email to all members, if this is enabled.
    *
    * @return string The mailNickname
    */
    public function getMailNickname()
    {
        if (array_key_exists("mailNickname", $this->_propDict)) {
            return $this->_propDict["mailNickname"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mailNickname
    * Mail name for sending email to all members, if this is enabled.
    *
    * @param string $val The mailNickname
    *
    * @return EducationClass
    */
    public function setMailNickname($val)
    {
        $this->_propDict["mailNickname"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Description of the class.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Description of the class.
    *
    * @param string $val The description
    *
    * @return EducationClass
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * Entity who created the class
    *
    * @return IdentitySet The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "Microsoft\Graph\Beta\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    * Entity who created the class
    *
    * @param IdentitySet $val The createdBy
    *
    * @return EducationClass
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the classCode
    * Class code used by the school to identify the class.
    *
    * @return string The classCode
    */
    public function getClassCode()
    {
        if (array_key_exists("classCode", $this->_propDict)) {
            return $this->_propDict["classCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the classCode
    * Class code used by the school to identify the class.
    *
    * @param string $val The classCode
    *
    * @return EducationClass
    */
    public function setClassCode($val)
    {
        $this->_propDict["classCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalName
    * Name of the class in the syncing system.
    *
    * @return string The externalName
    */
    public function getExternalName()
    {
        if (array_key_exists("externalName", $this->_propDict)) {
            return $this->_propDict["externalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalName
    * Name of the class in the syncing system.
    *
    * @param string $val The externalName
    *
    * @return EducationClass
    */
    public function setExternalName($val)
    {
        $this->_propDict["externalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalId
    * ID of the class from the syncing system.
    *
    * @return string The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalId
    * ID of the class from the syncing system.
    *
    * @param string $val The externalId
    *
    * @return EducationClass
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalSource
    * How this class was created. Possible values are: sis, manual, unknownFutureValue.
    *
    * @return EducationExternalSource The externalSource
    */
    public function getExternalSource()
    {
        if (array_key_exists("externalSource", $this->_propDict)) {
            if (is_a($this->_propDict["externalSource"], "Microsoft\Graph\Beta\Model\EducationExternalSource")) {
                return $this->_propDict["externalSource"];
            } else {
                $this->_propDict["externalSource"] = new EducationExternalSource($this->_propDict["externalSource"]);
                return $this->_propDict["externalSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the externalSource
    * How this class was created. Possible values are: sis, manual, unknownFutureValue.
    *
    * @param EducationExternalSource $val The externalSource
    *
    * @return EducationClass
    */
    public function setExternalSource($val)
    {
        $this->_propDict["externalSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the term
    * Term for this class.
    *
    * @return EducationTerm The term
    */
    public function getTerm()
    {
        if (array_key_exists("term", $this->_propDict)) {
            if (is_a($this->_propDict["term"], "Microsoft\Graph\Beta\Model\EducationTerm")) {
                return $this->_propDict["term"];
            } else {
                $this->_propDict["term"] = new EducationTerm($this->_propDict["term"]);
                return $this->_propDict["term"];
            }
        }
        return null;
    }
    
    /**
    * Sets the term
    * Term for this class.
    *
    * @param EducationTerm $val The term
    *
    * @return EducationClass
    */
    public function setTerm($val)
    {
        $this->_propDict["term"] = $val;
        return $this;
    }
    

     /** 
     * Gets the schools
    * All schools that this class is associated with. Nullable.
     *
     * @return array The schools
     */
    public function getSchools()
    {
        if (array_key_exists("schools", $this->_propDict)) {
           return $this->_propDict["schools"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the schools
    * All schools that this class is associated with. Nullable.
    *
    * @param EducationSchool $val The schools
    *
    * @return EducationClass
    */
    public function setSchools($val)
    {
		$this->_propDict["schools"] = $val;
        return $this;
    }
    

     /** 
     * Gets the members
    * All users in the class. Nullable.
     *
     * @return array The members
     */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict)) {
           return $this->_propDict["members"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the members
    * All users in the class. Nullable.
    *
    * @param EducationUser $val The members
    *
    * @return EducationClass
    */
    public function setMembers($val)
    {
		$this->_propDict["members"] = $val;
        return $this;
    }
    

     /** 
     * Gets the teachers
    * All teachers in the class. Nullable.
     *
     * @return array The teachers
     */
    public function getTeachers()
    {
        if (array_key_exists("teachers", $this->_propDict)) {
           return $this->_propDict["teachers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the teachers
    * All teachers in the class. Nullable.
    *
    * @param EducationUser $val The teachers
    *
    * @return EducationClass
    */
    public function setTeachers($val)
    {
		$this->_propDict["teachers"] = $val;
        return $this;
    }
    
    /**
    * Gets the group
    *
    * @return Group The group
    */
    public function getGroup()
    {
        if (array_key_exists("group", $this->_propDict)) {
            if (is_a($this->_propDict["group"], "Microsoft\Graph\Beta\Model\Group")) {
                return $this->_propDict["group"];
            } else {
                $this->_propDict["group"] = new Group($this->_propDict["group"]);
                return $this->_propDict["group"];
            }
        }
        return null;
    }
    
    /**
    * Sets the group
    *
    * @param Group $val The group
    *
    * @return EducationClass
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    *
    * @param EducationAssignment $val The assignments
    *
    * @return EducationClass
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
}