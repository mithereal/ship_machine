<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ReturnsRefundMethodCodeType extends EbatNs_FacetType
{
	const CodeType_MoneyBack = 'MoneyBack';
	const CodeType_MoneyBackorReplacement = 'MoneyBackorReplacement';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ReturnsRefundMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ReturnsRefundMethodCodeType = new ReturnsRefundMethodCodeType();
?>