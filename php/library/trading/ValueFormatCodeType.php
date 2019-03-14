<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ValueFormatCodeType extends EbatNs_FacetType
{
	const CodeType_FullDate = 'FullDate';
	const CodeType_PartialDate = 'PartialDate';
	const CodeType_Year = 'Year';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ValueFormatCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ValueFormatCodeType = new ValueFormatCodeType();
?>