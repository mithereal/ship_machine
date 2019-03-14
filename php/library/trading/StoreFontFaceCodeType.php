<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class StoreFontFaceCodeType extends EbatNs_FacetType
{
	const CodeType_Arial = 'Arial';
	const CodeType_Courier = 'Courier';
	const CodeType_Times = 'Times';
	const CodeType_Verdana = 'Verdana';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StoreFontFaceCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StoreFontFaceCodeType = new StoreFontFaceCodeType();
?>