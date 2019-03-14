<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class SellingManagerAutoRelistOptionCodeType extends EbatNs_FacetType
{
	const CodeType_RelistImmediately = 'RelistImmediately';
	const CodeType_RelistAfterDaysHours = 'RelistAfterDaysHours';
	const CodeType_RelistAtSpecificTimeOfDay = 'RelistAtSpecificTimeOfDay';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerAutoRelistOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerAutoRelistOptionCodeType = new SellingManagerAutoRelistOptionCodeType();
?>