<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class RefundLineTypeCodeType extends EbatNs_FacetType
{
	const CodeType_PurchasePrice = 'PurchasePrice';
	const CodeType_ShippingPrice = 'ShippingPrice';
	const CodeType_Additional = 'Additional';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RefundLineTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_RefundLineTypeCodeType = new RefundLineTypeCodeType();
?>