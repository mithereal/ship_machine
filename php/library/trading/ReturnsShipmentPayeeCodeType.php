<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ReturnsShipmentPayeeCodeType extends EbatNs_FacetType
{
	const CodeType_Buyer = 'Buyer';
	const CodeType_Seller = 'Seller';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ReturnsShipmentPayeeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ReturnsShipmentPayeeCodeType = new ReturnsShipmentPayeeCodeType();
?>