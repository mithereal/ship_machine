<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class AutomatedLeaveFeedbackEventCodeType extends EbatNs_FacetType
{
	const CodeType_PositiveFeedbackReceived = 'PositiveFeedbackReceived';
	const CodeType_PaymentReceived = 'PaymentReceived';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AutomatedLeaveFeedbackEventCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AutomatedLeaveFeedbackEventCodeType = new AutomatedLeaveFeedbackEventCodeType();
?>