<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class BidderStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Approved = 'Approved';
	const CodeType_Denied = 'Denied';
	const CodeType_Pending = 'Pending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BidderStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BidderStatusCodeType = new BidderStatusCodeType();
?>