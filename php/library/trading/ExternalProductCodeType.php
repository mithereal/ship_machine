<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ExternalProductCodeType extends EbatNs_FacetType
{
	const CodeType_ISBN = 'ISBN';
	const CodeType_UPC = 'UPC';
	const CodeType_ProductID = 'ProductID';
	const CodeType_EAN = 'EAN';
	const CodeType_Keywords = 'Keywords';
	const CodeType_MPN = 'MPN';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ExternalProductCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ExternalProductCodeType = new ExternalProductCodeType();
?>