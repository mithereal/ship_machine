<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class RestockingFeeCodeType extends EbatNs_FacetType
{
	const CodeType_NoRestockingFee = 'NoRestockingFee';
	const CodeType_Percent_10 = 'Percent_10';
	const CodeType_Percent_15 = 'Percent_15';
	const CodeType_Percent_20 = 'Percent_20';
	const CodeType_Percent_25 = 'Percent_25';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RestockingFeeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_RestockingFeeCodeType = new RestockingFeeCodeType();
?>