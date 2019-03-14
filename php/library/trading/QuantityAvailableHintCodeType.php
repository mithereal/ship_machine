<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class QuantityAvailableHintCodeType extends EbatNs_FacetType
{
	const CodeType_Limited = 'Limited';
	const CodeType_MoreThan = 'MoreThan';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('QuantityAvailableHintCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_QuantityAvailableHintCodeType = new QuantityAvailableHintCodeType();
?>