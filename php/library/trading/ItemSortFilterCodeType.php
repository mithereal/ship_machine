<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ItemSortFilterCodeType extends EbatNs_FacetType
{
	const CodeType_EndingLast = 'EndingLast';
	const CodeType_EndingSoonest = 'EndingSoonest';
	const CodeType_HighestPrice = 'HighestPrice';
	const CodeType_LowestPrice = 'LowestPrice';
	const CodeType_NewlyListed = 'NewlyListed';
	const CodeType_RandomlySelected = 'RandomlySelected';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ItemSortFilterCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ItemSortFilterCodeType = new ItemSortFilterCodeType();
?>