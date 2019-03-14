<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class PaymentStatusCodeType extends EbatNs_FacetType
{
	const CodeType_NoPaymentFailure = 'NoPaymentFailure';
	const CodeType_BuyerECheckBounced = 'BuyerECheckBounced';
	const CodeType_BuyerCreditCardFailed = 'BuyerCreditCardFailed';
	const CodeType_BuyerFailedPaymentReportedBySeller = 'BuyerFailedPaymentReportedBySeller';
	const CodeType_PayPalPaymentInProcess = 'PayPalPaymentInProcess';
	const CodeType_PaymentInProcess = 'PaymentInProcess';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PaymentStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PaymentStatusCodeType = new PaymentStatusCodeType();
?>