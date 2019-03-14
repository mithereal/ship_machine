<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class DiscountReasonCodeType extends EbatNs_FacetType
{
	const CodeType_SpecialOffer = 'SpecialOffer';
	const CodeType_Promotion = 'Promotion';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DiscountReasonCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DiscountReasonCodeType = new DiscountReasonCodeType();
?>