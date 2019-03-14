<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class DigitalStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Inactive = 'Inactive';
	const CodeType_Activated = 'Activated';
	const CodeType_Downloaded = 'Downloaded';
	const CodeType_Deactivated = 'Deactivated';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DigitalStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DigitalStatusCodeType = new DigitalStatusCodeType();
?>