<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ListingEnhancementsCodeType extends EbatNs_FacetType
{
	const CodeType_Border = 'Border';
	const CodeType_BoldTitle = 'BoldTitle';
	const CodeType_Featured = 'Featured';
	const CodeType_Highlight = 'Highlight';
	const CodeType_HomePageFeatured = 'HomePageFeatured';
	const CodeType_ProPackBundle = 'ProPackBundle';
	const CodeType_BasicUpgradePackBundle = 'BasicUpgradePackBundle';
	const CodeType_ValuePackBundle = 'ValuePackBundle';
	const CodeType_ProPackPlusBundle = 'ProPackPlusBundle';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ListingEnhancementsCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ListingEnhancementsCodeType = new ListingEnhancementsCodeType();
?>