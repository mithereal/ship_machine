<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class StoreHeaderStyleCodeType extends EbatNs_FacetType
{
	const CodeType_Full = 'Full';
	const CodeType_Minimized = 'Minimized';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StoreHeaderStyleCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StoreHeaderStyleCodeType = new StoreHeaderStyleCodeType();
?>