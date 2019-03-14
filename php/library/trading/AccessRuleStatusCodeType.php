<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class AccessRuleStatusCodeType extends EbatNs_FacetType
{
	const CodeType_RuleOff = 'RuleOff';
	const CodeType_RuleOn = 'RuleOn';
	const CodeType_ApplicationBlocked = 'ApplicationBlocked';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AccessRuleStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AccessRuleStatusCodeType = new AccessRuleStatusCodeType();
?>