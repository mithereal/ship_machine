<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class BidderIdType extends EbatNs_FacetType
{

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BidderIdType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BidderIdType = new BidderIdType();
?>