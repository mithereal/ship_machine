<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class DisputeCreditEligibilityCodeType extends EbatNs_FacetType
{
	const CodeType_InEligible = 'InEligible';
	const CodeType_Eligible = 'Eligible';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DisputeCreditEligibilityCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DisputeCreditEligibilityCodeType = new DisputeCreditEligibilityCodeType();
?>