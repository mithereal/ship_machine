<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class RefundingSourceTypeCodeType extends EbatNs_FacetType
{
	const CodeType_ScheduledPayout = 'ScheduledPayout';
	const CodeType_Paypal = 'Paypal';
	const CodeType_BankAccount = 'BankAccount';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RefundingSourceTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_RefundingSourceTypeCodeType = new RefundingSourceTypeCodeType();
?>