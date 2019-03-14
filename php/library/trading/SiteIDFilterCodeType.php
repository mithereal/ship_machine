<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class SiteIDFilterCodeType extends EbatNs_FacetType
{
	const CodeType_ListedInCurrencyImplied = 'ListedInCurrencyImplied';
	const CodeType_LocatedInCountryImplied = 'LocatedInCountryImplied';
	const CodeType_AvailableInCountryImplied = 'AvailableInCountryImplied';
	const CodeType_SiteImplied = 'SiteImplied';
	const CodeType_BelgiumListing = 'BelgiumListing';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SiteIDFilterCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SiteIDFilterCodeType = new SiteIDFilterCodeType();
?>