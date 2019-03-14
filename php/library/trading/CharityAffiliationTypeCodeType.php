<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class CharityAffiliationTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Community = 'Community';
	const CodeType_Direct = 'Direct';
	const CodeType_Remove = 'Remove';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CharityAffiliationTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CharityAffiliationTypeCodeType = new CharityAffiliationTypeCodeType();
?>