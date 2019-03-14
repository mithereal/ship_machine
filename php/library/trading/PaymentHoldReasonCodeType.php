<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class PaymentHoldReasonCodeType extends EbatNs_FacetType
{
	const CodeType_NewSeller = 'NewSeller';
	const CodeType_BelowStandardSeller = 'BelowStandardSeller';
	const CodeType_EbpCaseOpen = 'EbpCaseOpen';
	const CodeType_ReinstatementAfterSuspension = 'ReinstatementAfterSuspension';
	const CodeType_CasualSeller = 'CasualSeller';
	const CodeType_NewPaypalAccountAdded = 'NewPaypalAccountAdded';
	const CodeType_NotAvailable = 'NotAvailable';
	const CodeType_SellerIsOnBlackList = 'SellerIsOnBlackList';
	const CodeType_Other = 'Other';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PaymentHoldReasonCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PaymentHoldReasonCodeType = new PaymentHoldReasonCodeType();
?>