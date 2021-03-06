<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class HitCounterCodeType extends EbatNs_FacetType
{
	const CodeType_NoHitCounter = 'NoHitCounter';
	const CodeType_HonestyStyle = 'HonestyStyle';
	const CodeType_GreenLED = 'GreenLED';
	const CodeType_Hidden = 'Hidden';
	const CodeType_BasicStyle = 'BasicStyle';
	const CodeType_RetroStyle = 'RetroStyle';
	const CodeType_HiddenStyle = 'HiddenStyle';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('HitCounterCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_HitCounterCodeType = new HitCounterCodeType();
?>