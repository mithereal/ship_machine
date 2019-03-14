<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ItemCompatibilityEnabledCodeType extends EbatNs_FacetType
{
	const CodeType_Disabled = 'Disabled';
	const CodeType_ByApplication = 'ByApplication';
	const CodeType_BySpecification = 'BySpecification';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ItemCompatibilityEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ItemCompatibilityEnabledCodeType = new ItemCompatibilityEnabledCodeType();
?>