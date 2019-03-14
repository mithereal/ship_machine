<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class RefundSourceTypeCodeType extends EbatNs_FacetType
{
	const CodeType_StoreCredit = 'StoreCredit';
	const CodeType_PaymentRefund = 'PaymentRefund';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RefundSourceTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_RefundSourceTypeCodeType = new RefundSourceTypeCodeType();
?>