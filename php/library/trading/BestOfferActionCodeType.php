<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class BestOfferActionCodeType extends EbatNs_FacetType
{
	const CodeType_Accept = 'Accept';
	const CodeType_Decline = 'Decline';
	const CodeType_Counter = 'Counter';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BestOfferActionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BestOfferActionCodeType = new BestOfferActionCodeType();
?>