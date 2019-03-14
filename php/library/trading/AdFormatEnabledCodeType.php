<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class AdFormatEnabledCodeType extends EbatNs_FacetType
{
	const CodeType_Disabled = 'Disabled';
	const CodeType_Enabled = 'Enabled';
	const CodeType_Only = 'Only';
	const CodeType_ClassifiedAdEnabled = 'ClassifiedAdEnabled';
	const CodeType_ClassifiedAdOnly = 'ClassifiedAdOnly';
	const CodeType_LocalMarketBestOfferOnly = 'LocalMarketBestOfferOnly';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AdFormatEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AdFormatEnabledCodeType = new AdFormatEnabledCodeType();
?>