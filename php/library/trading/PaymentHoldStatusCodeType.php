<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class PaymentHoldStatusCodeType extends EbatNs_FacetType
{
	const CodeType_PaymentReview = 'PaymentReview';
	const CodeType_MerchantHold = 'MerchantHold';
	const CodeType_Released = 'Released';
	const CodeType_None = 'None';
	const CodeType_NewSellerHold = 'NewSellerHold';
	const CodeType_PaymentHold = 'PaymentHold';
	const CodeType_ReleasePending = 'ReleasePending';
	const CodeType_ReleaseConfirmed = 'ReleaseConfirmed';
	const CodeType_ReleaseFailed = 'ReleaseFailed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PaymentHoldStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PaymentHoldStatusCodeType = new PaymentHoldStatusCodeType();
?>