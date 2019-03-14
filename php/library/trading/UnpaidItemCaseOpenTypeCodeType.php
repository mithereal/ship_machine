<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class UnpaidItemCaseOpenTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Auto = 'Auto';
	const CodeType_Manual = 'Manual';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('UnpaidItemCaseOpenTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_UnpaidItemCaseOpenTypeCodeType = new UnpaidItemCaseOpenTypeCodeType();
?>