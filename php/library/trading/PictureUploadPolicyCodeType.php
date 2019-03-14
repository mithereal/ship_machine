<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class PictureUploadPolicyCodeType extends EbatNs_FacetType
{
	const CodeType_Add = 'Add';
	const CodeType_ClearAndAdd = 'ClearAndAdd';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PictureUploadPolicyCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PictureUploadPolicyCodeType = new PictureUploadPolicyCodeType();
?>