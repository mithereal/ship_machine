<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class SellerBusinessCodeType extends EbatNs_FacetType
{
	const CodeType_Undefined = 'Undefined';
	const CodeType_Private = 'Private';
	const CodeType_Commercial = 'Commercial';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellerBusinessCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellerBusinessCodeType = new SellerBusinessCodeType();
?>