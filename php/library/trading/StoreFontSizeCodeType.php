<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class StoreFontSizeCodeType extends EbatNs_FacetType
{
	const CodeType_XXS = 'XXS';
	const CodeType_XS = 'XS';
	const CodeType_S = 'S';
	const CodeType_M = 'M';
	const CodeType_L = 'L';
	const CodeType_XL = 'XL';
	const CodeType_XXL = 'XXL';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StoreFontSizeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StoreFontSizeCodeType = new StoreFontSizeCodeType();
?>