<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class UserIdentityCodeType extends EbatNs_FacetType
{
	const CodeType_eBayUser = 'eBayUser';
	const CodeType_eBayPartner = 'eBayPartner';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('UserIdentityCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_UserIdentityCodeType = new UserIdentityCodeType();
?>