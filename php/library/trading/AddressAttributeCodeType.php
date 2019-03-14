<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class AddressAttributeCodeType extends EbatNs_FacetType
{
	const CodeType_ReferenceNumber = 'ReferenceNumber';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AddressAttributeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AddressAttributeCodeType = new AddressAttributeCodeType();
?>