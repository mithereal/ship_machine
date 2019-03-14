<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class InsuranceOptionCodeType extends EbatNs_FacetType
{
	const CodeType_Optional = 'Optional';
	const CodeType_Required = 'Required';
	const CodeType_NotOffered = 'NotOffered';
	const CodeType_IncludedInShippingHandling = 'IncludedInShippingHandling';
	const CodeType_NotOfferedOnSite = 'NotOfferedOnSite';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('InsuranceOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_InsuranceOptionCodeType = new InsuranceOptionCodeType();
?>