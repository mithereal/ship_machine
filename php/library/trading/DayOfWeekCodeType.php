<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class DayOfWeekCodeType extends EbatNs_FacetType
{
	const CodeType_Sunday = 'Sunday';
	const CodeType_Monday = 'Monday';
	const CodeType_Tuesday = 'Tuesday';
	const CodeType_Wednesday = 'Wednesday';
	const CodeType_Thursday = 'Thursday';
	const CodeType_Friday = 'Friday';
	const CodeType_Saturday = 'Saturday';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DayOfWeekCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DayOfWeekCodeType = new DayOfWeekCodeType();
?>