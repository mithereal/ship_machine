<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class DisplayPayNowButtonCodeType extends EbatNs_FacetType
{
	const CodeType_ShowPayNowButtonForAllPaymentMethods = 'ShowPayNowButtonForAllPaymentMethods';
	const CodeType_ShowPayNowButtonForPayPalOnly = 'ShowPayNowButtonForPayPalOnly';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DisplayPayNowButtonCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DisplayPayNowButtonCodeType = new DisplayPayNowButtonCodeType();
?>