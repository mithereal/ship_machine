<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class WarningLevelCodeType extends EbatNs_FacetType
{
	const CodeType_Low = 'Low';
	const CodeType_High = 'High';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('WarningLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_WarningLevelCodeType = new WarningLevelCodeType();
?>