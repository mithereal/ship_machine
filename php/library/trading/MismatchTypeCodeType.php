<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class MismatchTypeCodeType extends EbatNs_FacetType
{
	const CodeType_OverPayment = 'OverPayment';
	const CodeType_UnderPayment = 'UnderPayment';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MismatchTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MismatchTypeCodeType = new MismatchTypeCodeType();
?>