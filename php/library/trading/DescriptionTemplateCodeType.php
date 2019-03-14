<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class DescriptionTemplateCodeType extends EbatNs_FacetType
{
	const CodeType_Layout = 'Layout';
	const CodeType_Theme = 'Theme';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DescriptionTemplateCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DescriptionTemplateCodeType = new DescriptionTemplateCodeType();
?>