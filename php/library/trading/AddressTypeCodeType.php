<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class AddressTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Contact = 'Contact';
	const CodeType_Registered = 'Registered';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AddressTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AddressTypeCodeType = new AddressTypeCodeType();
?>