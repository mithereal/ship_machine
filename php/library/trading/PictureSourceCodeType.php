<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class PictureSourceCodeType extends EbatNs_FacetType
{
	const CodeType_EPS = 'EPS';
	const CodeType_PictureManager = 'PictureManager';
	const CodeType_Vendor = 'Vendor';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PictureSourceCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PictureSourceCodeType = new PictureSourceCodeType();
?>