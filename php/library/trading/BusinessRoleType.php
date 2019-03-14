<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class BusinessRoleType extends EbatNs_FacetType
{
	const CodeType_Shopper = 'Shopper';
	const CodeType_FullMarketPlaceParticipant = 'FullMarketPlaceParticipant';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BusinessRoleType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BusinessRoleType = new BusinessRoleType();
?>