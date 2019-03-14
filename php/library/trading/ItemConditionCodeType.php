<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ItemConditionCodeType extends EbatNs_FacetType
{
	const CodeType_New = 'New';
	const CodeType_Used = 'Used';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ItemConditionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ItemConditionCodeType = new ItemConditionCodeType();
?>