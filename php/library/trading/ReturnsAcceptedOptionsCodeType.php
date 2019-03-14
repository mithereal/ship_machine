<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ReturnsAcceptedOptionsCodeType extends EbatNs_FacetType
{
	const CodeType_ReturnsAccepted = 'ReturnsAccepted';
	const CodeType_ReturnsNotAccepted = 'ReturnsNotAccepted';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ReturnsAcceptedOptionsCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ReturnsAcceptedOptionsCodeType = new ReturnsAcceptedOptionsCodeType();
?>