<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class SummaryWindowPeriodCodeType extends EbatNs_FacetType
{
	const CodeType_Last24Hours = 'Last24Hours';
	const CodeType_Last7Days = 'Last7Days';
	const CodeType_Last31Days = 'Last31Days';
	const CodeType_CurrentWeek = 'CurrentWeek';
	const CodeType_LastWeek = 'LastWeek';
	const CodeType_CurrentMonth = 'CurrentMonth';
	const CodeType_LastMonth = 'LastMonth';
	const CodeType_Last60Days = 'Last60Days';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SummaryWindowPeriodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SummaryWindowPeriodCodeType = new SummaryWindowPeriodCodeType();
?>