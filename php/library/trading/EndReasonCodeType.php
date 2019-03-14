<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class EndReasonCodeType extends EbatNs_FacetType
{
	const CodeType_LostOrBroken = 'LostOrBroken';
	const CodeType_NotAvailable = 'NotAvailable';
	const CodeType_Incorrect = 'Incorrect';
	const CodeType_OtherListingError = 'OtherListingError';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_SellToHighBidder = 'SellToHighBidder';
	const CodeType_Sold = 'Sold';
	const CodeType_ProductDeleted = 'ProductDeleted';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('EndReasonCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_EndReasonCodeType = new EndReasonCodeType();
?>