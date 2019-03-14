<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class StoreItemListSortOrderCodeType extends EbatNs_FacetType
{
	const CodeType_EndingFirst = 'EndingFirst';
	const CodeType_NewlyListed = 'NewlyListed';
	const CodeType_LowestPriced = 'LowestPriced';
	const CodeType_HighestPriced = 'HighestPriced';
	const CodeType_LowestPricedPlusShipping = 'LowestPricedPlusShipping';
	const CodeType_HighestPricedPlusShipping = 'HighestPricedPlusShipping';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StoreItemListSortOrderCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StoreItemListSortOrderCodeType = new StoreItemListSortOrderCodeType();
?>