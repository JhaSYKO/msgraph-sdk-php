<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DirectoryDefinition File
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
* DirectoryDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DirectoryDefinition extends Entity
{
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return DirectoryDefinition
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return DirectoryDefinition
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the objects
    *
    * @return ObjectDefinition The objects
    */
    public function getObjects()
    {
        if (array_key_exists("objects", $this->_propDict)) {
            if (is_a($this->_propDict["objects"], "Microsoft\Graph\Beta\Model\ObjectDefinition")) {
                return $this->_propDict["objects"];
            } else {
                $this->_propDict["objects"] = new ObjectDefinition($this->_propDict["objects"]);
                return $this->_propDict["objects"];
            }
        }
        return null;
    }

    /**
    * Sets the objects
    *
    * @param ObjectDefinition $val The value to assign to the objects
    *
    * @return DirectoryDefinition The DirectoryDefinition
    */
    public function setObjects($val)
    {
        $this->_propDict["objects"] = $val;
         return $this;
    }
}