<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class GranularityLevelCodeType extends EbatNs_FacetType
{
	const CodeType_Coarse = 'Coarse';
	const CodeType_Fine = 'Fine';
	const CodeType_Medium = 'Medium';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('GranularityLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_GranularityLevelCodeType = new GranularityLevelCodeType();
?>