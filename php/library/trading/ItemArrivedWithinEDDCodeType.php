<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ItemArrivedWithinEDDCodeType extends EbatNs_FacetType
{
	const CodeType_EddQuestionWasNotAsked = 'EddQuestionWasNotAsked';
	const CodeType_BuyerDidntProvideAnswer = 'BuyerDidntProvideAnswer';
	const CodeType_BuyerIndicatedItemArrivedWithinEDDRange = 'BuyerIndicatedItemArrivedWithinEDDRange';
	const CodeType_BuyerIndicatedItemNotArrivedWithinEDDRange = 'BuyerIndicatedItemNotArrivedWithinEDDRange';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ItemArrivedWithinEDDCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ItemArrivedWithinEDDCodeType = new ItemArrivedWithinEDDCodeType();
?>