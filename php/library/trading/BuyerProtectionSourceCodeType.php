<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class BuyerProtectionSourceCodeType extends EbatNs_FacetType
{
	const CodeType_eBay = 'eBay';
	const CodeType_PayPal = 'PayPal';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BuyerProtectionSourceCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BuyerProtectionSourceCodeType = new BuyerProtectionSourceCodeType();
?>