<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class URLTypeCodeType extends EbatNs_FacetType
{
	const CodeType_ViewItemURL = 'ViewItemURL';
	const CodeType_ViewUserURL = 'ViewUserURL';
	const CodeType_MyeBayURL = 'MyeBayURL';
	const CodeType_MyeBayBiddingURL = 'MyeBayBiddingURL';
	const CodeType_MyeBayNotWonURL = 'MyeBayNotWonURL';
	const CodeType_MyeBayWonURL = 'MyeBayWonURL';
	const CodeType_MyeBayWatchingURL = 'MyeBayWatchingURL';
	const CodeType_eBayStoreURL = 'eBayStoreURL';
	const CodeType_SmallLogoURL = 'SmallLogoURL';
	const CodeType_MediumLogoURL = 'MediumLogoURL';
	const CodeType_LargeLogoURL = 'LargeLogoURL';
	const CodeType_CreateProductUrl = 'CreateProductUrl';
	const CodeType_AppealProductUrl = 'AppealProductUrl';
	const CodeType_ManageProductUrl = 'ManageProductUrl';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('URLTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_URLTypeCodeType = new URLTypeCodeType();
?>