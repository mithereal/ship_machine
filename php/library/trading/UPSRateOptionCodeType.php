<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class UPSRateOptionCodeType extends EbatNs_FacetType
{
	const CodeType_UPSDailyRates = 'UPSDailyRates';
	const CodeType_UPSOnDemandRates = 'UPSOnDemandRates';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('UPSRateOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_UPSRateOptionCodeType = new UPSRateOptionCodeType();
?>