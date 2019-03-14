<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class PaymentOptionsGroupEnabledCodeType extends EbatNs_FacetType
{
	const CodeType_eBayPaymentProcessEnabled = 'eBayPaymentProcessEnabled';
	const CodeType_NonStandardPaymentsEnabled = 'NonStandardPaymentsEnabled';
	const CodeType_eBayPaymentProcessExcluded = 'eBayPaymentProcessExcluded';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PaymentOptionsGroupEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PaymentOptionsGroupEnabledCodeType = new PaymentOptionsGroupEnabledCodeType();
?>