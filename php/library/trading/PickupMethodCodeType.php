<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class PickupMethodCodeType extends EbatNs_FacetType
{
	const CodeType_InStorePickup = 'InStorePickup';
	const CodeType_PickUpDropOff = 'PickUpDropOff';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PickupMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PickupMethodCodeType = new PickupMethodCodeType();
?>