<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtection File
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
* WindowsInformationProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsInformationProtection extends ManagedAppPolicy
{
    /**
    * Gets the enforcementLevel
    *
    * @return WindowsInformationProtectionEnforcementLevel The enforcementLevel
    */
    public function getEnforcementLevel()
    {
        if (array_key_exists("enforcementLevel", $this->_propDict)) {
            if (is_a($this->_propDict["enforcementLevel"], "Microsoft\Graph\Beta\Model\WindowsInformationProtectionEnforcementLevel")) {
                return $this->_propDict["enforcementLevel"];
            } else {
                $this->_propDict["enforcementLevel"] = new WindowsInformationProtectionEnforcementLevel($this->_propDict["enforcementLevel"]);
                return $this->_propDict["enforcementLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the enforcementLevel
    *
    * @param WindowsInformationProtectionEnforcementLevel $val The enforcementLevel
    *
    * @return WindowsInformationProtection
    */
    public function setEnforcementLevel($val)
    {
        $this->_propDict["enforcementLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the enterpriseDomain
    *
    * @return string The enterpriseDomain
    */
    public function getEnterpriseDomain()
    {
        if (array_key_exists("enterpriseDomain", $this->_propDict)) {
            return $this->_propDict["enterpriseDomain"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseDomain
    *
    * @param string $val The enterpriseDomain
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseDomain($val)
    {
        $this->_propDict["enterpriseDomain"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enterpriseProtectedDomainNames
     *
     * @return array The enterpriseProtectedDomainNames
     */
    public function getEnterpriseProtectedDomainNames()
    {
        if (array_key_exists("enterpriseProtectedDomainNames", $this->_propDict)) {
           return $this->_propDict["enterpriseProtectedDomainNames"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the enterpriseProtectedDomainNames
    *
    * @param WindowsInformationProtectionResourceCollection $val The enterpriseProtectedDomainNames
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseProtectedDomainNames($val)
    {
		$this->_propDict["enterpriseProtectedDomainNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the protectionUnderLockConfigRequired
    *
    * @return bool The protectionUnderLockConfigRequired
    */
    public function getProtectionUnderLockConfigRequired()
    {
        if (array_key_exists("protectionUnderLockConfigRequired", $this->_propDict)) {
            return $this->_propDict["protectionUnderLockConfigRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the protectionUnderLockConfigRequired
    *
    * @param bool $val The protectionUnderLockConfigRequired
    *
    * @return WindowsInformationProtection
    */
    public function setProtectionUnderLockConfigRequired($val)
    {
        $this->_propDict["protectionUnderLockConfigRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the dataRecoveryCertificate
    *
    * @return WindowsInformationProtectionDataRecoveryCertificate The dataRecoveryCertificate
    */
    public function getDataRecoveryCertificate()
    {
        if (array_key_exists("dataRecoveryCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["dataRecoveryCertificate"], "Microsoft\Graph\Beta\Model\WindowsInformationProtectionDataRecoveryCertificate")) {
                return $this->_propDict["dataRecoveryCertificate"];
            } else {
                $this->_propDict["dataRecoveryCertificate"] = new WindowsInformationProtectionDataRecoveryCertificate($this->_propDict["dataRecoveryCertificate"]);
                return $this->_propDict["dataRecoveryCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dataRecoveryCertificate
    *
    * @param WindowsInformationProtectionDataRecoveryCertificate $val The dataRecoveryCertificate
    *
    * @return WindowsInformationProtection
    */
    public function setDataRecoveryCertificate($val)
    {
        $this->_propDict["dataRecoveryCertificate"] = $val;
        return $this;
    }
    
    /**
    * Gets the revokeOnUnenrollDisabled
    *
    * @return bool The revokeOnUnenrollDisabled
    */
    public function getRevokeOnUnenrollDisabled()
    {
        if (array_key_exists("revokeOnUnenrollDisabled", $this->_propDict)) {
            return $this->_propDict["revokeOnUnenrollDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the revokeOnUnenrollDisabled
    *
    * @param bool $val The revokeOnUnenrollDisabled
    *
    * @return WindowsInformationProtection
    */
    public function setRevokeOnUnenrollDisabled($val)
    {
        $this->_propDict["revokeOnUnenrollDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the rightsManagementServicesTemplateId
    *
    * @return string The rightsManagementServicesTemplateId
    */
    public function getRightsManagementServicesTemplateId()
    {
        if (array_key_exists("rightsManagementServicesTemplateId", $this->_propDict)) {
            return $this->_propDict["rightsManagementServicesTemplateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rightsManagementServicesTemplateId
    *
    * @param string $val The rightsManagementServicesTemplateId
    *
    * @return WindowsInformationProtection
    */
    public function setRightsManagementServicesTemplateId($val)
    {
        $this->_propDict["rightsManagementServicesTemplateId"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureRightsManagementServicesAllowed
    *
    * @return bool The azureRightsManagementServicesAllowed
    */
    public function getAzureRightsManagementServicesAllowed()
    {
        if (array_key_exists("azureRightsManagementServicesAllowed", $this->_propDict)) {
            return $this->_propDict["azureRightsManagementServicesAllowed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureRightsManagementServicesAllowed
    *
    * @param bool $val The azureRightsManagementServicesAllowed
    *
    * @return WindowsInformationProtection
    */
    public function setAzureRightsManagementServicesAllowed($val)
    {
        $this->_propDict["azureRightsManagementServicesAllowed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iconsVisible
    *
    * @return bool The iconsVisible
    */
    public function getIconsVisible()
    {
        if (array_key_exists("iconsVisible", $this->_propDict)) {
            return $this->_propDict["iconsVisible"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iconsVisible
    *
    * @param bool $val The iconsVisible
    *
    * @return WindowsInformationProtection
    */
    public function setIconsVisible($val)
    {
        $this->_propDict["iconsVisible"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the protectedApps
     *
     * @return array The protectedApps
     */
    public function getProtectedApps()
    {
        if (array_key_exists("protectedApps", $this->_propDict)) {
           return $this->_propDict["protectedApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the protectedApps
    *
    * @param WindowsInformationProtectionApp $val The protectedApps
    *
    * @return WindowsInformationProtection
    */
    public function setProtectedApps($val)
    {
		$this->_propDict["protectedApps"] = $val;
        return $this;
    }
    

     /** 
     * Gets the exemptApps
     *
     * @return array The exemptApps
     */
    public function getExemptApps()
    {
        if (array_key_exists("exemptApps", $this->_propDict)) {
           return $this->_propDict["exemptApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the exemptApps
    *
    * @param WindowsInformationProtectionApp $val The exemptApps
    *
    * @return WindowsInformationProtection
    */
    public function setExemptApps($val)
    {
		$this->_propDict["exemptApps"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enterpriseNetworkDomainNames
     *
     * @return array The enterpriseNetworkDomainNames
     */
    public function getEnterpriseNetworkDomainNames()
    {
        if (array_key_exists("enterpriseNetworkDomainNames", $this->_propDict)) {
           return $this->_propDict["enterpriseNetworkDomainNames"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the enterpriseNetworkDomainNames
    *
    * @param WindowsInformationProtectionResourceCollection $val The enterpriseNetworkDomainNames
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseNetworkDomainNames($val)
    {
		$this->_propDict["enterpriseNetworkDomainNames"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enterpriseProxiedDomains
     *
     * @return array The enterpriseProxiedDomains
     */
    public function getEnterpriseProxiedDomains()
    {
        if (array_key_exists("enterpriseProxiedDomains", $this->_propDict)) {
           return $this->_propDict["enterpriseProxiedDomains"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the enterpriseProxiedDomains
    *
    * @param WindowsInformationProtectionProxiedDomainCollection $val The enterpriseProxiedDomains
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseProxiedDomains($val)
    {
		$this->_propDict["enterpriseProxiedDomains"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enterpriseIPRanges
     *
     * @return array The enterpriseIPRanges
     */
    public function getEnterpriseIPRanges()
    {
        if (array_key_exists("enterpriseIPRanges", $this->_propDict)) {
           return $this->_propDict["enterpriseIPRanges"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the enterpriseIPRanges
    *
    * @param WindowsInformationProtectionIPRangeCollection $val The enterpriseIPRanges
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseIPRanges($val)
    {
		$this->_propDict["enterpriseIPRanges"] = $val;
        return $this;
    }
    
    /**
    * Gets the enterpriseIPRangesAreAuthoritative
    *
    * @return bool The enterpriseIPRangesAreAuthoritative
    */
    public function getEnterpriseIPRangesAreAuthoritative()
    {
        if (array_key_exists("enterpriseIPRangesAreAuthoritative", $this->_propDict)) {
            return $this->_propDict["enterpriseIPRangesAreAuthoritative"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseIPRangesAreAuthoritative
    *
    * @param bool $val The enterpriseIPRangesAreAuthoritative
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseIPRangesAreAuthoritative($val)
    {
        $this->_propDict["enterpriseIPRangesAreAuthoritative"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the enterpriseProxyServers
     *
     * @return array The enterpriseProxyServers
     */
    public function getEnterpriseProxyServers()
    {
        if (array_key_exists("enterpriseProxyServers", $this->_propDict)) {
           return $this->_propDict["enterpriseProxyServers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the enterpriseProxyServers
    *
    * @param WindowsInformationProtectionResourceCollection $val The enterpriseProxyServers
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseProxyServers($val)
    {
		$this->_propDict["enterpriseProxyServers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enterpriseInternalProxyServers
     *
     * @return array The enterpriseInternalProxyServers
     */
    public function getEnterpriseInternalProxyServers()
    {
        if (array_key_exists("enterpriseInternalProxyServers", $this->_propDict)) {
           return $this->_propDict["enterpriseInternalProxyServers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the enterpriseInternalProxyServers
    *
    * @param WindowsInformationProtectionResourceCollection $val The enterpriseInternalProxyServers
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseInternalProxyServers($val)
    {
		$this->_propDict["enterpriseInternalProxyServers"] = $val;
        return $this;
    }
    
    /**
    * Gets the enterpriseProxyServersAreAuthoritative
    *
    * @return bool The enterpriseProxyServersAreAuthoritative
    */
    public function getEnterpriseProxyServersAreAuthoritative()
    {
        if (array_key_exists("enterpriseProxyServersAreAuthoritative", $this->_propDict)) {
            return $this->_propDict["enterpriseProxyServersAreAuthoritative"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseProxyServersAreAuthoritative
    *
    * @param bool $val The enterpriseProxyServersAreAuthoritative
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseProxyServersAreAuthoritative($val)
    {
        $this->_propDict["enterpriseProxyServersAreAuthoritative"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the neutralDomainResources
     *
     * @return array The neutralDomainResources
     */
    public function getNeutralDomainResources()
    {
        if (array_key_exists("neutralDomainResources", $this->_propDict)) {
           return $this->_propDict["neutralDomainResources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the neutralDomainResources
    *
    * @param WindowsInformationProtectionResourceCollection $val The neutralDomainResources
    *
    * @return WindowsInformationProtection
    */
    public function setNeutralDomainResources($val)
    {
		$this->_propDict["neutralDomainResources"] = $val;
        return $this;
    }
    
    /**
    * Gets the indexingEncryptedStoresOrItemsBlocked
    *
    * @return bool The indexingEncryptedStoresOrItemsBlocked
    */
    public function getIndexingEncryptedStoresOrItemsBlocked()
    {
        if (array_key_exists("indexingEncryptedStoresOrItemsBlocked", $this->_propDict)) {
            return $this->_propDict["indexingEncryptedStoresOrItemsBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the indexingEncryptedStoresOrItemsBlocked
    *
    * @param bool $val The indexingEncryptedStoresOrItemsBlocked
    *
    * @return WindowsInformationProtection
    */
    public function setIndexingEncryptedStoresOrItemsBlocked($val)
    {
        $this->_propDict["indexingEncryptedStoresOrItemsBlocked"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the smbAutoEncryptedFileExtensions
     *
     * @return array The smbAutoEncryptedFileExtensions
     */
    public function getSmbAutoEncryptedFileExtensions()
    {
        if (array_key_exists("smbAutoEncryptedFileExtensions", $this->_propDict)) {
           return $this->_propDict["smbAutoEncryptedFileExtensions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the smbAutoEncryptedFileExtensions
    *
    * @param WindowsInformationProtectionResourceCollection $val The smbAutoEncryptedFileExtensions
    *
    * @return WindowsInformationProtection
    */
    public function setSmbAutoEncryptedFileExtensions($val)
    {
		$this->_propDict["smbAutoEncryptedFileExtensions"] = $val;
        return $this;
    }
    
    /**
    * Gets the isAssigned
    *
    * @return bool The isAssigned
    */
    public function getIsAssigned()
    {
        if (array_key_exists("isAssigned", $this->_propDict)) {
            return $this->_propDict["isAssigned"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAssigned
    *
    * @param bool $val The isAssigned
    *
    * @return WindowsInformationProtection
    */
    public function setIsAssigned($val)
    {
        $this->_propDict["isAssigned"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the protectedAppLockerFiles
     *
     * @return array The protectedAppLockerFiles
     */
    public function getProtectedAppLockerFiles()
    {
        if (array_key_exists("protectedAppLockerFiles", $this->_propDict)) {
           return $this->_propDict["protectedAppLockerFiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the protectedAppLockerFiles
    *
    * @param WindowsInformationProtectionAppLockerFile $val The protectedAppLockerFiles
    *
    * @return WindowsInformationProtection
    */
    public function setProtectedAppLockerFiles($val)
    {
		$this->_propDict["protectedAppLockerFiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the exemptAppLockerFiles
     *
     * @return array The exemptAppLockerFiles
     */
    public function getExemptAppLockerFiles()
    {
        if (array_key_exists("exemptAppLockerFiles", $this->_propDict)) {
           return $this->_propDict["exemptAppLockerFiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the exemptAppLockerFiles
    *
    * @param WindowsInformationProtectionAppLockerFile $val The exemptAppLockerFiles
    *
    * @return WindowsInformationProtection
    */
    public function setExemptAppLockerFiles($val)
    {
		$this->_propDict["exemptAppLockerFiles"] = $val;
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
    * @param TargetedManagedAppPolicyAssignment $val The assignments
    *
    * @return WindowsInformationProtection
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
}