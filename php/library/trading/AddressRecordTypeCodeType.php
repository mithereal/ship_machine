<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class AddressRecordTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Residential = 'Residential';
	const CodeType_Business = 'Business';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AddressRecordTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AddressRecordTypeCodeType = new AddressRecordTypeCodeType();
?>