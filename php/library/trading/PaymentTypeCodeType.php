<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class PaymentTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Sale = 'Sale';
	const CodeType_Refund = 'Refund';
	const CodeType_SellerDeniedPayment = 'SellerDeniedPayment';
	const CodeType_AdminReversal = 'AdminReversal';
	const CodeType_AllOther = 'AllOther';
	const CodeType_RentalExtension = 'RentalExtension';
	const CodeType_RentalBuyout = 'RentalBuyout';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PaymentTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PaymentTypeCodeType = new PaymentTypeCodeType();
?>