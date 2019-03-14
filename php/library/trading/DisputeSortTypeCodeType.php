<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class DisputeSortTypeCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_DisputeCreatedTimeAscending = 'DisputeCreatedTimeAscending';
	const CodeType_DisputeCreatedTimeDescending = 'DisputeCreatedTimeDescending';
	const CodeType_DisputeStatusAscending = 'DisputeStatusAscending';
	const CodeType_DisputeStatusDescending = 'DisputeStatusDescending';
	const CodeType_DisputeCreditEligibilityAscending = 'DisputeCreditEligibilityAscending';
	const CodeType_DisputeCreditEligibilityDescending = 'DisputeCreditEligibilityDescending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DisputeSortTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DisputeSortTypeCodeType = new DisputeSortTypeCodeType();
?>