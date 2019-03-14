<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class VATStatusCodeType extends EbatNs_FacetType
{
	const CodeType_NoVATTax = 'NoVATTax';
	const CodeType_VATTax = 'VATTax';
	const CodeType_VATExempt = 'VATExempt';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('VATStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_VATStatusCodeType = new VATStatusCodeType();
?>