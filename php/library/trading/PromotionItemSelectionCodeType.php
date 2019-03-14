<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class PromotionItemSelectionCodeType extends EbatNs_FacetType
{
	const CodeType_Manual = 'Manual';
	const CodeType_Automatic = 'Automatic';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PromotionItemSelectionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PromotionItemSelectionCodeType = new PromotionItemSelectionCodeType();
?>