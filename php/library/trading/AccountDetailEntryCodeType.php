<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class AccountDetailEntryCodeType extends EbatNs_FacetType
{
	const CodeType_Unknown = 'Unknown';
	const CodeType_FeeInsertion = 'FeeInsertion';
	const CodeType_FeeBold = 'FeeBold';
	const CodeType_FeeFeatured = 'FeeFeatured';
	const CodeType_FeeCategoryFeatured = 'FeeCategoryFeatured';
	const CodeType_FeeFinalValue = 'FeeFinalValue';
	const CodeType_PaymentCheck = 'PaymentCheck';
	const CodeType_PaymentCC = 'PaymentCC';
	const CodeType_CreditCourtesy = 'CreditCourtesy';
	const CodeType_CreditNoSale = 'CreditNoSale';
	const CodeType_CreditPartialSale = 'CreditPartialSale';
	const CodeType_RefundCC = 'RefundCC';
	const CodeType_RefundCheck = 'RefundCheck';
	const CodeType_FinanceCharge = 'FinanceCharge';
	const CodeType_AWDebit = 'AWDebit';
	const CodeType_AWCredit = 'AWCredit';
	const CodeType_AWMemo = 'AWMemo';
	const CodeType_CreditDuplicateListing = 'CreditDuplicateListing';
	const CodeType_FeePartialSale = 'FeePartialSale';
	const CodeType_PaymentElectronicTransferReversal = 'PaymentElectronicTransferReversal';
	const CodeType_PaymentCCOnce = 'PaymentCCOnce';
	const CodeType_FeeReturnedCheck = 'FeeReturnedCheck';
	const CodeType_FeeRedepositCheck = 'FeeRedepositCheck';
	const CodeType_PaymentCash = 'PaymentCash';
	const CodeType_CreditInsertion = 'CreditInsertion';
	const CodeType_CreditBold = 'CreditBold';
	const CodeType_CreditFeatured = 'CreditFeatured';
	const CodeType_CreditCategoryFeatured = 'CreditCategoryFeatured';
	const CodeType_CreditFinalValue = 'CreditFinalValue';
	const CodeType_FeeNSFCheck = 'FeeNSFCheck';
	const CodeType_FeeReturnCheckClose = 'FeeReturnCheckClose';
	const CodeType_Memo = 'Memo';
	const CodeType_PaymentMoneyOrder = 'PaymentMoneyOrder';
	const CodeType_CreditCardOnFile = 'CreditCardOnFile';
	const CodeType_CreditCardNotOnFile = 'CreditCardNotOnFile';
	const CodeType_Invoiced = 'Invoiced';
	const CodeType_InvoicedCreditCard = 'InvoicedCreditCard';
	const CodeType_CreditTransferFrom = 'CreditTransferFrom';
	const CodeType_DebitTransferTo = 'DebitTransferTo';
	const CodeType_InvoiceCreditBalance = 'InvoiceCreditBalance';
	const CodeType_eBayDebit = 'eBayDebit';
	const CodeType_eBayCredit = 'eBayCredit';
	const CodeType_PromotionalCredit = 'PromotionalCredit';
	const CodeType_CCNotOnFilePerCustReq = 'CCNotOnFilePerCustReq';
	const CodeType_CreditInsertionFee = 'CreditInsertionFee';
	const CodeType_CCPaymentRejected = 'CCPaymentRejected';
	const CodeType_FeeGiftIcon = 'FeeGiftIcon';
	const CodeType_CreditGiftIcon = 'CreditGiftIcon';
	const CodeType_FeeGallery = 'FeeGallery';
	const CodeType_FeeFeaturedGallery = 'FeeFeaturedGallery';
	const CodeType_CreditGallery = 'CreditGallery';
	const CodeType_CreditFeaturedGallery = 'CreditFeaturedGallery';
	const CodeType_ItemMoveFee = 'ItemMoveFee';
	const CodeType_OutageCredit = 'OutageCredit';
	const CodeType_CreditPSA = 'CreditPSA';
	const CodeType_CreditPCGS = 'CreditPCGS';
	const CodeType_FeeReserve = 'FeeReserve';
	const CodeType_CreditReserve = 'CreditReserve';
	const CodeType_eBayVISACredit = 'eBayVISACredit';
	const CodeType_BBAdminCredit = 'BBAdminCredit';
	const CodeType_BBAdminDebit = 'BBAdminDebit';
	const CodeType_ReferrerCredit = 'ReferrerCredit';
	const CodeType_ReferrerDebit = 'ReferrerDebit';
	const CodeType_SwitchCurrency = 'SwitchCurrency';
	const CodeType_PaymentGiftCertificate = 'PaymentGiftCertificate';
	const CodeType_PaymentWireTransfer = 'PaymentWireTransfer';
	const CodeType_PaymentHomeBanking = 'PaymentHomeBanking';
	const CodeType_PaymentElectronicTransfer = 'PaymentElectronicTransfer';
	const CodeType_PaymentAdjustmentCredit = 'PaymentAdjustmentCredit';
	const CodeType_PaymentAdjustmentDebit = 'PaymentAdjustmentDebit';
	const CodeType_Chargeoff = 'Chargeoff';
	const CodeType_ChargeoffRecovery = 'ChargeoffRecovery';
	const CodeType_ChargeoffBankruptcy = 'ChargeoffBankruptcy';
	const CodeType_ChargeoffSuspended = 'ChargeoffSuspended';
	const CodeType_ChargeoffDeceased = 'ChargeoffDeceased';
	const CodeType_ChargeoffOther = 'ChargeoffOther';
	const CodeType_ChargeoffWacko = 'ChargeoffWacko';
	const CodeType_FinanceChargeReversal = 'FinanceChargeReversal';
	const CodeType_FVFCreditReversal = 'FVFCreditReversal';
	const CodeType_ForeignFundsConvert = 'ForeignFundsConvert';
	const CodeType_ForeignFundsCheckReversal = 'ForeignFundsCheckReversal';
	const CodeType_EOMRestriction = 'EOMRestriction';
	const CodeType_AllFeesCredit = 'AllFeesCredit';
	const CodeType_SetOnHold = 'SetOnHold';
	const CodeType_RevertUserState = 'RevertUserState';
	const CodeType_DirectDebitOnFile = 'DirectDebitOnFile';
	const CodeType_DirectDebitNotOnFile = 'DirectDebitNotOnFile';
	const CodeType_PaymentDirectDebit = 'PaymentDirectDebit';
	const CodeType_DirectDebitReversal = 'DirectDebitReversal';
	const CodeType_DirectDebitReturnedItem = 'DirectDebitReturnedItem';
	const CodeType_FeeHighlight = 'FeeHighlight';
	const CodeType_CreditHighlight = 'CreditHighlight';
	const CodeType_BulkUserSuspension = 'BulkUserSuspension';
	const CodeType_FeeRealEstate30DaysListing = 'FeeRealEstate30DaysListing';
	const CodeType_CreditRealEstate30DaysListing = 'CreditRealEstate30DaysListing';
	const CodeType_TradingLimitOverrideOn = 'TradingLimitOverrideOn';
	const CodeType_TradingLimitOverrideOff = 'TradingLimitOverrideOff';
	const CodeType_EquifaxRealtimeFee = 'EquifaxRealtimeFee';
	const CodeType_CreditEquifaxRealtimeFee = 'CreditEquifaxRealtimeFee';
	const CodeType_PaymentEquifaxDebit = 'PaymentEquifaxDebit';
	const CodeType_PaymentEquifaxCredit = 'PaymentEquifaxCredit';
	const CodeType_Merged = 'Merged';
	const CodeType_AutoTraderOn = 'AutoTraderOn';
	const CodeType_AutoTraderOff = 'AutoTraderOff';
	const CodeType_PaperInvoiceOn = 'PaperInvoiceOn';
	const CodeType_PaperInvoiceOff = 'PaperInvoiceOff';
	const CodeType_AccountStateSwitch = 'AccountStateSwitch';
	const CodeType_FVFCreditReversalAutomatic = 'FVFCreditReversalAutomatic';
	const CodeType_CreditSoftOutage = 'CreditSoftOutage';
	const CodeType_LACatalogFee = 'LACatalogFee';
	const CodeType_LAExtraItem = 'LAExtraItem';
	const CodeType_LACatalogItemFeeRefund = 'LACatalogItemFeeRefund';
	const CodeType_LACatalogInsertionRefund = 'LACatalogInsertionRefund';
	const CodeType_LAFinalValueFee = 'LAFinalValueFee';
	const CodeType_LAFinalValueFeeRefund = 'LAFinalValueFeeRefund';
	const CodeType_LABuyerPremiumPercentageFee = 'LABuyerPremiumPercentageFee';
	const CodeType_LABuyerPremiumPercentageFeeRefund = 'LABuyerPremiumPercentageFeeRefund';
	const CodeType_LAAudioVideoFee = 'LAAudioVideoFee';
	const CodeType_LAAudioVideoFeeRefund = 'LAAudioVideoFeeRefund';
	const CodeType_FeeIPIXPhoto = 'FeeIPIXPhoto';
	const CodeType_FeeIPIXSlideShow = 'FeeIPIXSlideShow';
	const CodeType_CreditIPIXPhoto = 'CreditIPIXPhoto';
	const CodeType_CreditIPIXSlideShow = 'CreditIPIXSlideShow';
	const CodeType_FeeTenDayAuction = 'FeeTenDayAuction';
	const CodeType_CreditTenDayAuction = 'CreditTenDayAuction';
	const CodeType_TemporaryCredit = 'TemporaryCredit';
	const CodeType_TemporaryCreditReversal = 'TemporaryCreditReversal';
	const CodeType_SubscriptionAABasic = 'SubscriptionAABasic';
	const CodeType_SubscriptionAAPro = 'SubscriptionAAPro';
	const CodeType_CreditAABasic = 'CreditAABasic';
	const CodeType_CreditAAPro = 'CreditAAPro';
	const CodeType_FeeLargePicture = 'FeeLargePicture';
	const CodeType_CreditLargePicture = 'CreditLargePicture';
	const CodeType_FeePicturePack = 'FeePicturePack';
	const CodeType_CreditPicturePackPartial = 'CreditPicturePackPartial';
	const CodeType_CreditPicturePackFull = 'CreditPicturePackFull';
	const CodeType_SubscriptioneBayStores = 'SubscriptioneBayStores';
	const CodeType_CrediteBayStores = 'CrediteBayStores';
	const CodeType_FeeInsertionFixedPrice = 'FeeInsertionFixedPrice';
	const CodeType_CreditInsertionFixedPrice = 'CreditInsertionFixedPrice';
	const CodeType_FeeFinalValueFixedPrice = 'FeeFinalValueFixedPrice';
	const CodeType_CreditFinalValueFixedPrice = 'CreditFinalValueFixedPrice';
	const CodeType_ElectronicInvoiceOn = 'ElectronicInvoiceOn';
	const CodeType_ElectronicInvoiceOff = 'ElectronicInvoiceOff';
	const CodeType_FlagDDDDPending = 'FlagDDDDPending';
	const CodeType_FlagDDPaymentConfirmed = 'FlagDDPaymentConfirmed';
	const CodeType_FixedPriceDurationFee = 'FixedPriceDurationFee';
	const CodeType_FixedPriceDurationCredit = 'FixedPriceDurationCredit';
	const CodeType_BuyItNowFee = 'BuyItNowFee';
	const CodeType_BuyItNowCredit = 'BuyItNowCredit';
	const CodeType_FeeSchedule = 'FeeSchedule';
	const CodeType_CreditSchedule = 'CreditSchedule';
	const CodeType_SubscriptionSMBasic = 'SubscriptionSMBasic';
	const CodeType_SubscriptionSMBasicPro = 'SubscriptionSMBasicPro';
	const CodeType_CreditSMBasic = 'CreditSMBasic';
	const CodeType_CreditSMBasicPro = 'CreditSMBasicPro';
	const CodeType_StoresGTCFee = 'StoresGTCFee';
	const CodeType_StoresGTCCredit = 'StoresGTCCredit';
	const CodeType_ListingDesignerFee = 'ListingDesignerFee';
	const CodeType_ListingDesignerCredit = 'ListingDesignerCredit';
	const CodeType_ExtendedAuctionFee = 'ExtendedAuctionFee';
	const CodeType_ExtendedAcutionCredit = 'ExtendedAcutionCredit';
	const CodeType_PayPalOTPSucc = 'PayPalOTPSucc';
	const CodeType_PayPalOTPPend = 'PayPalOTPPend';
	const CodeType_PayPalFailed = 'PayPalFailed';
	const CodeType_PayPalChargeBack = 'PayPalChargeBack';
	const CodeType_ChargeBack = 'ChargeBack';
	const CodeType_ChargeBackReversal = 'ChargeBackReversal';
	const CodeType_PayPalRefund = 'PayPalRefund';
	const CodeType_BonusPointsAddition = 'BonusPointsAddition';
	const CodeType_BonusPointsReduction = 'BonusPointsReduction';
	const CodeType_BonusPointsPaymentAutomatic = 'BonusPointsPaymentAutomatic';
	const CodeType_BonusPointsPaymentManual = 'BonusPointsPaymentManual';
	const CodeType_BonusPointsPaymentReversal = 'BonusPointsPaymentReversal';
	const CodeType_BonusPointsCashPayout = 'BonusPointsCashPayout';
	const CodeType_VATCredit = 'VATCredit';
	const CodeType_VATDebit = 'VATDebit';
	const CodeType_VATStatusChangePending = 'VATStatusChangePending';
	const CodeType_VATStatusChangeApproved = 'VATStatusChangeApproved';
	const CodeType_VATStatusChange_Denied = 'VATStatusChange_Denied';
	const CodeType_VATStatusDeletedByCSR = 'VATStatusDeletedByCSR';
	const CodeType_VATStatusDeletedByUser = 'VATStatusDeletedByUser';
	const CodeType_SMProListingDesignerFee = 'SMProListingDesignerFee';
	const CodeType_SMProListingDesignerCredit = 'SMProListingDesignerCredit';
	const CodeType_StoresSuccessfulListingFee = 'StoresSuccessfulListingFee';
	const CodeType_StoresSuccessfulListingFeeCredit = 'StoresSuccessfulListingFeeCredit';
	const CodeType_StoresReferralFee = 'StoresReferralFee';
	const CodeType_StoresReferralCredit = 'StoresReferralCredit';
	const CodeType_SubtitleFee = 'SubtitleFee';
	const CodeType_SubtitleFeeCredit = 'SubtitleFeeCredit';
	const CodeType_eBayStoreInventorySubscriptionCredit = 'eBayStoreInventorySubscriptionCredit';
	const CodeType_AutoPmntReqExempt = 'AutoPmntReqExempt';
	const CodeType_AutoPmntReqRein = 'AutoPmntReqRein';
	const CodeType_PictureManagerSubscriptionFee = 'PictureManagerSubscriptionFee';
	const CodeType_PictureManagerSubscriptionFeeCredit = 'PictureManagerSubscriptionFeeCredit';
	const CodeType_SellerReportsBasicFee = 'SellerReportsBasicFee';
	const CodeType_SellerReportsBasicCredit = 'SellerReportsBasicCredit';
	const CodeType_SellerReportsPlusFee = 'SellerReportsPlusFee';
	const CodeType_SellerReportsPlusCredit = 'SellerReportsPlusCredit';
	const CodeType_PaypalOnFile = 'PaypalOnFile';
	const CodeType_PaypalOnFileByCSR = 'PaypalOnFileByCSR';
	const CodeType_PaypalOffFile = 'PaypalOffFile';
	const CodeType_BorderFee = 'BorderFee';
	const CodeType_BorderFeeCredit = 'BorderFeeCredit';
	const CodeType_FeeSearchableMobileDE = 'FeeSearchableMobileDE';
	const CodeType_SalesReportsPlusFee = 'SalesReportsPlusFee';
	const CodeType_SalesReportsPlusCredit = 'SalesReportsPlusCredit';
	const CodeType_CreditSearchableMobileDE = 'CreditSearchableMobileDE';
	const CodeType_EmailMarketingFee = 'EmailMarketingFee';
	const CodeType_EmailMarketingCredit = 'EmailMarketingCredit';
	const CodeType_FeePictureShow = 'FeePictureShow';
	const CodeType_CreditPictureShow = 'CreditPictureShow';
	const CodeType_ProPackBundleFee = 'ProPackBundleFee';
	const CodeType_ProPackBundleFeeCredit = 'ProPackBundleFeeCredit';
	const CodeType_BasicUpgradePackBundleFee = 'BasicUpgradePackBundleFee';
	const CodeType_BasicUpgradePackBundleFeeCredit = 'BasicUpgradePackBundleFeeCredit';
	const CodeType_ValuePackBundleFee = 'ValuePackBundleFee';
	const CodeType_ValuePackBundleFeeCredit = 'ValuePackBundleFeeCredit';
	const CodeType_ProPackPlusBundleFee = 'ProPackPlusBundleFee';
	const CodeType_ProPackPlusBundleFeeCredit = 'ProPackPlusBundleFeeCredit';
	const CodeType_FinalEntry = 'FinalEntry';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_ExtendedDurationFee = 'ExtendedDurationFee';
	const CodeType_ExtendedDurationFeeCredit = 'ExtendedDurationFeeCredit';
	const CodeType_InternationalListingFee = 'InternationalListingFee';
	const CodeType_InternationalListingCredit = 'InternationalListingCredit';
	const CodeType_MarketplaceResearchExpiredSubscriptionFee = 'MarketplaceResearchExpiredSubscriptionFee';
	const CodeType_MarketplaceResearchExpiredSubscriptionFeeCredit = 'MarketplaceResearchExpiredSubscriptionFeeCredit';
	const CodeType_MarketplaceResearchBasicSubscriptionFee = 'MarketplaceResearchBasicSubscriptionFee';
	const CodeType_MarketplaceResearchBasicSubscriptionFeeCredit = 'MarketplaceResearchBasicSubscriptionFeeCredit';
	const CodeType_MarketplaceResearchProSubscriptionFee = 'MarketplaceResearchProSubscriptionFee';
	const CodeType_BasicBundleFee = 'BasicBundleFee';
	const CodeType_BasicBundleFeeCredit = 'BasicBundleFeeCredit';
	const CodeType_MarketplaceResearchProSubscriptionFeeCredit = 'MarketplaceResearchProSubscriptionFeeCredit';
	const CodeType_VehicleLocalSubscriptionFee = 'VehicleLocalSubscriptionFee';
	const CodeType_VehicleLocalSubscriptionFeeCredit = 'VehicleLocalSubscriptionFeeCredit';
	const CodeType_VehicleLocalInsertionFee = 'VehicleLocalInsertionFee';
	const CodeType_VehicleLocalInsertionFeeCredit = 'VehicleLocalInsertionFeeCredit';
	const CodeType_VehicleLocalFinalValueFee = 'VehicleLocalFinalValueFee';
	const CodeType_VehicleLocalFinalValueFeeCredit = 'VehicleLocalFinalValueFeeCredit';
	const CodeType_VehicleLocalGTCFee = 'VehicleLocalGTCFee';
	const CodeType_VehicleLocalGTCFeeCredit = 'VehicleLocalGTCFeeCredit';
	const CodeType_eBayMotorsProFee = 'eBayMotorsProFee';
	const CodeType_CrediteBayMotorsProFee = 'CrediteBayMotorsProFee';
	const CodeType_eBayMotorsProFeatureFee = 'eBayMotorsProFeatureFee';
	const CodeType_CrediteBayMotorsProFeatureFee = 'CrediteBayMotorsProFeatureFee';
	const CodeType_FeeGalleryPlus = 'FeeGalleryPlus';
	const CodeType_CreditGalleryPlus = 'CreditGalleryPlus';
	const CodeType_PrivateListing = 'PrivateListing';
	const CodeType_CreditPrivateListing = 'CreditPrivateListing';
	const CodeType_ImmoProFee = 'ImmoProFee';
	const CodeType_CreditImmoProFee = 'CreditImmoProFee';
	const CodeType_ImmoProFeatureFee = 'ImmoProFeatureFee';
	const CodeType_CreditImmoProFeatureFee = 'CreditImmoProFeatureFee';
	const CodeType_RealEstateProFee = 'RealEstateProFee';
	const CodeType_CreditRealEstateProFee = 'CreditRealEstateProFee';
	const CodeType_RealEstateProFeatureFee = 'RealEstateProFeatureFee';
	const CodeType_CreditRealEstateProFeatureFee = 'CreditRealEstateProFeatureFee';
	const CodeType_Discount = 'Discount';
	const CodeType_CreditFinalValueShipping = 'CreditFinalValueShipping';
	const CodeType_FeeFinalValueShipping = 'FeeFinalValueShipping';
	const CodeType_FeeReturnShipping = 'FeeReturnShipping';
	const CodeType_CreditReturnShipping = 'CreditReturnShipping';
	const CodeType_FeeGlobalShippingProgram = 'FeeGlobalShippingProgram';
	const CodeType_CreditGlobalShippingProgram = 'CreditGlobalShippingProgram';
	const CodeType_FeeAuctionEndEarly = 'FeeAuctionEndEarly';
	const CodeType_CreditAuctionEndEarly = 'CreditAuctionEndEarly';
	const CodeType_FeeFedExShippingLabel = 'FeeFedExShippingLabel';
	const CodeType_CreditFedExShippingLabel = 'CreditFedExShippingLabel';
	const CodeType_FeeReturnRefund = 'FeeReturnRefund';
	const CodeType_CreditReturnRefund = 'CreditReturnRefund';
	const CodeType_FeeStoresSubscriptionEarlyTermination = 'FeeStoresSubscriptionEarlyTermination';
	const CodeType_CreditStoresSubscriptionEarlyTermination = 'CreditStoresSubscriptionEarlyTermination';
	const CodeType_FeeVehicleSubscriptionEarlyTermination = 'FeeVehicleSubscriptionEarlyTermination';
	const CodeType_CreditVehicleSubscriptionEarlyTermination = 'CreditVehicleSubscriptionEarlyTermination';
	const CodeType_FeeVehicleSubscription = 'FeeVehicleSubscription';
	const CodeType_CreditVehicleSubscription = 'CreditVehicleSubscription';
	const CodeType_FeeAUPostShippingLabel = 'FeeAUPostShippingLabel';
	const CodeType_CreditAUPostShippingLabel = 'CreditAUPostShippingLabel';
	const CodeType_FeeAPACFedExShippingLabel = 'FeeAPACFedExShippingLabel';
	const CodeType_CreditAPACFedExShippingLabel = 'CreditAPACFedExShippingLabel';
	const CodeType_FeeAPACTNTShippingLabel = 'FeeAPACTNTShippingLabel';
	const CodeType_CreditAPACTNTShippingLabel = 'CreditAPACTNTShippingLabel';
	const CodeType_FeeEBPReimbursement = 'FeeEBPReimbursement';
	const CodeType_CreditEBPReimbursement = 'CreditEBPReimbursement';
	const CodeType_FeePromotedListingFeature = 'FeePromotedListingFeature';
	const CodeType_CreditPromotedListingFeature = 'CreditPromotedListingFeature';
	const CodeType_FeeAd = 'FeeAd';
	const CodeType_CreditAd = 'CreditAd';
	const CodeType_FeeUBIShippingLabel = 'FeeUBIShippingLabel';
	const CodeType_CreditUBIShippingLabel = 'CreditUBIShippingLabel';
	const CodeType_FeeeBayPlusSubscription = 'FeeeBayPlusSubscription';
	const CodeType_CrediteBayPlusSubscription = 'CrediteBayPlusSubscription';
	const CodeType_PaymentIntermediationFee = 'PaymentIntermediationFee';
	const CodeType_FeePaymentIntermediationRVI = 'FeePaymentIntermediationRVI';
	const CodeType_FeePaymentIntermediationChargeback = 'FeePaymentIntermediationChargeback';
	const CodeType_FeePaymentIntermediationChargebackRVI = 'FeePaymentIntermediationChargebackRVI';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AccountDetailEntryCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AccountDetailEntryCodeType = new AccountDetailEntryCodeType();
?>