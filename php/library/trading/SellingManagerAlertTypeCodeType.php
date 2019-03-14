<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class SellingManagerAlertTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Sold = 'Sold';
	const CodeType_Inventory = 'Inventory';
	const CodeType_Automation = 'Automation';
	const CodeType_PaisaPay = 'PaisaPay';
	const CodeType_General = 'General';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerAlertTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerAlertTypeCodeType = new SellingManagerAlertTypeCodeType();
?>