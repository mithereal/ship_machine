<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ReturnsAcceptedCodeType extends EbatNs_FacetType
{
	const CodeType_ReturnsAccepted = 'ReturnsAccepted';
	const CodeType_ReturnsNotAccepted = 'ReturnsNotAccepted';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ReturnsAcceptedCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ReturnsAcceptedCodeType = new ReturnsAcceptedCodeType();
?>