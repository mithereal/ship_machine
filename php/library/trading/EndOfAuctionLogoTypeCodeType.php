<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class EndOfAuctionLogoTypeCodeType extends EbatNs_FacetType
{
	const CodeType_WinningBidderNotice = 'WinningBidderNotice';
	const CodeType_Store = 'Store';
	const CodeType_Customized = 'Customized';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_None = 'None';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('EndOfAuctionLogoTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_EndOfAuctionLogoTypeCodeType = new EndOfAuctionLogoTypeCodeType();
?>