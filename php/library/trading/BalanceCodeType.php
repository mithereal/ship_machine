<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class BalanceCodeType extends EbatNs_FacetType
{
	const CodeType_Other = 'Other';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BalanceCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BalanceCodeType = new BalanceCodeType();
?>