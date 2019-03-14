<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class PromotionItemPriceTypeCodeType extends EbatNs_FacetType
{
	const CodeType_AuctionPrice = 'AuctionPrice';
	const CodeType_BuyItNowPrice = 'BuyItNowPrice';
	const CodeType_BestOfferOnlyPrice = 'BestOfferOnlyPrice';
	const CodeType_ClassifiedAdPrice = 'ClassifiedAdPrice';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PromotionItemPriceTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PromotionItemPriceTypeCodeType = new PromotionItemPriceTypeCodeType();
?>