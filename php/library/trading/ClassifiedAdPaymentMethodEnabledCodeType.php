<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ClassifiedAdPaymentMethodEnabledCodeType extends EbatNs_FacetType
{
	const CodeType_EnabledWithCheckout = 'EnabledWithCheckout';
	const CodeType_EnabledWithoutCheckout = 'EnabledWithoutCheckout';
	const CodeType_NotSupported = 'NotSupported';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ClassifiedAdPaymentMethodEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ClassifiedAdPaymentMethodEnabledCodeType = new ClassifiedAdPaymentMethodEnabledCodeType();
?>