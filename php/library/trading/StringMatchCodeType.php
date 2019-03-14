<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class StringMatchCodeType extends EbatNs_FacetType
{
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_StartsWith = 'StartsWith';
	const CodeType_Contains = 'Contains';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StringMatchCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StringMatchCodeType = new StringMatchCodeType();
?>