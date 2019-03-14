<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class FedExRateOptionCodeType extends EbatNs_FacetType
{
	const CodeType_FedExStandardList = 'FedExStandardList';
	const CodeType_FedExCounter = 'FedExCounter';
	const CodeType_FedExDiscounted = 'FedExDiscounted';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('FedExRateOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_FedExRateOptionCodeType = new FedExRateOptionCodeType();
?>