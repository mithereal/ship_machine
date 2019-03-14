<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class BidderTypeCodeType extends EbatNs_FacetType
{
	const CodeType_AllBidder = 'AllBidder';
	const CodeType_HighBidder = 'HighBidder';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BidderTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BidderTypeCodeType = new BidderTypeCodeType();
?>