<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class FeedbackSummaryPeriodCodeType extends EbatNs_FacetType
{
	const CodeType_ThirtyDays = 'ThirtyDays';
	const CodeType_FiftyTwoWeeks = 'FiftyTwoWeeks';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('FeedbackSummaryPeriodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_FeedbackSummaryPeriodCodeType = new FeedbackSummaryPeriodCodeType();
?>