<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class GeneralPaymentMethodCodeType extends EbatNs_FacetType
{
	const CodeType_Other = 'Other';
	const CodeType_Echeck = 'Echeck';
	const CodeType_ACH = 'ACH';
	const CodeType_Creditcard = 'Creditcard';
	const CodeType_PayPalBalance = 'PayPalBalance';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('GeneralPaymentMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_GeneralPaymentMethodCodeType = new GeneralPaymentMethodCodeType();
?>