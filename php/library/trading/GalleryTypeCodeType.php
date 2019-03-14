<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class GalleryTypeCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_Featured = 'Featured';
	const CodeType_Gallery = 'Gallery';
	const CodeType_Plus = 'Plus';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('GalleryTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_GalleryTypeCodeType = new GalleryTypeCodeType();
?>