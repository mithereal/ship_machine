<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class AddressStatusCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_Confirmed = 'Confirmed';
	const CodeType_Unconfirmed = 'Unconfirmed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AddressStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AddressStatusCodeType = new AddressStatusCodeType();
?>