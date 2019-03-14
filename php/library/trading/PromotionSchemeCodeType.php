<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class PromotionSchemeCodeType extends EbatNs_FacetType
{
	const CodeType_ItemToItem = 'ItemToItem';
	const CodeType_ItemToStoreCat = 'ItemToStoreCat';
	const CodeType_StoreToStoreCat = 'StoreToStoreCat';
	const CodeType_ItemToDefaultRule = 'ItemToDefaultRule';
	const CodeType_DefaultRule = 'DefaultRule';
	const CodeType_CategoryProximity = 'CategoryProximity';
	const CodeType_RelatedCategoryRule = 'RelatedCategoryRule';
	const CodeType_DefaultUpSellLogic = 'DefaultUpSellLogic';
	const CodeType_DefaultCrossSellLogic = 'DefaultCrossSellLogic';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PromotionSchemeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PromotionSchemeCodeType = new PromotionSchemeCodeType();
?>