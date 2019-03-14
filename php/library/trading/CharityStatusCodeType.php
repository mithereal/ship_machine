<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class CharityStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Valid = 'Valid';
	const CodeType_NoLongerValid = 'NoLongerValid';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CharityStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CharityStatusCodeType = new CharityStatusCodeType();
?>