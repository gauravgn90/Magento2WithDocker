<?php
namespace Aws\PinpointSMSVoiceV2;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Pinpoint SMS Voice V2** service.
 * @method \Aws\Result associateOriginationIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateOriginationIdentityAsync(array $args = [])
 * @method \Aws\Result associateProtectConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateProtectConfigurationAsync(array $args = [])
 * @method \Aws\Result createConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationSetAsync(array $args = [])
 * @method \Aws\Result createEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventDestinationAsync(array $args = [])
 * @method \Aws\Result createOptOutList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOptOutListAsync(array $args = [])
 * @method \Aws\Result createPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPoolAsync(array $args = [])
 * @method \Aws\Result createProtectConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProtectConfigurationAsync(array $args = [])
 * @method \Aws\Result createRegistration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRegistrationAsync(array $args = [])
 * @method \Aws\Result createRegistrationAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRegistrationAssociationAsync(array $args = [])
 * @method \Aws\Result createRegistrationAttachment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRegistrationAttachmentAsync(array $args = [])
 * @method \Aws\Result createRegistrationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRegistrationVersionAsync(array $args = [])
 * @method \Aws\Result createVerifiedDestinationNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVerifiedDestinationNumberAsync(array $args = [])
 * @method \Aws\Result deleteAccountDefaultProtectConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccountDefaultProtectConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationSetAsync(array $args = [])
 * @method \Aws\Result deleteDefaultMessageType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDefaultMessageTypeAsync(array $args = [])
 * @method \Aws\Result deleteDefaultSenderId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDefaultSenderIdAsync(array $args = [])
 * @method \Aws\Result deleteEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventDestinationAsync(array $args = [])
 * @method \Aws\Result deleteKeyword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKeywordAsync(array $args = [])
 * @method \Aws\Result deleteMediaMessageSpendLimitOverride(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMediaMessageSpendLimitOverrideAsync(array $args = [])
 * @method \Aws\Result deleteOptOutList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOptOutListAsync(array $args = [])
 * @method \Aws\Result deleteOptedOutNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOptedOutNumberAsync(array $args = [])
 * @method \Aws\Result deletePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePoolAsync(array $args = [])
 * @method \Aws\Result deleteProtectConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProtectConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteRegistration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRegistrationAsync(array $args = [])
 * @method \Aws\Result deleteRegistrationAttachment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRegistrationAttachmentAsync(array $args = [])
 * @method \Aws\Result deleteRegistrationFieldValue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRegistrationFieldValueAsync(array $args = [])
 * @method \Aws\Result deleteTextMessageSpendLimitOverride(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTextMessageSpendLimitOverrideAsync(array $args = [])
 * @method \Aws\Result deleteVerifiedDestinationNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVerifiedDestinationNumberAsync(array $args = [])
 * @method \Aws\Result deleteVoiceMessageSpendLimitOverride(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceMessageSpendLimitOverrideAsync(array $args = [])
 * @method \Aws\Result describeAccountAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAttributesAsync(array $args = [])
 * @method \Aws\Result describeAccountLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountLimitsAsync(array $args = [])
 * @method \Aws\Result describeConfigurationSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationSetsAsync(array $args = [])
 * @method \Aws\Result describeKeywords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeywordsAsync(array $args = [])
 * @method \Aws\Result describeOptOutLists(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOptOutListsAsync(array $args = [])
 * @method \Aws\Result describeOptedOutNumbers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOptedOutNumbersAsync(array $args = [])
 * @method \Aws\Result describePhoneNumbers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePhoneNumbersAsync(array $args = [])
 * @method \Aws\Result describePools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePoolsAsync(array $args = [])
 * @method \Aws\Result describeProtectConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectConfigurationsAsync(array $args = [])
 * @method \Aws\Result describeRegistrationAttachments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegistrationAttachmentsAsync(array $args = [])
 * @method \Aws\Result describeRegistrationFieldDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegistrationFieldDefinitionsAsync(array $args = [])
 * @method \Aws\Result describeRegistrationFieldValues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegistrationFieldValuesAsync(array $args = [])
 * @method \Aws\Result describeRegistrationSectionDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegistrationSectionDefinitionsAsync(array $args = [])
 * @method \Aws\Result describeRegistrationTypeDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegistrationTypeDefinitionsAsync(array $args = [])
 * @method \Aws\Result describeRegistrationVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegistrationVersionsAsync(array $args = [])
 * @method \Aws\Result describeRegistrations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegistrationsAsync(array $args = [])
 * @method \Aws\Result describeSenderIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSenderIdsAsync(array $args = [])
 * @method \Aws\Result describeSpendLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSpendLimitsAsync(array $args = [])
 * @method \Aws\Result describeVerifiedDestinationNumbers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVerifiedDestinationNumbersAsync(array $args = [])
 * @method \Aws\Result disassociateOriginationIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateOriginationIdentityAsync(array $args = [])
 * @method \Aws\Result disassociateProtectConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateProtectConfigurationAsync(array $args = [])
 * @method \Aws\Result discardRegistrationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise discardRegistrationVersionAsync(array $args = [])
 * @method \Aws\Result getProtectConfigurationCountryRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProtectConfigurationCountryRuleSetAsync(array $args = [])
 * @method \Aws\Result listPoolOriginationIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPoolOriginationIdentitiesAsync(array $args = [])
 * @method \Aws\Result listRegistrationAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRegistrationAssociationsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putKeyword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putKeywordAsync(array $args = [])
 * @method \Aws\Result putOptedOutNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putOptedOutNumberAsync(array $args = [])
 * @method \Aws\Result putRegistrationFieldValue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRegistrationFieldValueAsync(array $args = [])
 * @method \Aws\Result releasePhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise releasePhoneNumberAsync(array $args = [])
 * @method \Aws\Result releaseSenderId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise releaseSenderIdAsync(array $args = [])
 * @method \Aws\Result requestPhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise requestPhoneNumberAsync(array $args = [])
 * @method \Aws\Result requestSenderId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise requestSenderIdAsync(array $args = [])
 * @method \Aws\Result sendDestinationNumberVerificationCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendDestinationNumberVerificationCodeAsync(array $args = [])
 * @method \Aws\Result sendMediaMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendMediaMessageAsync(array $args = [])
 * @method \Aws\Result sendTextMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTextMessageAsync(array $args = [])
 * @method \Aws\Result sendVoiceMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendVoiceMessageAsync(array $args = [])
 * @method \Aws\Result setAccountDefaultProtectConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setAccountDefaultProtectConfigurationAsync(array $args = [])
 * @method \Aws\Result setDefaultMessageType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setDefaultMessageTypeAsync(array $args = [])
 * @method \Aws\Result setDefaultSenderId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setDefaultSenderIdAsync(array $args = [])
 * @method \Aws\Result setMediaMessageSpendLimitOverride(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setMediaMessageSpendLimitOverrideAsync(array $args = [])
 * @method \Aws\Result setTextMessageSpendLimitOverride(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setTextMessageSpendLimitOverrideAsync(array $args = [])
 * @method \Aws\Result setVoiceMessageSpendLimitOverride(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setVoiceMessageSpendLimitOverrideAsync(array $args = [])
 * @method \Aws\Result submitRegistrationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitRegistrationVersionAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEventDestinationAsync(array $args = [])
 * @method \Aws\Result updatePhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePhoneNumberAsync(array $args = [])
 * @method \Aws\Result updatePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePoolAsync(array $args = [])
 * @method \Aws\Result updateProtectConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProtectConfigurationAsync(array $args = [])
 * @method \Aws\Result updateProtectConfigurationCountryRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProtectConfigurationCountryRuleSetAsync(array $args = [])
 * @method \Aws\Result updateSenderId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSenderIdAsync(array $args = [])
 * @method \Aws\Result verifyDestinationNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyDestinationNumberAsync(array $args = [])
 */
class PinpointSMSVoiceV2Client extends AwsClient {}
