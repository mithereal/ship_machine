<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class SellingManagerAutoRelistTypeCodeType extends EbatNs_FacetType
{
	const CodeType_RelistOnceIfNotSold = 'RelistOnceIfNotSold';
	const CodeType_RelistContinuouslyUntilSold = 'RelistContinuouslyUntilSold';
	const CodeType_RelistContinuously = 'RelistContinuously';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerAutoRelistTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerAutoRelistTypeCodeType = new SellingManagerAutoRelistTypeCodeType();
?>