<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class PromotionalSaleTypeCodeType extends EbatNs_FacetType
{
	const CodeType_PriceDiscountOnly = 'PriceDiscountOnly';
	const CodeType_FreeShippingOnly = 'FreeShippingOnly';
	const CodeType_PriceDiscountAndFreeShipping = 'PriceDiscountAndFreeShipping';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PromotionalSaleTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PromotionalSaleTypeCodeType = new PromotionalSaleTypeCodeType();
?>