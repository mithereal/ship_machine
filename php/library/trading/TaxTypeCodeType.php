<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class TaxTypeCodeType extends EbatNs_FacetType
{
	const CodeType_SalesTax = 'SalesTax';
	const CodeType_WasteRecyclingFee = 'WasteRecyclingFee';
	const CodeType_GST = 'GST';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('TaxTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_TaxTypeCodeType = new TaxTypeCodeType();
?>