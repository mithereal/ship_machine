<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class SkypeContactOptionCodeType extends EbatNs_FacetType
{
	const CodeType_Chat = 'Chat';
	const CodeType_Voice = 'Voice';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SkypeContactOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SkypeContactOptionCodeType = new SkypeContactOptionCodeType();
?>