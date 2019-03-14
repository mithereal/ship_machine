<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class InventoryTrackingMethodCodeType extends EbatNs_FacetType
{
	const CodeType_ItemID = 'ItemID';
	const CodeType_SKU = 'SKU';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('InventoryTrackingMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_InventoryTrackingMethodCodeType = new InventoryTrackingMethodCodeType();
?>