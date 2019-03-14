<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class MerchDisplayCodeType extends EbatNs_FacetType
{
	const CodeType_DefaultTheme = 'DefaultTheme';
	const CodeType_StoreTheme = 'StoreTheme';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MerchDisplayCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MerchDisplayCodeType = new MerchDisplayCodeType();
?>