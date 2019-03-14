<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class CostGroupFlatCodeType extends EbatNs_FacetType
{
	const CodeType_Group1MaxFlatShippingCost = 'Group1MaxFlatShippingCost';
	const CodeType_Group2MaxFlatShippingCost = 'Group2MaxFlatShippingCost';
	const CodeType_Group3MaxFlatShippingCost = 'Group3MaxFlatShippingCost';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CostGroupFlatCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CostGroupFlatCodeType = new CostGroupFlatCodeType();
?>