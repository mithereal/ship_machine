<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class PictureManagerActionCodeType extends EbatNs_FacetType
{
	const CodeType_Add = 'Add';
	const CodeType_Delete = 'Delete';
	const CodeType_Rename = 'Rename';
	const CodeType_Move = 'Move';
	const CodeType_Change = 'Change';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PictureManagerActionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PictureManagerActionCodeType = new PictureManagerActionCodeType();
?>