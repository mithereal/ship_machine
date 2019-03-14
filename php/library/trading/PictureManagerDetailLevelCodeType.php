<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class PictureManagerDetailLevelCodeType extends EbatNs_FacetType
{
	const CodeType_ReturnAll = 'ReturnAll';
	const CodeType_ReturnSubscription = 'ReturnSubscription';
	const CodeType_ReturnPicture = 'ReturnPicture';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PictureManagerDetailLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PictureManagerDetailLevelCodeType = new PictureManagerDetailLevelCodeType();
?>