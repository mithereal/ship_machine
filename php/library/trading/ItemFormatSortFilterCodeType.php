<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ItemFormatSortFilterCodeType extends EbatNs_FacetType
{
	const CodeType_ShowAnyItems = 'ShowAnyItems';
	const CodeType_ShowItemsWithBINFirst = 'ShowItemsWithBINFirst';
	const CodeType_ShowOnlyItemsWithBIN = 'ShowOnlyItemsWithBIN';
	const CodeType_ShowOnlyStoreItems = 'ShowOnlyStoreItems';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ItemFormatSortFilterCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ItemFormatSortFilterCodeType = new ItemFormatSortFilterCodeType();
?>