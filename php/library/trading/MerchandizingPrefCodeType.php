<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class MerchandizingPrefCodeType extends EbatNs_FacetType
{
	const CodeType_OptIn = 'OptIn';
	const CodeType_OptOut = 'OptOut';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MerchandizingPrefCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MerchandizingPrefCodeType = new MerchandizingPrefCodeType();
?>