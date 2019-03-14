<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ListingSubtypeCodeType extends EbatNs_FacetType
{
	const CodeType_ClassifiedAd = 'ClassifiedAd';
	const CodeType_LocalMarketBestOfferOnly = 'LocalMarketBestOfferOnly';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ListingSubtypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ListingSubtypeCodeType = new ListingSubtypeCodeType();
?>