<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class BestOfferIDType extends EbatNs_FacetType
{

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BestOfferIDType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BestOfferIDType = new BestOfferIDType();
?>