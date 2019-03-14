<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class MinimumAdvertisedPriceExposureCodeType extends EbatNs_FacetType
{
	const CodeType_PreCheckout = 'PreCheckout';
	const CodeType_DuringCheckout = 'DuringCheckout';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MinimumAdvertisedPriceExposureCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MinimumAdvertisedPriceExposureCodeType = new MinimumAdvertisedPriceExposureCodeType();
?>