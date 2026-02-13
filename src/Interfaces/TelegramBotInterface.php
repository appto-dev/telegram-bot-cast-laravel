<?php

namespace Appto\TelegramBot\Interfaces;

use Appto\TelegramBot\Data\AcceptedGiftTypes;
use Appto\TelegramBot\Data\BotCommand;
use Appto\TelegramBot\Data\BotDescription;
use Appto\TelegramBot\Data\BotName;
use Appto\TelegramBot\Data\BotShortDescription;
use Appto\TelegramBot\Data\BusinessConnection;
use Appto\TelegramBot\Data\ChatAdministratorRights;
use Appto\TelegramBot\Data\ChatFullInfo;
use Appto\TelegramBot\Data\ChatInviteLink;
use Appto\TelegramBot\Data\ChatPermissions;
use Appto\TelegramBot\Data\File;
use Appto\TelegramBot\Data\ForumTopic;
use Appto\TelegramBot\Data\GameHighScore;
use Appto\TelegramBot\Data\Gifts;
use Appto\TelegramBot\Data\InlineKeyboardMarkup;
use Appto\TelegramBot\Data\InlineQueryResultsButton;
use Appto\TelegramBot\Data\InputChecklist;
use Appto\TelegramBot\Data\InputFile;
use Appto\TelegramBot\Data\InputMediaAudio;
use Appto\TelegramBot\Data\InputMediaDocument;
use Appto\TelegramBot\Data\InputMediaPhoto;
use Appto\TelegramBot\Data\InputMediaVideo;
use Appto\TelegramBot\Data\InputPollOption;
use Appto\TelegramBot\Data\InputSticker;
use Appto\TelegramBot\Data\LabeledPrice;
use Appto\TelegramBot\Data\LinkPreviewOptions;
use Appto\TelegramBot\Data\MaskPosition;
use Appto\TelegramBot\Data\Message;
use Appto\TelegramBot\Data\MessageEntity;
use Appto\TelegramBot\Data\MessageId;
use Appto\TelegramBot\Data\OwnedGifts;
use Appto\TelegramBot\Data\Poll;
use Appto\TelegramBot\Data\PreparedInlineMessage;
use Appto\TelegramBot\Data\ReplyParameters;
use Appto\TelegramBot\Data\SentWebAppMessage;
use Appto\TelegramBot\Data\ShippingOption;
use Appto\TelegramBot\Data\StarAmount;
use Appto\TelegramBot\Data\StarTransactions;
use Appto\TelegramBot\Data\Sticker;
use Appto\TelegramBot\Data\StickerSet;
use Appto\TelegramBot\Data\Story;
use Appto\TelegramBot\Data\StoryArea;
use Appto\TelegramBot\Data\SuggestedPostParameters;
use Appto\TelegramBot\Data\Update;
use Appto\TelegramBot\Data\User;
use Appto\TelegramBot\Data\UserChatBoosts;
use Appto\TelegramBot\Data\UserProfileAudios;
use Appto\TelegramBot\Data\UserProfilePhotos;
use Appto\TelegramBot\Data\WebhookInfo;
use Appto\TelegramBot\Dto\AddStickerToSet;
use Appto\TelegramBot\Dto\AnswerCallbackQuery;
use Appto\TelegramBot\Dto\AnswerInlineQuery;
use Appto\TelegramBot\Dto\AnswerPreCheckoutQuery;
use Appto\TelegramBot\Dto\AnswerShippingQuery;
use Appto\TelegramBot\Dto\AnswerWebAppQuery;
use Appto\TelegramBot\Dto\ApproveChatJoinRequest;
use Appto\TelegramBot\Dto\ApproveSuggestedPost;
use Appto\TelegramBot\Dto\BanChatMember;
use Appto\TelegramBot\Dto\BanChatSenderChat;
use Appto\TelegramBot\Dto\CloseForumTopic;
use Appto\TelegramBot\Dto\CloseGeneralForumTopic;
use Appto\TelegramBot\Dto\ConvertGiftToStars;
use Appto\TelegramBot\Dto\CopyMessage;
use Appto\TelegramBot\Dto\CopyMessages;
use Appto\TelegramBot\Dto\CreateChatInviteLink;
use Appto\TelegramBot\Dto\CreateChatSubscriptionInviteLink;
use Appto\TelegramBot\Dto\CreateForumTopic;
use Appto\TelegramBot\Dto\CreateInvoiceLink;
use Appto\TelegramBot\Dto\CreateNewStickerSet;
use Appto\TelegramBot\Dto\DeclineChatJoinRequest;
use Appto\TelegramBot\Dto\DeclineSuggestedPost;
use Appto\TelegramBot\Dto\DeleteBusinessMessages;
use Appto\TelegramBot\Dto\DeleteChatPhoto;
use Appto\TelegramBot\Dto\DeleteChatStickerSet;
use Appto\TelegramBot\Dto\DeleteForumTopic;
use Appto\TelegramBot\Dto\DeleteMessage;
use Appto\TelegramBot\Dto\DeleteMessages;
use Appto\TelegramBot\Dto\DeleteMyCommands;
use Appto\TelegramBot\Dto\DeleteStickerFromSet;
use Appto\TelegramBot\Dto\DeleteStickerSet;
use Appto\TelegramBot\Dto\DeleteStory;
use Appto\TelegramBot\Dto\DeleteWebhook;
use Appto\TelegramBot\Dto\EditChatInviteLink;
use Appto\TelegramBot\Dto\EditChatSubscriptionInviteLink;
use Appto\TelegramBot\Dto\EditForumTopic;
use Appto\TelegramBot\Dto\EditGeneralForumTopic;
use Appto\TelegramBot\Dto\EditMessageCaption;
use Appto\TelegramBot\Dto\EditMessageChecklist;
use Appto\TelegramBot\Dto\EditMessageLiveLocation;
use Appto\TelegramBot\Dto\EditMessageMedia;
use Appto\TelegramBot\Dto\EditMessageReplyMarkup;
use Appto\TelegramBot\Dto\EditMessageText;
use Appto\TelegramBot\Dto\EditStory;
use Appto\TelegramBot\Dto\EditUserStarSubscription;
use Appto\TelegramBot\Dto\ExportChatInviteLink;
use Appto\TelegramBot\Dto\ForwardMessage;
use Appto\TelegramBot\Dto\ForwardMessages;
use Appto\TelegramBot\Dto\GetBusinessAccountGifts;
use Appto\TelegramBot\Dto\GetBusinessAccountStarBalance;
use Appto\TelegramBot\Dto\GetBusinessConnection;
use Appto\TelegramBot\Dto\GetChat;
use Appto\TelegramBot\Dto\GetChatAdministrators;
use Appto\TelegramBot\Dto\GetChatGifts;
use Appto\TelegramBot\Dto\GetChatMember;
use Appto\TelegramBot\Dto\GetChatMemberCount;
use Appto\TelegramBot\Dto\GetChatMenuButton;
use Appto\TelegramBot\Dto\GetCustomEmojiStickers;
use Appto\TelegramBot\Dto\GetFile;
use Appto\TelegramBot\Dto\GetGameHighScores;
use Appto\TelegramBot\Dto\GetMyCommands;
use Appto\TelegramBot\Dto\GetMyDefaultAdministratorRights;
use Appto\TelegramBot\Dto\GetMyDescription;
use Appto\TelegramBot\Dto\GetMyName;
use Appto\TelegramBot\Dto\GetMyShortDescription;
use Appto\TelegramBot\Dto\GetStarTransactions;
use Appto\TelegramBot\Dto\GetStickerSet;
use Appto\TelegramBot\Dto\GetUpdates;
use Appto\TelegramBot\Dto\GetUserChatBoosts;
use Appto\TelegramBot\Dto\GetUserGifts;
use Appto\TelegramBot\Dto\GetUserProfileAudios;
use Appto\TelegramBot\Dto\GetUserProfilePhotos;
use Appto\TelegramBot\Dto\GiftPremiumSubscription;
use Appto\TelegramBot\Dto\HideGeneralForumTopic;
use Appto\TelegramBot\Dto\LeaveChat;
use Appto\TelegramBot\Dto\PinChatMessage;
use Appto\TelegramBot\Dto\PostStory;
use Appto\TelegramBot\Dto\PromoteChatMember;
use Appto\TelegramBot\Dto\ReadBusinessMessage;
use Appto\TelegramBot\Dto\RefundStarPayment;
use Appto\TelegramBot\Dto\RemoveBusinessAccountProfilePhoto;
use Appto\TelegramBot\Dto\RemoveChatVerification;
use Appto\TelegramBot\Dto\RemoveUserVerification;
use Appto\TelegramBot\Dto\ReopenForumTopic;
use Appto\TelegramBot\Dto\ReopenGeneralForumTopic;
use Appto\TelegramBot\Dto\ReplaceStickerInSet;
use Appto\TelegramBot\Dto\RepostStory;
use Appto\TelegramBot\Dto\RestrictChatMember;
use Appto\TelegramBot\Dto\RevokeChatInviteLink;
use Appto\TelegramBot\Dto\SavePreparedInlineMessage;
use Appto\TelegramBot\Dto\SendAnimation;
use Appto\TelegramBot\Dto\SendAudio;
use Appto\TelegramBot\Dto\SendChatAction;
use Appto\TelegramBot\Dto\SendChecklist;
use Appto\TelegramBot\Dto\SendContact;
use Appto\TelegramBot\Dto\SendDice;
use Appto\TelegramBot\Dto\SendDocument;
use Appto\TelegramBot\Dto\SendGame;
use Appto\TelegramBot\Dto\SendGift;
use Appto\TelegramBot\Dto\SendInvoice;
use Appto\TelegramBot\Dto\SendLocation;
use Appto\TelegramBot\Dto\SendMediaGroup;
use Appto\TelegramBot\Dto\SendMessage;
use Appto\TelegramBot\Dto\SendMessageDraft;
use Appto\TelegramBot\Dto\SendPaidMedia;
use Appto\TelegramBot\Dto\SendPhoto;
use Appto\TelegramBot\Dto\SendPoll;
use Appto\TelegramBot\Dto\SendSticker;
use Appto\TelegramBot\Dto\SendVenue;
use Appto\TelegramBot\Dto\SendVideo;
use Appto\TelegramBot\Dto\SendVideoNote;
use Appto\TelegramBot\Dto\SendVoice;
use Appto\TelegramBot\Dto\SetBusinessAccountBio;
use Appto\TelegramBot\Dto\SetBusinessAccountGiftSettings;
use Appto\TelegramBot\Dto\SetBusinessAccountName;
use Appto\TelegramBot\Dto\SetBusinessAccountProfilePhoto;
use Appto\TelegramBot\Dto\SetBusinessAccountUsername;
use Appto\TelegramBot\Dto\SetChatAdministratorCustomTitle;
use Appto\TelegramBot\Dto\SetChatDescription;
use Appto\TelegramBot\Dto\SetChatMenuButton;
use Appto\TelegramBot\Dto\SetChatPermissions;
use Appto\TelegramBot\Dto\SetChatPhoto;
use Appto\TelegramBot\Dto\SetChatStickerSet;
use Appto\TelegramBot\Dto\SetChatTitle;
use Appto\TelegramBot\Dto\SetCustomEmojiStickerSetThumbnail;
use Appto\TelegramBot\Dto\SetGameScore;
use Appto\TelegramBot\Dto\SetMessageReaction;
use Appto\TelegramBot\Dto\SetMyCommands;
use Appto\TelegramBot\Dto\SetMyDefaultAdministratorRights;
use Appto\TelegramBot\Dto\SetMyDescription;
use Appto\TelegramBot\Dto\SetMyName;
use Appto\TelegramBot\Dto\SetMyProfilePhoto;
use Appto\TelegramBot\Dto\SetMyShortDescription;
use Appto\TelegramBot\Dto\SetPassportDataErrors;
use Appto\TelegramBot\Dto\SetStickerEmojiList;
use Appto\TelegramBot\Dto\SetStickerKeywords;
use Appto\TelegramBot\Dto\SetStickerMaskPosition;
use Appto\TelegramBot\Dto\SetStickerPositionInSet;
use Appto\TelegramBot\Dto\SetStickerSetThumbnail;
use Appto\TelegramBot\Dto\SetStickerSetTitle;
use Appto\TelegramBot\Dto\SetUserEmojiStatus;
use Appto\TelegramBot\Dto\SetWebhook;
use Appto\TelegramBot\Dto\StopMessageLiveLocation;
use Appto\TelegramBot\Dto\StopPoll;
use Appto\TelegramBot\Dto\TransferBusinessAccountStars;
use Appto\TelegramBot\Dto\TransferGift;
use Appto\TelegramBot\Dto\UnbanChatMember;
use Appto\TelegramBot\Dto\UnbanChatSenderChat;
use Appto\TelegramBot\Dto\UnhideGeneralForumTopic;
use Appto\TelegramBot\Dto\UnpinAllChatMessages;
use Appto\TelegramBot\Dto\UnpinAllForumTopicMessages;
use Appto\TelegramBot\Dto\UnpinAllGeneralForumTopicMessages;
use Appto\TelegramBot\Dto\UnpinChatMessage;
use Appto\TelegramBot\Dto\UpgradeGift;
use Appto\TelegramBot\Dto\UploadStickerFile;
use Appto\TelegramBot\Dto\VerifyChat;
use Appto\TelegramBot\Dto\VerifyUser;

interface TelegramBotInterface
{
    /**
     * Use this method to receive incoming updates using long polling (<a
     * href="https://en.wikipedia.org/wiki/Push_technology#Long_polling">wiki</a>).
     * Returns an Array of <a
     * href="https://core.telegram.org/bots/api#update">Update</a> objects.
     *
     * @param GetUpdates|array{
     *   offset?: int,
     *   limit?: int,
     *   timeout?: int,
     *   allowed_updates?: array
     * } $dto
     *
     * @return Update[]
     */
    public function getUpdates(GetUpdates|array $dto): array;

    /**
     * Use this method to specify a URL and receive incoming updates via an outgoing
     * webhook. Whenever there is an update for the bot, we will send an HTTPS POST
     * request to the specified URL, containing a JSON-serialized <a
     * href="https://core.telegram.org/bots/api#update">Update</a>. In case of an
     * unsuccessful request (a request with response <a
     * href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes">HTTP status
     * code</a> different from 2XY), we will repeat the request and give up after a
     * reasonable amount of attempts. Returns <em>True</em> on success.
     * If you'd like to make sure that the webhook was set by you, you can specify
     * secret data in the parameter <em>secret_token</em>. If specified, the request
     * will contain a header "X-Telegram-Bot-Api-Secret-Token" with the secret token as
     * content.
     *
     * @param SetWebhook|array{
     *   url: string,
     *   certificate?: InputFile,
     *   ip_address?: string,
     *   max_connections?: int,
     *   allowed_updates?: array,
     *   drop_pending_updates?: bool,
     *   secret_token?: string
     * } $dto
     *
     * @return true
     */
    public function setWebhook(SetWebhook|array $dto): true;

    /**
     * Use this method to remove webhook integration if you decide to switch back to <a
     * href="https://core.telegram.org/bots/api#getupdates">getUpdates</a>. Returns
     * <em>True</em> on success.
     *
     * @param DeleteWebhook|array{
     *   drop_pending_updates?: bool
     * } $dto
     *
     * @return true
     */
    public function deleteWebhook(DeleteWebhook|array $dto): true;

    /**
     * Use this method to get current webhook status. Requires no parameters. On
     * success, returns a <a
     * href="https://core.telegram.org/bots/api#webhookinfo">WebhookInfo</a> object. If
     * the bot is using <a
     * href="https://core.telegram.org/bots/api#getupdates">getUpdates</a>, will return
     * an object with the <em>url</em> field empty.
     *
     * @return WebhookInfo
     */
    public function getWebhookInfo(): WebhookInfo;

    /**
     * A simple method for testing your bot's authentication token. Requires no
     * parameters. Returns basic information about the bot in form of a <a
     * href="https://core.telegram.org/bots/api#user">User</a> object.
     *
     * @return User
     */
    public function getMe(): User;

    /**
     * Use this method to log out from the cloud Bot API server before launching the
     * bot locally. You must log out the bot before running it locally, otherwise there
     * is no guarantee that the bot will receive updates. After a successful call, you
     * can immediately log in on a local server, but will not be able to log in back to
     * the cloud Bot API server for 10 minutes. Returns <em>True</em> on success.
     * Requires no parameters.
     *
     * @return true
     */
    public function logOut(): true;

    /**
     * Use this method to close the bot instance before moving it from one local server
     * to another. You need to delete the webhook before calling this method to ensure
     * that the bot isn't launched again after server restart. The method will return
     * error 429 in the first 10 minutes after the bot is launched. Returns
     * <em>True</em> on success. Requires no parameters.
     *
     * @return true
     */
    public function close(): true;

    /**
     * Use this method to send text messages. On success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param SendMessage|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   text: string,
     *   parse_mode?: string,
     *   entities?: MessageEntity[],
     *   link_preview_options?: LinkPreviewOptions,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendMessage(SendMessage|array $dto): Message;

    /**
     * Use this method to forward messages of any kind. Service messages and messages
     * with protected content can't be forwarded. On success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param ForwardMessage|array{
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   from_chat_id: int|string,
     *   video_start_timestamp?: int,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   message_id: int
     * } $dto
     *
     * @return Message
     */
    public function forwardMessage(ForwardMessage|array $dto): Message;

    /**
     * Use this method to forward multiple messages of any kind. If some of the
     * specified messages can't be found or forwarded, they are skipped. Service
     * messages and messages with protected content can't be forwarded. Album grouping
     * is kept for forwarded messages. On success, an array of <a
     * href="https://core.telegram.org/bots/api#messageid">MessageId</a> of the sent
     * messages is returned.
     *
     * @param ForwardMessages|array{
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   from_chat_id: int|string,
     *   message_ids: array,
     *   disable_notification?: bool,
     *   protect_content?: bool
     * } $dto
     *
     * @return MessageId[]
     */
    public function forwardMessages(ForwardMessages|array $dto): array;

    /**
     * Use this method to copy messages of any kind. Service messages, paid media
     * messages, giveaway messages, giveaway winners messages, and invoice messages
     * can't be copied. A quiz <a
     * href="https://core.telegram.org/bots/api#poll">poll</a> can be copied only if
     * the value of the field <em>correct_option_id</em> is known to the bot. The
     * method is analogous to the method <a
     * href="https://core.telegram.org/bots/api#forwardmessage">forwardMessage</a>, but
     * the copied message doesn't have a link to the original message. Returns the <a
     * href="https://core.telegram.org/bots/api#messageid">MessageId</a> of the sent
     * message on success.
     *
     * @param CopyMessage|array{
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   from_chat_id: int|string,
     *   message_id: int,
     *   video_start_timestamp?: int,
     *   caption?: string,
     *   parse_mode?: string,
     *   caption_entities?: MessageEntity[],
     *   show_caption_above_media?: bool,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return MessageId
     */
    public function copyMessage(CopyMessage|array $dto): MessageId;

    /**
     * Use this method to copy messages of any kind. If some of the specified messages
     * can't be found or copied, they are skipped. Service messages, paid media
     * messages, giveaway messages, giveaway winners messages, and invoice messages
     * can't be copied. A quiz <a
     * href="https://core.telegram.org/bots/api#poll">poll</a> can be copied only if
     * the value of the field <em>correct_option_id</em> is known to the bot. The
     * method is analogous to the method <a
     * href="https://core.telegram.org/bots/api#forwardmessages">forwardMessages</a>,
     * but the copied messages don't have a link to the original message. Album
     * grouping is kept for copied messages. On success, an array of <a
     * href="https://core.telegram.org/bots/api#messageid">MessageId</a> of the sent
     * messages is returned.
     *
     * @param CopyMessages|array{
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   from_chat_id: int|string,
     *   message_ids: array,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   remove_caption?: bool
     * } $dto
     *
     * @return MessageId[]
     */
    public function copyMessages(CopyMessages|array $dto): array;

    /**
     * Use this method to send photos. On success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param SendPhoto|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   photo: InputFile|array|string,
     *   caption?: string,
     *   parse_mode?: string,
     *   caption_entities?: MessageEntity[],
     *   show_caption_above_media?: bool,
     *   has_spoiler?: bool,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendPhoto(SendPhoto|array $dto): Message;

    /**
     * Use this method to send audio files, if you want Telegram clients to display
     * them in the music player. Your audio must be in the .MP3 or .M4A format. On
     * success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned. Bots
     * can currently send audio files of up to 50 MB in size, this limit may be changed
     * in the future.
     * For sending voice messages, use the <a
     * href="https://core.telegram.org/bots/api#sendvoice">sendVoice</a> method
     * instead.
     *
     * @param SendAudio|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   audio: InputFile|array|string,
     *   caption?: string,
     *   parse_mode?: string,
     *   caption_entities?: MessageEntity[],
     *   duration?: int,
     *   performer?: string,
     *   title?: string,
     *   thumbnail?: InputFile|array|string,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendAudio(SendAudio|array $dto): Message;

    /**
     * Use this method to send general files. On success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned. Bots
     * can currently send files of any type of up to 50 MB in size, this limit may be
     * changed in the future.
     *
     * @param SendDocument|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   document: InputFile|array|string,
     *   thumbnail?: InputFile|array|string,
     *   caption?: string,
     *   parse_mode?: string,
     *   caption_entities?: MessageEntity[],
     *   disable_content_type_detection?: bool,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendDocument(SendDocument|array $dto): Message;

    /**
     * Use this method to send video files, Telegram clients support MPEG4 videos
     * (other formats may be sent as <a
     * href="https://core.telegram.org/bots/api#document">Document</a>). On success,
     * the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is
     * returned. Bots can currently send video files of up to 50 MB in size, this limit
     * may be changed in the future.
     *
     * @param SendVideo|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   video: InputFile|array|string,
     *   duration?: int,
     *   width?: int,
     *   height?: int,
     *   thumbnail?: InputFile|array|string,
     *   cover?: InputFile|array|string,
     *   start_timestamp?: int,
     *   caption?: string,
     *   parse_mode?: string,
     *   caption_entities?: MessageEntity[],
     *   show_caption_above_media?: bool,
     *   has_spoiler?: bool,
     *   supports_streaming?: bool,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendVideo(SendVideo|array $dto): Message;

    /**
     * Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without
     * sound). On success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned. Bots
     * can currently send animation files of up to 50 MB in size, this limit may be
     * changed in the future.
     *
     * @param SendAnimation|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   animation: InputFile|array|string,
     *   duration?: int,
     *   width?: int,
     *   height?: int,
     *   thumbnail?: InputFile|array|string,
     *   caption?: string,
     *   parse_mode?: string,
     *   caption_entities?: MessageEntity[],
     *   show_caption_above_media?: bool,
     *   has_spoiler?: bool,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendAnimation(SendAnimation|array $dto): Message;

    /**
     * Use this method to send audio files, if you want Telegram clients to display the
     * file as a playable voice message. For this to work, your audio must be in an
     * .OGG file encoded with OPUS, or in .MP3 format, or in .M4A format (other formats
     * may be sent as <a href="https://core.telegram.org/bots/api#audio">Audio</a> or
     * <a href="https://core.telegram.org/bots/api#document">Document</a>). On success,
     * the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is
     * returned. Bots can currently send voice messages of up to 50 MB in size, this
     * limit may be changed in the future.
     *
     * @param SendVoice|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   voice: InputFile|array|string,
     *   caption?: string,
     *   parse_mode?: string,
     *   caption_entities?: MessageEntity[],
     *   duration?: int,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendVoice(SendVoice|array $dto): Message;

    /**
     * As of <a
     * href="https://telegram.org/blog/video-messages-and-telescope">v.4.0</a>,
     * Telegram clients support rounded square MPEG4 videos of up to 1 minute long. Use
     * this method to send video messages. On success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param SendVideoNote|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   video_note: InputFile|array|string,
     *   duration?: int,
     *   length?: int,
     *   thumbnail?: InputFile|array|string,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendVideoNote(SendVideoNote|array $dto): Message;

    /**
     * Use this method to send paid media. On success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param SendPaidMedia|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   star_count: int,
     *   media: InputPaidMedia[],
     *   payload?: string,
     *   caption?: string,
     *   parse_mode?: string,
     *   caption_entities?: MessageEntity[],
     *   show_caption_above_media?: bool,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendPaidMedia(SendPaidMedia|array $dto): Message;

    /**
     * Use this method to send a group of photos, videos, documents or audios as an
     * album. Documents and audio files can be only grouped in an album with messages
     * of the same type. On success, an array of <a
     * href="https://core.telegram.org/bots/api#message">Message</a> objects that were
     * sent is returned.
     *
     * @param SendMediaGroup|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   media: InputMediaAudio|array|InputMediaDocument|InputMediaPhoto|InputMediaVideo,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   reply_parameters?: ReplyParameters
     * } $dto
     *
     * @return Message[]
     */
    public function sendMediaGroup(SendMediaGroup|array $dto): array;

    /**
     * Use this method to send point on the map. On success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param SendLocation|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   latitude: float,
     *   longitude: float,
     *   horizontal_accuracy?: float,
     *   live_period?: int,
     *   heading?: int,
     *   proximity_alert_radius?: int,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendLocation(SendLocation|array $dto): Message;

    /**
     * Use this method to send information about a venue. On success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param SendVenue|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   latitude: float,
     *   longitude: float,
     *   title: string,
     *   address: string,
     *   foursquare_id?: string,
     *   foursquare_type?: string,
     *   google_place_id?: string,
     *   google_place_type?: string,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendVenue(SendVenue|array $dto): Message;

    /**
     * Use this method to send phone contacts. On success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param SendContact|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   phone_number: string,
     *   first_name: string,
     *   last_name?: string,
     *   vcard?: string,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendContact(SendContact|array $dto): Message;

    /**
     * Use this method to send a native poll. On success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param SendPoll|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   question: string,
     *   question_parse_mode?: string,
     *   question_entities?: MessageEntity[],
     *   options: InputPollOption[],
     *   is_anonymous?: bool,
     *   type?: string,
     *   allows_multiple_answers?: bool,
     *   correct_option_id?: int,
     *   explanation?: string,
     *   explanation_parse_mode?: string,
     *   explanation_entities?: MessageEntity[],
     *   open_period?: int,
     *   close_date?: int,
     *   is_closed?: bool,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendPoll(SendPoll|array $dto): Message;

    /**
     * Use this method to send a checklist on behalf of a connected business account.
     * On success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param SendChecklist|array{
     *   business_connection_id: string,
     *   chat_id: int,
     *   checklist: InputChecklist,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   message_effect_id?: string,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: InlineKeyboardMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendChecklist(SendChecklist|array $dto): Message;

    /**
     * Use this method to send an animated emoji that will display a random value. On
     * success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param SendDice|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   emoji?: string,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendDice(SendDice|array $dto): Message;

    /**
     * Use this method to stream a partial message to a user while the message is being
     * generated; supported only for bots with forum topic mode enabled. Returns
     * <em>True</em> on success.
     *
     * @param SendMessageDraft|array{
     *   chat_id: int,
     *   message_thread_id?: int,
     *   draft_id: int,
     *   text: string,
     *   parse_mode?: string,
     *   entities?: MessageEntity[]
     * } $dto
     *
     * @return true
     */
    public function sendMessageDraft(SendMessageDraft|array $dto): true;

    /**
     * Use this method when you need to tell the user that something is happening on
     * the bot's side. The status is set for 5 seconds or less (when a message arrives
     * from your bot, Telegram clients clear its typing status). Returns <em>True</em>
     * on success.
     * Example: The <a href="https://t.me/imagebot">ImageBot</a> needs some time to
     * process a request and upload the image. Instead of sending a text message along
     * the lines of "Retrieving image, please wait…", the bot may use <a
     * href="https://core.telegram.org/bots/api#sendchataction">sendChatAction</a> with
     * <em>action</em> = <em>upload_photo</em>. The user will see a "sending photo"
     * status for the bot.
     * We only recommend using this method when a response from the bot will take a
     * noticeable amount of time to arrive.
     *
     * @param SendChatAction|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   action: string
     * } $dto
     *
     * @return true
     */
    public function sendChatAction(SendChatAction|array $dto): true;

    /**
     * Use this method to change the chosen reactions on a message. Service messages of
     * some types can't be reacted to. Automatically forwarded messages from a channel
     * to its discussion group have the same available reactions as messages in the
     * channel. Bots can't use paid reactions. Returns <em>True</em> on success.
     *
     * @param SetMessageReaction|array{
     *   chat_id: int|string,
     *   message_id: int,
     *   reaction?: ReactionType[],
     *   is_big?: bool
     * } $dto
     *
     * @return true
     */
    public function setMessageReaction(SetMessageReaction|array $dto): true;

    /**
     * Use this method to get a list of profile pictures for a user. Returns a <a
     * href="https://core.telegram.org/bots/api#userprofilephotos">UserProfilePhotos</a>
     * object.
     *
     * @param GetUserProfilePhotos|array{
     *   user_id: int,
     *   offset?: int,
     *   limit?: int
     * } $dto
     *
     * @return UserProfilePhotos
     */
    public function getUserProfilePhotos(GetUserProfilePhotos|array $dto): UserProfilePhotos;

    /**
     * Use this method to get a list of profile audios for a user. Returns a <a
     * href="https://core.telegram.org/bots/api#userprofileaudios">UserProfileAudios</a>
     * object.
     *
     * @param GetUserProfileAudios|array{
     *   user_id: int,
     *   offset?: int,
     *   limit?: int
     * } $dto
     *
     * @return UserProfileAudios
     */
    public function getUserProfileAudios(GetUserProfileAudios|array $dto): UserProfileAudios;

    /**
     * Changes the emoji status for a given user that previously allowed the bot to
     * manage their emoji status via the Mini App method <a
     * href="https://core.telegram.org/bots/webapps#initializing-mini-apps">requestEmojiStatusAccess</a>.
     * Returns <em>True</em> on success.
     *
     * @param SetUserEmojiStatus|array{
     *   user_id: int,
     *   emoji_status_custom_emoji_id?: string,
     *   emoji_status_expiration_date?: int
     * } $dto
     *
     * @return true
     */
    public function setUserEmojiStatus(SetUserEmojiStatus|array $dto): true;

    /**
     * Use this method to get basic information about a file and prepare it for
     * downloading. For the moment, bots can download files of up to 20MB in size. On
     * success, a <a href="https://core.telegram.org/bots/api#file">File</a> object is
     * returned. The file can then be downloaded via the link
     * https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken
     * from the response. It is guaranteed that the link will be valid for at least 1
     * hour. When the link expires, a new one can be requested by calling <a
     * href="https://core.telegram.org/bots/api#getfile">getFile</a> again.
     *
     * @param GetFile|array{
     *   file_id: string
     * } $dto
     *
     * @return File
     */
    public function getFile(GetFile|array $dto): File;

    /**
     * Use this method to ban a user in a group, a supergroup or a channel. In the case
     * of supergroups and channels, the user will not be able to return to the chat on
     * their own using invite links, etc., unless <a
     * href="https://core.telegram.org/bots/api#unbanchatmember">unbanned</a> first.
     * The bot must be an administrator in the chat for this to work and must have the
     * appropriate administrator rights. Returns <em>True</em> on success.
     *
     * @param BanChatMember|array{
     *   chat_id: int|string,
     *   user_id: int,
     *   until_date?: int,
     *   revoke_messages?: bool
     * } $dto
     *
     * @return true
     */
    public function banChatMember(BanChatMember|array $dto): true;

    /**
     * Use this method to unban a previously banned user in a supergroup or channel.
     * The user will not return to the group or channel automatically, but will be able
     * to join via link, etc. The bot must be an administrator for this to work. By
     * default, this method guarantees that after the call the user is not a member of
     * the chat, but will be able to join it. So if the user is a member of the chat
     * they will also be removed from the chat. If you don't want this, use the
     * parameter <em>only_if_banned</em>. Returns <em>True</em> on success.
     *
     * @param UnbanChatMember|array{
     *   chat_id: int|string,
     *   user_id: int,
     *   only_if_banned?: bool
     * } $dto
     *
     * @return true
     */
    public function unbanChatMember(UnbanChatMember|array $dto): true;

    /**
     * Use this method to restrict a user in a supergroup. The bot must be an
     * administrator in the supergroup for this to work and must have the appropriate
     * administrator rights. Pass <em>True</em> for all permissions to lift
     * restrictions from a user. Returns <em>True</em> on success.
     *
     * @param RestrictChatMember|array{
     *   chat_id: int|string,
     *   user_id: int,
     *   permissions: ChatPermissions,
     *   use_independent_chat_permissions?: bool,
     *   until_date?: int
     * } $dto
     *
     * @return true
     */
    public function restrictChatMember(RestrictChatMember|array $dto): true;

    /**
     * Use this method to promote or demote a user in a supergroup or a channel. The
     * bot must be an administrator in the chat for this to work and must have the
     * appropriate administrator rights. Pass <em>False</em> for all boolean parameters
     * to demote a user. Returns <em>True</em> on success.
     *
     * @param PromoteChatMember|array{
     *   chat_id: int|string,
     *   user_id: int,
     *   is_anonymous?: bool,
     *   can_manage_chat?: bool,
     *   can_delete_messages?: bool,
     *   can_manage_video_chats?: bool,
     *   can_restrict_members?: bool,
     *   can_promote_members?: bool,
     *   can_change_info?: bool,
     *   can_invite_users?: bool,
     *   can_post_stories?: bool,
     *   can_edit_stories?: bool,
     *   can_delete_stories?: bool,
     *   can_post_messages?: bool,
     *   can_edit_messages?: bool,
     *   can_pin_messages?: bool,
     *   can_manage_topics?: bool,
     *   can_manage_direct_messages?: bool
     * } $dto
     *
     * @return true
     */
    public function promoteChatMember(PromoteChatMember|array $dto): true;

    /**
     * Use this method to set a custom title for an administrator in a supergroup
     * promoted by the bot. Returns <em>True</em> on success.
     *
     * @param SetChatAdministratorCustomTitle|array{
     *   chat_id: int|string,
     *   user_id: int,
     *   custom_title: string
     * } $dto
     *
     * @return true
     */
    public function setChatAdministratorCustomTitle(SetChatAdministratorCustomTitle|array $dto): true;

    /**
     * Use this method to ban a channel chat in a supergroup or a channel. Until the
     * chat is <a
     * href="https://core.telegram.org/bots/api#unbanchatsenderchat">unbanned</a>, the
     * owner of the banned chat won't be able to send messages on behalf of any of
     * their channels. The bot must be an administrator in the supergroup or channel
     * for this to work and must have the appropriate administrator rights. Returns
     * <em>True</em> on success.
     *
     * @param BanChatSenderChat|array{
     *   chat_id: int|string,
     *   sender_chat_id: int
     * } $dto
     *
     * @return true
     */
    public function banChatSenderChat(BanChatSenderChat|array $dto): true;

    /**
     * Use this method to unban a previously banned channel chat in a supergroup or
     * channel. The bot must be an administrator for this to work and must have the
     * appropriate administrator rights. Returns <em>True</em> on success.
     *
     * @param UnbanChatSenderChat|array{
     *   chat_id: int|string,
     *   sender_chat_id: int
     * } $dto
     *
     * @return true
     */
    public function unbanChatSenderChat(UnbanChatSenderChat|array $dto): true;

    /**
     * Use this method to set default chat permissions for all members. The bot must be
     * an administrator in the group or a supergroup for this to work and must have the
     * <em>can_restrict_members</em> administrator rights. Returns <em>True</em> on
     * success.
     *
     * @param SetChatPermissions|array{
     *   chat_id: int|string,
     *   permissions: ChatPermissions,
     *   use_independent_chat_permissions?: bool
     * } $dto
     *
     * @return true
     */
    public function setChatPermissions(SetChatPermissions|array $dto): true;

    /**
     * Use this method to generate a new primary invite link for a chat; any previously
     * generated primary link is revoked. The bot must be an administrator in the chat
     * for this to work and must have the appropriate administrator rights. Returns the
     * new invite link as <em>String</em> on success.
     *
     * @param ExportChatInviteLink|array{
     *   chat_id: int|string
     * } $dto
     *
     * @return string
     */
    public function exportChatInviteLink(ExportChatInviteLink|array $dto): string;

    /**
     * Use this method to create an additional invite link for a chat. The bot must be
     * an administrator in the chat for this to work and must have the appropriate
     * administrator rights. The link can be revoked using the method <a
     * href="https://core.telegram.org/bots/api#revokechatinvitelink">revokeChatInviteLink</a>.
     * Returns the new invite link as <a
     * href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a>
     * object.
     *
     * @param CreateChatInviteLink|array{
     *   chat_id: int|string,
     *   name?: string,
     *   expire_date?: int,
     *   member_limit?: int,
     *   creates_join_request?: bool
     * } $dto
     *
     * @return ChatInviteLink
     */
    public function createChatInviteLink(CreateChatInviteLink|array $dto): ChatInviteLink;

    /**
     * Use this method to edit a non-primary invite link created by the bot. The bot
     * must be an administrator in the chat for this to work and must have the
     * appropriate administrator rights. Returns the edited invite link as a <a
     * href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a>
     * object.
     *
     * @param EditChatInviteLink|array{
     *   chat_id: int|string,
     *   invite_link: string,
     *   name?: string,
     *   expire_date?: int,
     *   member_limit?: int,
     *   creates_join_request?: bool
     * } $dto
     *
     * @return ChatInviteLink
     */
    public function editChatInviteLink(EditChatInviteLink|array $dto): ChatInviteLink;

    /**
     * Use this method to create a <a
     * href="https://telegram.org/blog/superchannels-star-reactions-subscriptions#star-subscriptions">subscription
     * invite link</a> for a channel chat. The bot must have the
     * <em>can_invite_users</em> administrator rights. The link can be edited using the
     * method <a
     * href="https://core.telegram.org/bots/api#editchatsubscriptioninvitelink">editChatSubscriptionInviteLink</a>
     * or revoked using the method <a
     * href="https://core.telegram.org/bots/api#revokechatinvitelink">revokeChatInviteLink</a>.
     * Returns the new invite link as a <a
     * href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a>
     * object.
     *
     * @param CreateChatSubscriptionInviteLink|array{
     *   chat_id: int|string,
     *   name?: string,
     *   subscription_period: int,
     *   subscription_price: int
     * } $dto
     *
     * @return ChatInviteLink
     */
    public function createChatSubscriptionInviteLink(CreateChatSubscriptionInviteLink|array $dto): ChatInviteLink;

    /**
     * Use this method to edit a subscription invite link created by the bot. The bot
     * must have the <em>can_invite_users</em> administrator rights. Returns the edited
     * invite link as a <a
     * href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a>
     * object.
     *
     * @param EditChatSubscriptionInviteLink|array{
     *   chat_id: int|string,
     *   invite_link: string,
     *   name?: string
     * } $dto
     *
     * @return ChatInviteLink
     */
    public function editChatSubscriptionInviteLink(EditChatSubscriptionInviteLink|array $dto): ChatInviteLink;

    /**
     * Use this method to revoke an invite link created by the bot. If the primary link
     * is revoked, a new link is automatically generated. The bot must be an
     * administrator in the chat for this to work and must have the appropriate
     * administrator rights. Returns the revoked invite link as <a
     * href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a>
     * object.
     *
     * @param RevokeChatInviteLink|array{
     *   chat_id: int|string,
     *   invite_link: string
     * } $dto
     *
     * @return ChatInviteLink
     */
    public function revokeChatInviteLink(RevokeChatInviteLink|array $dto): ChatInviteLink;

    /**
     * Use this method to approve a chat join request. The bot must be an administrator
     * in the chat for this to work and must have the <em>can_invite_users</em>
     * administrator right. Returns <em>True</em> on success.
     *
     * @param ApproveChatJoinRequest|array{
     *   chat_id: int|string,
     *   user_id: int
     * } $dto
     *
     * @return true
     */
    public function approveChatJoinRequest(ApproveChatJoinRequest|array $dto): true;

    /**
     * Use this method to decline a chat join request. The bot must be an administrator
     * in the chat for this to work and must have the <em>can_invite_users</em>
     * administrator right. Returns <em>True</em> on success.
     *
     * @param DeclineChatJoinRequest|array{
     *   chat_id: int|string,
     *   user_id: int
     * } $dto
     *
     * @return true
     */
    public function declineChatJoinRequest(DeclineChatJoinRequest|array $dto): true;

    /**
     * Use this method to set a new profile photo for the chat. Photos can't be changed
     * for private chats. The bot must be an administrator in the chat for this to work
     * and must have the appropriate administrator rights. Returns <em>True</em> on
     * success.
     *
     * @param SetChatPhoto|array{
     *   chat_id: int|string,
     *   photo: InputFile
     * } $dto
     *
     * @return true
     */
    public function setChatPhoto(SetChatPhoto|array $dto): true;

    /**
     * Use this method to delete a chat photo. Photos can't be changed for private
     * chats. The bot must be an administrator in the chat for this to work and must
     * have the appropriate administrator rights. Returns <em>True</em> on success.
     *
     * @param DeleteChatPhoto|array{
     *   chat_id: int|string
     * } $dto
     *
     * @return true
     */
    public function deleteChatPhoto(DeleteChatPhoto|array $dto): true;

    /**
     * Use this method to change the title of a chat. Titles can't be changed for
     * private chats. The bot must be an administrator in the chat for this to work and
     * must have the appropriate administrator rights. Returns <em>True</em> on
     * success.
     *
     * @param SetChatTitle|array{
     *   chat_id: int|string,
     *   title: string
     * } $dto
     *
     * @return true
     */
    public function setChatTitle(SetChatTitle|array $dto): true;

    /**
     * Use this method to change the description of a group, a supergroup or a channel.
     * The bot must be an administrator in the chat for this to work and must have the
     * appropriate administrator rights. Returns <em>True</em> on success.
     *
     * @param SetChatDescription|array{
     *   chat_id: int|string,
     *   description?: string
     * } $dto
     *
     * @return true
     */
    public function setChatDescription(SetChatDescription|array $dto): true;

    /**
     * Use this method to add a message to the list of pinned messages in a chat. In
     * private chats and channel direct messages chats, all non-service messages can be
     * pinned. Conversely, the bot must be an administrator with the 'can_pin_messages'
     * right or the 'can_edit_messages' right to pin messages in groups and channels
     * respectively. Returns <em>True</em> on success.
     *
     * @param PinChatMessage|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_id: int,
     *   disable_notification?: bool
     * } $dto
     *
     * @return true
     */
    public function pinChatMessage(PinChatMessage|array $dto): true;

    /**
     * Use this method to remove a message from the list of pinned messages in a chat.
     * In private chats and channel direct messages chats, all messages can be
     * unpinned. Conversely, the bot must be an administrator with the
     * 'can_pin_messages' right or the 'can_edit_messages' right to unpin messages in
     * groups and channels respectively. Returns <em>True</em> on success.
     *
     * @param UnpinChatMessage|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_id?: int
     * } $dto
     *
     * @return true
     */
    public function unpinChatMessage(UnpinChatMessage|array $dto): true;

    /**
     * Use this method to clear the list of pinned messages in a chat. In private chats
     * and channel direct messages chats, no additional rights are required to unpin
     * all pinned messages. Conversely, the bot must be an administrator with the
     * 'can_pin_messages' right or the 'can_edit_messages' right to unpin all pinned
     * messages in groups and channels respectively. Returns <em>True</em> on success.
     *
     * @param UnpinAllChatMessages|array{
     *   chat_id: int|string
     * } $dto
     *
     * @return true
     */
    public function unpinAllChatMessages(UnpinAllChatMessages|array $dto): true;

    /**
     * Use this method for your bot to leave a group, supergroup or channel. Returns
     * <em>True</em> on success.
     *
     * @param LeaveChat|array{
     *   chat_id: int|string
     * } $dto
     *
     * @return true
     */
    public function leaveChat(LeaveChat|array $dto): true;

    /**
     * Use this method to get up-to-date information about the chat. Returns a <a
     * href="https://core.telegram.org/bots/api#chatfullinfo">ChatFullInfo</a> object
     * on success.
     *
     * @param GetChat|array{
     *   chat_id: int|string
     * } $dto
     *
     * @return ChatFullInfo
     */
    public function getChat(GetChat|array $dto): ChatFullInfo;

    /**
     * Use this method to get a list of administrators in a chat, which aren't bots.
     * Returns an Array of <a
     * href="https://core.telegram.org/bots/api#chatmember">ChatMember</a> objects.
     *
     * @param GetChatAdministrators|array{
     *   chat_id: int|string
     * } $dto
     *
     * @return ChatMember[]
     */
    public function getChatAdministrators(GetChatAdministrators|array $dto): array;

    /**
     * Use this method to get the number of members in a chat. Returns <em>Int</em> on
     * success.
     *
     * @param GetChatMemberCount|array{
     *   chat_id: int|string
     * } $dto
     *
     * @return int
     */
    public function getChatMemberCount(GetChatMemberCount|array $dto): int;

    /**
     * Use this method to get information about a member of a chat. The method is only
     * guaranteed to work for other users if the bot is an administrator in the chat.
     * Returns a <a href="https://core.telegram.org/bots/api#chatmember">ChatMember</a>
     * object on success.
     *
     * @param GetChatMember|array{
     *   chat_id: int|string,
     *   user_id: int
     * } $dto
     *
     * @return ChatMember
     */
    public function getChatMember(GetChatMember|array $dto): ChatMember;

    /**
     * Use this method to set a new group sticker set for a supergroup. The bot must be
     * an administrator in the chat for this to work and must have the appropriate
     * administrator rights. Use the field <em>can_set_sticker_set</em> optionally
     * returned in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>
     * requests to check if the bot can use this method. Returns <em>True</em> on
     * success.
     *
     * @param SetChatStickerSet|array{
     *   chat_id: int|string,
     *   sticker_set_name: string
     * } $dto
     *
     * @return true
     */
    public function setChatStickerSet(SetChatStickerSet|array $dto): true;

    /**
     * Use this method to delete a group sticker set from a supergroup. The bot must be
     * an administrator in the chat for this to work and must have the appropriate
     * administrator rights. Use the field <em>can_set_sticker_set</em> optionally
     * returned in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>
     * requests to check if the bot can use this method. Returns <em>True</em> on
     * success.
     *
     * @param DeleteChatStickerSet|array{
     *   chat_id: int|string
     * } $dto
     *
     * @return true
     */
    public function deleteChatStickerSet(DeleteChatStickerSet|array $dto): true;

    /**
     * Use this method to get custom emoji stickers, which can be used as a forum topic
     * icon by any user. Requires no parameters. Returns an Array of <a
     * href="https://core.telegram.org/bots/api#sticker">Sticker</a> objects.
     *
     * @return Sticker[]
     */
    public function getForumTopicIconStickers(): array;

    /**
     * Use this method to create a topic in a forum supergroup chat or a private chat
     * with a user. In the case of a supergroup chat the bot must be an administrator
     * in the chat for this to work and must have the <em>can_manage_topics</em>
     * administrator right. Returns information about the created topic as a <a
     * href="https://core.telegram.org/bots/api#forumtopic">ForumTopic</a> object.
     *
     * @param CreateForumTopic|array{
     *   chat_id: int|string,
     *   name: string,
     *   icon_color?: int,
     *   icon_custom_emoji_id?: string
     * } $dto
     *
     * @return ForumTopic
     */
    public function createForumTopic(CreateForumTopic|array $dto): ForumTopic;

    /**
     * Use this method to edit name and icon of a topic in a forum supergroup chat or a
     * private chat with a user. In the case of a supergroup chat the bot must be an
     * administrator in the chat for this to work and must have the
     * <em>can_manage_topics</em> administrator rights, unless it is the creator of the
     * topic. Returns <em>True</em> on success.
     *
     * @param EditForumTopic|array{
     *   chat_id: int|string,
     *   message_thread_id: int,
     *   name?: string,
     *   icon_custom_emoji_id?: string
     * } $dto
     *
     * @return true
     */
    public function editForumTopic(EditForumTopic|array $dto): true;

    /**
     * Use this method to close an open topic in a forum supergroup chat. The bot must
     * be an administrator in the chat for this to work and must have the
     * <em>can_manage_topics</em> administrator rights, unless it is the creator of the
     * topic. Returns <em>True</em> on success.
     *
     * @param CloseForumTopic|array{
     *   chat_id: int|string,
     *   message_thread_id: int
     * } $dto
     *
     * @return true
     */
    public function closeForumTopic(CloseForumTopic|array $dto): true;

    /**
     * Use this method to reopen a closed topic in a forum supergroup chat. The bot
     * must be an administrator in the chat for this to work and must have the
     * <em>can_manage_topics</em> administrator rights, unless it is the creator of the
     * topic. Returns <em>True</em> on success.
     *
     * @param ReopenForumTopic|array{
     *   chat_id: int|string,
     *   message_thread_id: int
     * } $dto
     *
     * @return true
     */
    public function reopenForumTopic(ReopenForumTopic|array $dto): true;

    /**
     * Use this method to delete a forum topic along with all its messages in a forum
     * supergroup chat or a private chat with a user. In the case of a supergroup chat
     * the bot must be an administrator in the chat for this to work and must have the
     * <em>can_delete_messages</em> administrator rights. Returns <em>True</em> on
     * success.
     *
     * @param DeleteForumTopic|array{
     *   chat_id: int|string,
     *   message_thread_id: int
     * } $dto
     *
     * @return true
     */
    public function deleteForumTopic(DeleteForumTopic|array $dto): true;

    /**
     * Use this method to clear the list of pinned messages in a forum topic in a forum
     * supergroup chat or a private chat with a user. In the case of a supergroup chat
     * the bot must be an administrator in the chat for this to work and must have the
     * <em>can_pin_messages</em> administrator right in the supergroup. Returns
     * <em>True</em> on success.
     *
     * @param UnpinAllForumTopicMessages|array{
     *   chat_id: int|string,
     *   message_thread_id: int
     * } $dto
     *
     * @return true
     */
    public function unpinAllForumTopicMessages(UnpinAllForumTopicMessages|array $dto): true;

    /**
     * Use this method to edit the name of the 'General' topic in a forum supergroup
     * chat. The bot must be an administrator in the chat for this to work and must
     * have the <em>can_manage_topics</em> administrator rights. Returns <em>True</em>
     * on success.
     *
     * @param EditGeneralForumTopic|array{
     *   chat_id: int|string,
     *   name: string
     * } $dto
     *
     * @return true
     */
    public function editGeneralForumTopic(EditGeneralForumTopic|array $dto): true;

    /**
     * Use this method to close an open 'General' topic in a forum supergroup chat. The
     * bot must be an administrator in the chat for this to work and must have the
     * <em>can_manage_topics</em> administrator rights. Returns <em>True</em> on
     * success.
     *
     * @param CloseGeneralForumTopic|array{
     *   chat_id: int|string
     * } $dto
     *
     * @return true
     */
    public function closeGeneralForumTopic(CloseGeneralForumTopic|array $dto): true;

    /**
     * Use this method to reopen a closed 'General' topic in a forum supergroup chat.
     * The bot must be an administrator in the chat for this to work and must have the
     * <em>can_manage_topics</em> administrator rights. The topic will be automatically
     * unhidden if it was hidden. Returns <em>True</em> on success.
     *
     * @param ReopenGeneralForumTopic|array{
     *   chat_id: int|string
     * } $dto
     *
     * @return true
     */
    public function reopenGeneralForumTopic(ReopenGeneralForumTopic|array $dto): true;

    /**
     * Use this method to hide the 'General' topic in a forum supergroup chat. The bot
     * must be an administrator in the chat for this to work and must have the
     * <em>can_manage_topics</em> administrator rights. The topic will be automatically
     * closed if it was open. Returns <em>True</em> on success.
     *
     * @param HideGeneralForumTopic|array{
     *   chat_id: int|string
     * } $dto
     *
     * @return true
     */
    public function hideGeneralForumTopic(HideGeneralForumTopic|array $dto): true;

    /**
     * Use this method to unhide the 'General' topic in a forum supergroup chat. The
     * bot must be an administrator in the chat for this to work and must have the
     * <em>can_manage_topics</em> administrator rights. Returns <em>True</em> on
     * success.
     *
     * @param UnhideGeneralForumTopic|array{
     *   chat_id: int|string
     * } $dto
     *
     * @return true
     */
    public function unhideGeneralForumTopic(UnhideGeneralForumTopic|array $dto): true;

    /**
     * Use this method to clear the list of pinned messages in a General forum topic.
     * The bot must be an administrator in the chat for this to work and must have the
     * <em>can_pin_messages</em> administrator right in the supergroup. Returns
     * <em>True</em> on success.
     *
     * @param UnpinAllGeneralForumTopicMessages|array{
     *   chat_id: int|string
     * } $dto
     *
     * @return true
     */
    public function unpinAllGeneralForumTopicMessages(UnpinAllGeneralForumTopicMessages|array $dto): true;

    /**
     * Use this method to send answers to callback queries sent from <a
     * href="https://core.telegram.org/bots/features#inline-keyboards">inline
     * keyboards</a>. The answer will be displayed to the user as a notification at the
     * top of the chat screen or as an alert. On success, <em>True</em> is returned.
     * Alternatively, the user can be redirected to the specified Game URL. For this
     * option to work, you must first create a game for your bot via <a
     * href="https://t.me/botfather">@BotFather</a> and accept the terms. Otherwise,
     * you may use links like t.me/your_bot?start=XXXX that open your bot with a
     * parameter.
     *
     * @param AnswerCallbackQuery|array{
     *   callback_query_id: string,
     *   text?: string,
     *   show_alert?: bool,
     *   url?: string,
     *   cache_time?: int
     * } $dto
     *
     * @return true
     */
    public function answerCallbackQuery(AnswerCallbackQuery|array $dto): true;

    /**
     * Use this method to get the list of boosts added to a chat by a user. Requires
     * administrator rights in the chat. Returns a <a
     * href="https://core.telegram.org/bots/api#userchatboosts">UserChatBoosts</a>
     * object.
     *
     * @param GetUserChatBoosts|array{
     *   chat_id: int|string,
     *   user_id: int
     * } $dto
     *
     * @return UserChatBoosts
     */
    public function getUserChatBoosts(GetUserChatBoosts|array $dto): UserChatBoosts;

    /**
     * Use this method to get information about the connection of the bot with a
     * business account. Returns a <a
     * href="https://core.telegram.org/bots/api#businessconnection">BusinessConnection</a>
     * object on success.
     *
     * @param GetBusinessConnection|array{
     *   business_connection_id: string
     * } $dto
     *
     * @return BusinessConnection
     */
    public function getBusinessConnection(GetBusinessConnection|array $dto): BusinessConnection;

    /**
     * Use this method to change the list of the bot's commands. See <a
     * href="https://core.telegram.org/bots/features#commands">this manual</a> for more
     * details about bot commands. Returns <em>True</em> on success.
     *
     * @param SetMyCommands|array{
     *   commands: BotCommand[],
     *   scope?: BotCommandScope,
     *   language_code?: string
     * } $dto
     *
     * @return true
     */
    public function setMyCommands(SetMyCommands|array $dto): true;

    /**
     * Use this method to delete the list of the bot's commands for the given scope and
     * user language. After deletion, <a
     * href="https://core.telegram.org/bots/api#determining-list-of-commands">higher
     * level commands</a> will be shown to affected users. Returns <em>True</em> on
     * success.
     *
     * @param DeleteMyCommands|array{
     *   scope?: BotCommandScope,
     *   language_code?: string
     * } $dto
     *
     * @return true
     */
    public function deleteMyCommands(DeleteMyCommands|array $dto): true;

    /**
     * Use this method to get the current list of the bot's commands for the given
     * scope and user language. Returns an Array of <a
     * href="https://core.telegram.org/bots/api#botcommand">BotCommand</a> objects. If
     * commands aren't set, an empty list is returned.
     *
     * @param GetMyCommands|array{
     *   scope?: BotCommandScope,
     *   language_code?: string
     * } $dto
     *
     * @return BotCommand[]
     */
    public function getMyCommands(GetMyCommands|array $dto): array;

    /**
     * Use this method to change the bot's name. Returns <em>True</em> on success.
     *
     * @param SetMyName|array{
     *   name?: string,
     *   language_code?: string
     * } $dto
     *
     * @return true
     */
    public function setMyName(SetMyName|array $dto): true;

    /**
     * Use this method to get the current bot name for the given user language. Returns
     * <a href="https://core.telegram.org/bots/api#botname">BotName</a> on success.
     *
     * @param GetMyName|array{
     *   language_code?: string
     * } $dto
     *
     * @return BotName
     */
    public function getMyName(GetMyName|array $dto): BotName;

    /**
     * Use this method to change the bot's description, which is shown in the chat with
     * the bot if the chat is empty. Returns <em>True</em> on success.
     *
     * @param SetMyDescription|array{
     *   description?: string,
     *   language_code?: string
     * } $dto
     *
     * @return true
     */
    public function setMyDescription(SetMyDescription|array $dto): true;

    /**
     * Use this method to get the current bot description for the given user language.
     * Returns <a
     * href="https://core.telegram.org/bots/api#botdescription">BotDescription</a> on
     * success.
     *
     * @param GetMyDescription|array{
     *   language_code?: string
     * } $dto
     *
     * @return BotDescription
     */
    public function getMyDescription(GetMyDescription|array $dto): BotDescription;

    /**
     * Use this method to change the bot's short description, which is shown on the
     * bot's profile page and is sent together with the link when users share the bot.
     * Returns <em>True</em> on success.
     *
     * @param SetMyShortDescription|array{
     *   short_description?: string,
     *   language_code?: string
     * } $dto
     *
     * @return true
     */
    public function setMyShortDescription(SetMyShortDescription|array $dto): true;

    /**
     * Use this method to get the current bot short description for the given user
     * language. Returns <a
     * href="https://core.telegram.org/bots/api#botshortdescription">BotShortDescription</a>
     * on success.
     *
     * @param GetMyShortDescription|array{
     *   language_code?: string
     * } $dto
     *
     * @return BotShortDescription
     */
    public function getMyShortDescription(GetMyShortDescription|array $dto): BotShortDescription;

    /**
     * Changes the profile photo of the bot. Returns <em>True</em> on success.
     *
     * @param SetMyProfilePhoto|array{
     *   photo: InputProfilePhoto
     * } $dto
     *
     * @return true
     */
    public function setMyProfilePhoto(SetMyProfilePhoto|array $dto): true;

    /**
     * Removes the profile photo of the bot. Requires no parameters. Returns
     * <em>True</em> on success.
     *
     * @return true
     */
    public function removeMyProfilePhoto(): true;

    /**
     * Use this method to change the bot's menu button in a private chat, or the
     * default menu button. Returns <em>True</em> on success.
     *
     * @param SetChatMenuButton|array{
     *   chat_id?: int,
     *   menu_button?: MenuButton
     * } $dto
     *
     * @return true
     */
    public function setChatMenuButton(SetChatMenuButton|array $dto): true;

    /**
     * Use this method to get the current value of the bot's menu button in a private
     * chat, or the default menu button. Returns <a
     * href="https://core.telegram.org/bots/api#menubutton">MenuButton</a> on success.
     *
     * @param GetChatMenuButton|array{
     *   chat_id?: int
     * } $dto
     *
     * @return MenuButton
     */
    public function getChatMenuButton(GetChatMenuButton|array $dto): MenuButton;

    /**
     * Use this method to change the default administrator rights requested by the bot
     * when it's added as an administrator to groups or channels. These rights will be
     * suggested to users, but they are free to modify the list before adding the bot.
     * Returns <em>True</em> on success.
     *
     * @param SetMyDefaultAdministratorRights|array{
     *   rights?: ChatAdministratorRights,
     *   for_channels?: bool
     * } $dto
     *
     * @return true
     */
    public function setMyDefaultAdministratorRights(SetMyDefaultAdministratorRights|array $dto): true;

    /**
     * Use this method to get the current default administrator rights of the bot.
     * Returns <a
     * href="https://core.telegram.org/bots/api#chatadministratorrights">ChatAdministratorRights</a>
     * on success.
     *
     * @param GetMyDefaultAdministratorRights|array{
     *   for_channels?: bool
     * } $dto
     *
     * @return ChatAdministratorRights
     */
    public function getMyDefaultAdministratorRights(
        GetMyDefaultAdministratorRights|array $dto,
    ): ChatAdministratorRights;

    /**
     * Returns the list of gifts that can be sent by the bot to users and channel
     * chats. Requires no parameters. Returns a <a
     * href="https://core.telegram.org/bots/api#gifts">Gifts</a> object.
     *
     * @return Gifts
     */
    public function getAvailableGifts(): Gifts;

    /**
     * Sends a gift to the given user or channel chat. The gift can't be converted to
     * Telegram Stars by the receiver. Returns <em>True</em> on success.
     *
     * @param SendGift|array{
     *   user_id?: int,
     *   chat_id?: int|string,
     *   gift_id: string,
     *   pay_for_upgrade?: bool,
     *   text?: string,
     *   text_parse_mode?: string,
     *   text_entities?: MessageEntity[]
     * } $dto
     *
     * @return true
     */
    public function sendGift(SendGift|array $dto): true;

    /**
     * Gifts a Telegram Premium subscription to the given user. Returns <em>True</em>
     * on success.
     *
     * @param GiftPremiumSubscription|array{
     *   user_id: int,
     *   month_count: int,
     *   star_count: int,
     *   text?: string,
     *   text_parse_mode?: string,
     *   text_entities?: MessageEntity[]
     * } $dto
     *
     * @return true
     */
    public function giftPremiumSubscription(GiftPremiumSubscription|array $dto): true;

    /**
     * Verifies a user <a
     * href="https://telegram.org/verify#third-party-verification">on behalf of the
     * organization</a> which is represented by the bot. Returns <em>True</em> on
     * success.
     *
     * @param VerifyUser|array{
     *   user_id: int,
     *   custom_description?: string
     * } $dto
     *
     * @return true
     */
    public function verifyUser(VerifyUser|array $dto): true;

    /**
     * Verifies a chat <a
     * href="https://telegram.org/verify#third-party-verification">on behalf of the
     * organization</a> which is represented by the bot. Returns <em>True</em> on
     * success.
     *
     * @param VerifyChat|array{
     *   chat_id: int|string,
     *   custom_description?: string
     * } $dto
     *
     * @return true
     */
    public function verifyChat(VerifyChat|array $dto): true;

    /**
     * Removes verification from a user who is currently verified <a
     * href="https://telegram.org/verify#third-party-verification">on behalf of the
     * organization</a> represented by the bot. Returns <em>True</em> on success.
     *
     * @param RemoveUserVerification|array{
     *   user_id: int
     * } $dto
     *
     * @return true
     */
    public function removeUserVerification(RemoveUserVerification|array $dto): true;

    /**
     * Removes verification from a chat that is currently verified <a
     * href="https://telegram.org/verify#third-party-verification">on behalf of the
     * organization</a> represented by the bot. Returns <em>True</em> on success.
     *
     * @param RemoveChatVerification|array{
     *   chat_id: int|string
     * } $dto
     *
     * @return true
     */
    public function removeChatVerification(RemoveChatVerification|array $dto): true;

    /**
     * Marks incoming message as read on behalf of a business account. Requires the
     * <em>can_read_messages</em> business bot right. Returns <em>True</em> on success.
     *
     * @param ReadBusinessMessage|array{
     *   business_connection_id: string,
     *   chat_id: int,
     *   message_id: int
     * } $dto
     *
     * @return true
     */
    public function readBusinessMessage(ReadBusinessMessage|array $dto): true;

    /**
     * Delete messages on behalf of a business account. Requires the
     * <em>can_delete_sent_messages</em> business bot right to delete messages sent by
     * the bot itself, or the <em>can_delete_all_messages</em> business bot right to
     * delete any message. Returns <em>True</em> on success.
     *
     * @param DeleteBusinessMessages|array{
     *   business_connection_id: string,
     *   message_ids: array
     * } $dto
     *
     * @return true
     */
    public function deleteBusinessMessages(DeleteBusinessMessages|array $dto): true;

    /**
     * Changes the first and last name of a managed business account. Requires the
     * <em>can_change_name</em> business bot right. Returns <em>True</em> on success.
     *
     * @param SetBusinessAccountName|array{
     *   business_connection_id: string,
     *   first_name: string,
     *   last_name?: string
     * } $dto
     *
     * @return true
     */
    public function setBusinessAccountName(SetBusinessAccountName|array $dto): true;

    /**
     * Changes the username of a managed business account. Requires the
     * <em>can_change_username</em> business bot right. Returns <em>True</em> on
     * success.
     *
     * @param SetBusinessAccountUsername|array{
     *   business_connection_id: string,
     *   username?: string
     * } $dto
     *
     * @return true
     */
    public function setBusinessAccountUsername(SetBusinessAccountUsername|array $dto): true;

    /**
     * Changes the bio of a managed business account. Requires the
     * <em>can_change_bio</em> business bot right. Returns <em>True</em> on success.
     *
     * @param SetBusinessAccountBio|array{
     *   business_connection_id: string,
     *   bio?: string
     * } $dto
     *
     * @return true
     */
    public function setBusinessAccountBio(SetBusinessAccountBio|array $dto): true;

    /**
     * Changes the profile photo of a managed business account. Requires the
     * <em>can_edit_profile_photo</em> business bot right. Returns <em>True</em> on
     * success.
     *
     * @param SetBusinessAccountProfilePhoto|array{
     *   business_connection_id: string,
     *   photo: InputProfilePhoto,
     *   is_public?: bool
     * } $dto
     *
     * @return true
     */
    public function setBusinessAccountProfilePhoto(SetBusinessAccountProfilePhoto|array $dto): true;

    /**
     * Removes the current profile photo of a managed business account. Requires the
     * <em>can_edit_profile_photo</em> business bot right. Returns <em>True</em> on
     * success.
     *
     * @param RemoveBusinessAccountProfilePhoto|array{
     *   business_connection_id: string,
     *   is_public?: bool
     * } $dto
     *
     * @return true
     */
    public function removeBusinessAccountProfilePhoto(RemoveBusinessAccountProfilePhoto|array $dto): true;

    /**
     * Changes the privacy settings pertaining to incoming gifts in a managed business
     * account. Requires the <em>can_change_gift_settings</em> business bot right.
     * Returns <em>True</em> on success.
     *
     * @param SetBusinessAccountGiftSettings|array{
     *   business_connection_id: string,
     *   show_gift_button: bool,
     *   accepted_gift_types: AcceptedGiftTypes
     * } $dto
     *
     * @return true
     */
    public function setBusinessAccountGiftSettings(SetBusinessAccountGiftSettings|array $dto): true;

    /**
     * Returns the amount of Telegram Stars owned by a managed business account.
     * Requires the <em>can_view_gifts_and_stars</em> business bot right. Returns <a
     * href="https://core.telegram.org/bots/api#staramount">StarAmount</a> on success.
     *
     * @param GetBusinessAccountStarBalance|array{
     *   business_connection_id: string
     * } $dto
     *
     * @return StarAmount
     */
    public function getBusinessAccountStarBalance(GetBusinessAccountStarBalance|array $dto): StarAmount;

    /**
     * Transfers Telegram Stars from the business account balance to the bot's balance.
     * Requires the <em>can_transfer_stars</em> business bot right. Returns
     * <em>True</em> on success.
     *
     * @param TransferBusinessAccountStars|array{
     *   business_connection_id: string,
     *   star_count: int
     * } $dto
     *
     * @return true
     */
    public function transferBusinessAccountStars(TransferBusinessAccountStars|array $dto): true;

    /**
     * Returns the gifts received and owned by a managed business account. Requires the
     * <em>can_view_gifts_and_stars</em> business bot right. Returns <a
     * href="https://core.telegram.org/bots/api#ownedgifts">OwnedGifts</a> on success.
     *
     * @param GetBusinessAccountGifts|array{
     *   business_connection_id: string,
     *   exclude_unsaved?: bool,
     *   exclude_saved?: bool,
     *   exclude_unlimited?: bool,
     *   exclude_limited_upgradable?: bool,
     *   exclude_limited_non_upgradable?: bool,
     *   exclude_unique?: bool,
     *   exclude_from_blockchain?: bool,
     *   sort_by_price?: bool,
     *   offset?: string,
     *   limit?: int
     * } $dto
     *
     * @return OwnedGifts
     */
    public function getBusinessAccountGifts(GetBusinessAccountGifts|array $dto): OwnedGifts;

    /**
     * Returns the gifts owned and hosted by a user. Returns <a
     * href="https://core.telegram.org/bots/api#ownedgifts">OwnedGifts</a> on success.
     *
     * @param GetUserGifts|array{
     *   user_id: int,
     *   exclude_unlimited?: bool,
     *   exclude_limited_upgradable?: bool,
     *   exclude_limited_non_upgradable?: bool,
     *   exclude_from_blockchain?: bool,
     *   exclude_unique?: bool,
     *   sort_by_price?: bool,
     *   offset?: string,
     *   limit?: int
     * } $dto
     *
     * @return OwnedGifts
     */
    public function getUserGifts(GetUserGifts|array $dto): OwnedGifts;

    /**
     * Returns the gifts owned by a chat. Returns <a
     * href="https://core.telegram.org/bots/api#ownedgifts">OwnedGifts</a> on success.
     *
     * @param GetChatGifts|array{
     *   chat_id: int|string,
     *   exclude_unsaved?: bool,
     *   exclude_saved?: bool,
     *   exclude_unlimited?: bool,
     *   exclude_limited_upgradable?: bool,
     *   exclude_limited_non_upgradable?: bool,
     *   exclude_from_blockchain?: bool,
     *   exclude_unique?: bool,
     *   sort_by_price?: bool,
     *   offset?: string,
     *   limit?: int
     * } $dto
     *
     * @return OwnedGifts
     */
    public function getChatGifts(GetChatGifts|array $dto): OwnedGifts;

    /**
     * Converts a given regular gift to Telegram Stars. Requires the
     * <em>can_convert_gifts_to_stars</em> business bot right. Returns <em>True</em> on
     * success.
     *
     * @param ConvertGiftToStars|array{
     *   business_connection_id: string,
     *   owned_gift_id: string
     * } $dto
     *
     * @return true
     */
    public function convertGiftToStars(ConvertGiftToStars|array $dto): true;

    /**
     * Upgrades a given regular gift to a unique gift. Requires the
     * <em>can_transfer_and_upgrade_gifts</em> business bot right. Additionally
     * requires the <em>can_transfer_stars</em> business bot right if the upgrade is
     * paid. Returns <em>True</em> on success.
     *
     * @param UpgradeGift|array{
     *   business_connection_id: string,
     *   owned_gift_id: string,
     *   keep_original_details?: bool,
     *   star_count?: int
     * } $dto
     *
     * @return true
     */
    public function upgradeGift(UpgradeGift|array $dto): true;

    /**
     * Transfers an owned unique gift to another user. Requires the
     * <em>can_transfer_and_upgrade_gifts</em> business bot right. Requires
     * <em>can_transfer_stars</em> business bot right if the transfer is paid. Returns
     * <em>True</em> on success.
     *
     * @param TransferGift|array{
     *   business_connection_id: string,
     *   owned_gift_id: string,
     *   new_owner_chat_id: int,
     *   star_count?: int
     * } $dto
     *
     * @return true
     */
    public function transferGift(TransferGift|array $dto): true;

    /**
     * Posts a story on behalf of a managed business account. Requires the
     * <em>can_manage_stories</em> business bot right. Returns <a
     * href="https://core.telegram.org/bots/api#story">Story</a> on success.
     *
     * @param PostStory|array{
     *   business_connection_id: string,
     *   content: InputStoryContent,
     *   active_period: int,
     *   caption?: string,
     *   parse_mode?: string,
     *   caption_entities?: MessageEntity[],
     *   areas?: StoryArea[],
     *   post_to_chat_page?: bool,
     *   protect_content?: bool
     * } $dto
     *
     * @return Story
     */
    public function postStory(PostStory|array $dto): Story;

    /**
     * Reposts a story on behalf of a business account from another business account.
     * Both business accounts must be managed by the same bot, and the story on the
     * source account must have been posted (or reposted) by the bot. Requires the
     * <em>can_manage_stories</em> business bot right for both business accounts.
     * Returns <a href="https://core.telegram.org/bots/api#story">Story</a> on success.
     *
     * @param RepostStory|array{
     *   business_connection_id: string,
     *   from_chat_id: int,
     *   from_story_id: int,
     *   active_period: int,
     *   post_to_chat_page?: bool,
     *   protect_content?: bool
     * } $dto
     *
     * @return Story
     */
    public function repostStory(RepostStory|array $dto): Story;

    /**
     * Edits a story previously posted by the bot on behalf of a managed business
     * account. Requires the <em>can_manage_stories</em> business bot right. Returns <a
     * href="https://core.telegram.org/bots/api#story">Story</a> on success.
     *
     * @param EditStory|array{
     *   business_connection_id: string,
     *   story_id: int,
     *   content: InputStoryContent,
     *   caption?: string,
     *   parse_mode?: string,
     *   caption_entities?: MessageEntity[],
     *   areas?: StoryArea[]
     * } $dto
     *
     * @return Story
     */
    public function editStory(EditStory|array $dto): Story;

    /**
     * Deletes a story previously posted by the bot on behalf of a managed business
     * account. Requires the <em>can_manage_stories</em> business bot right. Returns
     * <em>True</em> on success.
     *
     * @param DeleteStory|array{
     *   business_connection_id: string,
     *   story_id: int
     * } $dto
     *
     * @return true
     */
    public function deleteStory(DeleteStory|array $dto): true;

    /**
     * Use this method to edit text and <a
     * href="https://core.telegram.org/bots/api#games">game</a> messages. On success,
     * if the edited message is not an inline message, the edited <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned,
     * otherwise <em>True</em> is returned. Note that business messages that were not
     * sent by the bot and do not contain an inline keyboard can only be edited within
     * 48 hours from the time they were sent.
     *
     * @param EditMessageText|array{
     *   business_connection_id?: string,
     *   chat_id?: int|string,
     *   message_id?: int,
     *   inline_message_id?: string,
     *   text: string,
     *   parse_mode?: string,
     *   entities?: MessageEntity[],
     *   link_preview_options?: LinkPreviewOptions,
     *   reply_markup?: InlineKeyboardMarkup
     * } $dto
     *
     * @return true|Message
     */
    public function editMessageText(EditMessageText|array $dto): true|Message;

    /**
     * Use this method to edit captions of messages. On success, if the edited message
     * is not an inline message, the edited <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned,
     * otherwise <em>True</em> is returned. Note that business messages that were not
     * sent by the bot and do not contain an inline keyboard can only be edited within
     * 48 hours from the time they were sent.
     *
     * @param EditMessageCaption|array{
     *   business_connection_id?: string,
     *   chat_id?: int|string,
     *   message_id?: int,
     *   inline_message_id?: string,
     *   caption?: string,
     *   parse_mode?: string,
     *   caption_entities?: MessageEntity[],
     *   show_caption_above_media?: bool,
     *   reply_markup?: InlineKeyboardMarkup
     * } $dto
     *
     * @return true|Message
     */
    public function editMessageCaption(EditMessageCaption|array $dto): true|Message;

    /**
     * Use this method to edit animation, audio, document, photo, or video messages, or
     * to add media to text messages. If a message is part of a message album, then it
     * can be edited only to an audio for audio albums, only to a document for document
     * albums and to a photo or a video otherwise. When an inline message is edited, a
     * new file can't be uploaded; use a previously uploaded file via its file_id or
     * specify a URL. On success, if the edited message is not an inline message, the
     * edited <a href="https://core.telegram.org/bots/api#message">Message</a> is
     * returned, otherwise <em>True</em> is returned. Note that business messages that
     * were not sent by the bot and do not contain an inline keyboard can only be
     * edited within 48 hours from the time they were sent.
     *
     * @param EditMessageMedia|array{
     *   business_connection_id?: string,
     *   chat_id?: int|string,
     *   message_id?: int,
     *   inline_message_id?: string,
     *   media: InputMedia,
     *   reply_markup?: InlineKeyboardMarkup
     * } $dto
     *
     * @return true|Message
     */
    public function editMessageMedia(EditMessageMedia|array $dto): true|Message;

    /**
     * Use this method to edit live location messages. A location can be edited until
     * its <em>live_period</em> expires or editing is explicitly disabled by a call to
     * <a
     * href="https://core.telegram.org/bots/api#stopmessagelivelocation">stopMessageLiveLocation</a>.
     * On success, if the edited message is not an inline message, the edited <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned,
     * otherwise <em>True</em> is returned.
     *
     * @param EditMessageLiveLocation|array{
     *   business_connection_id?: string,
     *   chat_id?: int|string,
     *   message_id?: int,
     *   inline_message_id?: string,
     *   latitude: float,
     *   longitude: float,
     *   live_period?: int,
     *   horizontal_accuracy?: float,
     *   heading?: int,
     *   proximity_alert_radius?: int,
     *   reply_markup?: InlineKeyboardMarkup
     * } $dto
     *
     * @return true|Message
     */
    public function editMessageLiveLocation(EditMessageLiveLocation|array $dto): true|Message;

    /**
     * Use this method to stop updating a live location message before
     * <em>live_period</em> expires. On success, if the message is not an inline
     * message, the edited <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned,
     * otherwise <em>True</em> is returned.
     *
     * @param StopMessageLiveLocation|array{
     *   business_connection_id?: string,
     *   chat_id?: int|string,
     *   message_id?: int,
     *   inline_message_id?: string,
     *   reply_markup?: InlineKeyboardMarkup
     * } $dto
     *
     * @return true|Message
     */
    public function stopMessageLiveLocation(StopMessageLiveLocation|array $dto): true|Message;

    /**
     * Use this method to edit a checklist on behalf of a connected business account.
     * On success, the edited <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param EditMessageChecklist|array{
     *   business_connection_id: string,
     *   chat_id: int,
     *   message_id: int,
     *   checklist: InputChecklist,
     *   reply_markup?: InlineKeyboardMarkup
     * } $dto
     *
     * @return Message
     */
    public function editMessageChecklist(EditMessageChecklist|array $dto): Message;

    /**
     * Use this method to edit only the reply markup of messages. On success, if the
     * edited message is not an inline message, the edited <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned,
     * otherwise <em>True</em> is returned. Note that business messages that were not
     * sent by the bot and do not contain an inline keyboard can only be edited within
     * 48 hours from the time they were sent.
     *
     * @param EditMessageReplyMarkup|array{
     *   business_connection_id?: string,
     *   chat_id?: int|string,
     *   message_id?: int,
     *   inline_message_id?: string,
     *   reply_markup?: InlineKeyboardMarkup
     * } $dto
     *
     * @return true|Message
     */
    public function editMessageReplyMarkup(EditMessageReplyMarkup|array $dto): true|Message;

    /**
     * Use this method to stop a poll which was sent by the bot. On success, the
     * stopped <a href="https://core.telegram.org/bots/api#poll">Poll</a> is returned.
     *
     * @param StopPoll|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_id: int,
     *   reply_markup?: InlineKeyboardMarkup
     * } $dto
     *
     * @return Poll
     */
    public function stopPoll(StopPoll|array $dto): Poll;

    /**
     * Use this method to approve a suggested post in a direct messages chat. The bot
     * must have the 'can_post_messages' administrator right in the corresponding
     * channel chat. Returns <em>True</em> on success.
     *
     * @param ApproveSuggestedPost|array{
     *   chat_id: int,
     *   message_id: int,
     *   send_date?: int
     * } $dto
     *
     * @return true
     */
    public function approveSuggestedPost(ApproveSuggestedPost|array $dto): true;

    /**
     * Use this method to decline a suggested post in a direct messages chat. The bot
     * must have the 'can_manage_direct_messages' administrator right in the
     * corresponding channel chat. Returns <em>True</em> on success.
     *
     * @param DeclineSuggestedPost|array{
     *   chat_id: int,
     *   message_id: int,
     *   comment?: string
     * } $dto
     *
     * @return true
     */
    public function declineSuggestedPost(DeclineSuggestedPost|array $dto): true;

    /**
     * Use this method to delete a message, including service messages, with the
     * following limitations:- A message can only be deleted if it was sent less than
     * 48 hours ago.- Service messages about a supergroup, channel, or forum topic
     * creation can't be deleted.- A dice message in a private chat can only be deleted
     * if it was sent more than 24 hours ago.- Bots can delete outgoing messages in
     * private chats, groups, and supergroups.- Bots can delete incoming messages in
     * private chats.- Bots granted <em>can_post_messages</em> permissions can delete
     * outgoing messages in channels.- If the bot is an administrator of a group, it
     * can delete any message there.- If the bot has <em>can_delete_messages</em>
     * administrator right in a supergroup or a channel, it can delete any message
     * there.- If the bot has <em>can_manage_direct_messages</em> administrator right
     * in a channel, it can delete any message in the corresponding direct messages
     * chat.Returns <em>True</em> on success.
     *
     * @param DeleteMessage|array{
     *   chat_id: int|string,
     *   message_id: int
     * } $dto
     *
     * @return true
     */
    public function deleteMessage(DeleteMessage|array $dto): true;

    /**
     * Use this method to delete multiple messages simultaneously. If some of the
     * specified messages can't be found, they are skipped. Returns <em>True</em> on
     * success.
     *
     * @param DeleteMessages|array{
     *   chat_id: int|string,
     *   message_ids: array
     * } $dto
     *
     * @return true
     */
    public function deleteMessages(DeleteMessages|array $dto): true;

    /**
     * Use this method to send static .WEBP, <a
     * href="https://telegram.org/blog/animated-stickers">animated</a> .TGS, or <a
     * href="https://telegram.org/blog/video-stickers-better-reactions">video</a> .WEBM
     * stickers. On success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param SendSticker|array{
     *   business_connection_id?: string,
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   sticker: InputFile|array|string,
     *   emoji?: string,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: ReplyMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendSticker(SendSticker|array $dto): Message;

    /**
     * Use this method to get a sticker set. On success, a <a
     * href="https://core.telegram.org/bots/api#stickerset">StickerSet</a> object is
     * returned.
     *
     * @param GetStickerSet|array{
     *   name: string
     * } $dto
     *
     * @return StickerSet
     */
    public function getStickerSet(GetStickerSet|array $dto): StickerSet;

    /**
     * Use this method to get information about custom emoji stickers by their
     * identifiers. Returns an Array of <a
     * href="https://core.telegram.org/bots/api#sticker">Sticker</a> objects.
     *
     * @param GetCustomEmojiStickers|array{
     *   custom_emoji_ids: array
     * } $dto
     *
     * @return Sticker[]
     */
    public function getCustomEmojiStickers(GetCustomEmojiStickers|array $dto): array;

    /**
     * Use this method to upload a file with a sticker for later use in the <a
     * href="https://core.telegram.org/bots/api#createnewstickerset">createNewStickerSet</a>,
     * <a
     * href="https://core.telegram.org/bots/api#addstickertoset">addStickerToSet</a>,
     * or <a
     * href="https://core.telegram.org/bots/api#replacestickerinset">replaceStickerInSet</a>
     * methods (the file can be used multiple times). Returns the uploaded <a
     * href="https://core.telegram.org/bots/api#file">File</a> on success.
     *
     * @param UploadStickerFile|array{
     *   user_id: int,
     *   sticker: InputFile,
     *   sticker_format: string
     * } $dto
     *
     * @return File
     */
    public function uploadStickerFile(UploadStickerFile|array $dto): File;

    /**
     * Use this method to create a new sticker set owned by a user. The bot will be
     * able to edit the sticker set thus created. Returns <em>True</em> on success.
     *
     * @param CreateNewStickerSet|array{
     *   user_id: int,
     *   name: string,
     *   title: string,
     *   stickers: InputSticker[],
     *   sticker_type?: string,
     *   needs_repainting?: bool
     * } $dto
     *
     * @return true
     */
    public function createNewStickerSet(CreateNewStickerSet|array $dto): true;

    /**
     * Use this method to add a new sticker to a set created by the bot. Emoji sticker
     * sets can have up to 200 stickers. Other sticker sets can have up to 120
     * stickers. Returns <em>True</em> on success.
     *
     * @param AddStickerToSet|array{
     *   user_id: int,
     *   name: string,
     *   sticker: InputSticker
     * } $dto
     *
     * @return true
     */
    public function addStickerToSet(AddStickerToSet|array $dto): true;

    /**
     * Use this method to move a sticker in a set created by the bot to a specific
     * position. Returns <em>True</em> on success.
     *
     * @param SetStickerPositionInSet|array{
     *   sticker: string,
     *   position: int
     * } $dto
     *
     * @return true
     */
    public function setStickerPositionInSet(SetStickerPositionInSet|array $dto): true;

    /**
     * Use this method to delete a sticker from a set created by the bot. Returns
     * <em>True</em> on success.
     *
     * @param DeleteStickerFromSet|array{
     *   sticker: string
     * } $dto
     *
     * @return true
     */
    public function deleteStickerFromSet(DeleteStickerFromSet|array $dto): true;

    /**
     * Use this method to replace an existing sticker in a sticker set with a new one.
     * The method is equivalent to calling <a
     * href="https://core.telegram.org/bots/api#deletestickerfromset">deleteStickerFromSet</a>,
     * then <a
     * href="https://core.telegram.org/bots/api#addstickertoset">addStickerToSet</a>,
     * then <a
     * href="https://core.telegram.org/bots/api#setstickerpositioninset">setStickerPositionInSet</a>.
     * Returns <em>True</em> on success.
     *
     * @param ReplaceStickerInSet|array{
     *   user_id: int,
     *   name: string,
     *   old_sticker: string,
     *   sticker: InputSticker
     * } $dto
     *
     * @return true
     */
    public function replaceStickerInSet(ReplaceStickerInSet|array $dto): true;

    /**
     * Use this method to change the list of emoji assigned to a regular or custom
     * emoji sticker. The sticker must belong to a sticker set created by the bot.
     * Returns <em>True</em> on success.
     *
     * @param SetStickerEmojiList|array{
     *   sticker: string,
     *   emoji_list: array
     * } $dto
     *
     * @return true
     */
    public function setStickerEmojiList(SetStickerEmojiList|array $dto): true;

    /**
     * Use this method to change search keywords assigned to a regular or custom emoji
     * sticker. The sticker must belong to a sticker set created by the bot. Returns
     * <em>True</em> on success.
     *
     * @param SetStickerKeywords|array{
     *   sticker: string,
     *   keywords?: array
     * } $dto
     *
     * @return true
     */
    public function setStickerKeywords(SetStickerKeywords|array $dto): true;

    /**
     * Use this method to change the <a
     * href="https://core.telegram.org/bots/api#maskposition">mask position</a> of a
     * mask sticker. The sticker must belong to a sticker set that was created by the
     * bot. Returns <em>True</em> on success.
     *
     * @param SetStickerMaskPosition|array{
     *   sticker: string,
     *   mask_position?: MaskPosition
     * } $dto
     *
     * @return true
     */
    public function setStickerMaskPosition(SetStickerMaskPosition|array $dto): true;

    /**
     * Use this method to set the title of a created sticker set. Returns <em>True</em>
     * on success.
     *
     * @param SetStickerSetTitle|array{
     *   name: string,
     *   title: string
     * } $dto
     *
     * @return true
     */
    public function setStickerSetTitle(SetStickerSetTitle|array $dto): true;

    /**
     * Use this method to set the thumbnail of a regular or mask sticker set. The
     * format of the thumbnail file must match the format of the stickers in the set.
     * Returns <em>True</em> on success.
     *
     * @param SetStickerSetThumbnail|array{
     *   name: string,
     *   user_id: int,
     *   thumbnail?: InputFile|array|string,
     *   format: string
     * } $dto
     *
     * @return true
     */
    public function setStickerSetThumbnail(SetStickerSetThumbnail|array $dto): true;

    /**
     * Use this method to set the thumbnail of a custom emoji sticker set. Returns
     * <em>True</em> on success.
     *
     * @param SetCustomEmojiStickerSetThumbnail|array{
     *   name: string,
     *   custom_emoji_id?: string
     * } $dto
     *
     * @return true
     */
    public function setCustomEmojiStickerSetThumbnail(SetCustomEmojiStickerSetThumbnail|array $dto): true;

    /**
     * Use this method to delete a sticker set that was created by the bot. Returns
     * <em>True</em> on success.
     *
     * @param DeleteStickerSet|array{
     *   name: string
     * } $dto
     *
     * @return true
     */
    public function deleteStickerSet(DeleteStickerSet|array $dto): true;

    /**
     * Use this method to send answers to an inline query. On success, <em>True</em> is
     * returned.No more than 50 results per query are allowed.
     *
     * @param AnswerInlineQuery|array{
     *   inline_query_id: string,
     *   results: InlineQueryResult[],
     *   cache_time?: int,
     *   is_personal?: bool,
     *   next_offset?: string,
     *   button?: InlineQueryResultsButton
     * } $dto
     *
     * @return true
     */
    public function answerInlineQuery(AnswerInlineQuery|array $dto): true;

    /**
     * Use this method to set the result of an interaction with a <a
     * href="https://core.telegram.org/bots/webapps">Web App</a> and send a
     * corresponding message on behalf of the user to the chat from which the query
     * originated. On success, a <a
     * href="https://core.telegram.org/bots/api#sentwebappmessage">SentWebAppMessage</a>
     * object is returned.
     *
     * @param AnswerWebAppQuery|array{
     *   web_app_query_id: string,
     *   result: InlineQueryResult
     * } $dto
     *
     * @return SentWebAppMessage
     */
    public function answerWebAppQuery(AnswerWebAppQuery|array $dto): SentWebAppMessage;

    /**
     * Stores a message that can be sent by a user of a Mini App. Returns a <a
     * href="https://core.telegram.org/bots/api#preparedinlinemessage">PreparedInlineMessage</a>
     * object.
     *
     * @param SavePreparedInlineMessage|array{
     *   user_id: int,
     *   result: InlineQueryResult,
     *   allow_user_chats?: bool,
     *   allow_bot_chats?: bool,
     *   allow_group_chats?: bool,
     *   allow_channel_chats?: bool
     * } $dto
     *
     * @return PreparedInlineMessage
     */
    public function savePreparedInlineMessage(SavePreparedInlineMessage|array $dto): PreparedInlineMessage;

    /**
     * Use this method to send invoices. On success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param SendInvoice|array{
     *   chat_id: int|string,
     *   message_thread_id?: int,
     *   direct_messages_topic_id?: int,
     *   title: string,
     *   description: string,
     *   payload: string,
     *   provider_token?: string,
     *   currency: string,
     *   prices: LabeledPrice[],
     *   max_tip_amount?: int,
     *   suggested_tip_amounts?: array,
     *   start_parameter?: string,
     *   provider_data?: string,
     *   photo_url?: string,
     *   photo_size?: int,
     *   photo_width?: int,
     *   photo_height?: int,
     *   need_name?: bool,
     *   need_phone_number?: bool,
     *   need_email?: bool,
     *   need_shipping_address?: bool,
     *   send_phone_number_to_provider?: bool,
     *   send_email_to_provider?: bool,
     *   is_flexible?: bool,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   suggested_post_parameters?: SuggestedPostParameters,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: InlineKeyboardMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendInvoice(SendInvoice|array $dto): Message;

    /**
     * Use this method to create a link for an invoice. Returns the created invoice
     * link as <em>String</em> on success.
     *
     * @param CreateInvoiceLink|array{
     *   business_connection_id?: string,
     *   title: string,
     *   description: string,
     *   payload: string,
     *   provider_token?: string,
     *   currency: string,
     *   prices: LabeledPrice[],
     *   subscription_period?: int,
     *   max_tip_amount?: int,
     *   suggested_tip_amounts?: array,
     *   provider_data?: string,
     *   photo_url?: string,
     *   photo_size?: int,
     *   photo_width?: int,
     *   photo_height?: int,
     *   need_name?: bool,
     *   need_phone_number?: bool,
     *   need_email?: bool,
     *   need_shipping_address?: bool,
     *   send_phone_number_to_provider?: bool,
     *   send_email_to_provider?: bool,
     *   is_flexible?: bool
     * } $dto
     *
     * @return string
     */
    public function createInvoiceLink(CreateInvoiceLink|array $dto): string;

    /**
     * If you sent an invoice requesting a shipping address and the parameter
     * <em>is_flexible</em> was specified, the Bot API will send an <a
     * href="https://core.telegram.org/bots/api#update">Update</a> with a
     * <em>shipping_query</em> field to the bot. Use this method to reply to shipping
     * queries. On success, <em>True</em> is returned.
     *
     * @param AnswerShippingQuery|array{
     *   shipping_query_id: string,
     *   ok: bool,
     *   shipping_options?: ShippingOption[],
     *   error_message?: string
     * } $dto
     *
     * @return true
     */
    public function answerShippingQuery(AnswerShippingQuery|array $dto): true;

    /**
     * Once the user has confirmed their payment and shipping details, the Bot API
     * sends the final confirmation in the form of an <a
     * href="https://core.telegram.org/bots/api#update">Update</a> with the field
     * <em>pre_checkout_query</em>. Use this method to respond to such pre-checkout
     * queries. On success, <em>True</em> is returned. Note: The Bot API must receive
     * an answer within 10 seconds after the pre-checkout query was sent.
     *
     * @param AnswerPreCheckoutQuery|array{
     *   pre_checkout_query_id: string,
     *   ok: bool,
     *   error_message?: string
     * } $dto
     *
     * @return true
     */
    public function answerPreCheckoutQuery(AnswerPreCheckoutQuery|array $dto): true;

    /**
     * A method to get the current Telegram Stars balance of the bot. Requires no
     * parameters. On success, returns a <a
     * href="https://core.telegram.org/bots/api#staramount">StarAmount</a> object.
     *
     * @return StarAmount
     */
    public function getMyStarBalance(): StarAmount;

    /**
     * Returns the bot's Telegram Star transactions in chronological order. On success,
     * returns a <a
     * href="https://core.telegram.org/bots/api#startransactions">StarTransactions</a>
     * object.
     *
     * @param GetStarTransactions|array{
     *   offset?: int,
     *   limit?: int
     * } $dto
     *
     * @return StarTransactions
     */
    public function getStarTransactions(GetStarTransactions|array $dto): StarTransactions;

    /**
     * Refunds a successful payment in <a href="https://t.me/BotNews/90">Telegram
     * Stars</a>. Returns <em>True</em> on success.
     *
     * @param RefundStarPayment|array{
     *   user_id: int,
     *   telegram_payment_charge_id: string
     * } $dto
     *
     * @return true
     */
    public function refundStarPayment(RefundStarPayment|array $dto): true;

    /**
     * Allows the bot to cancel or re-enable extension of a subscription paid in
     * Telegram Stars. Returns <em>True</em> on success.
     *
     * @param EditUserStarSubscription|array{
     *   user_id: int,
     *   telegram_payment_charge_id: string,
     *   is_canceled: bool
     * } $dto
     *
     * @return true
     */
    public function editUserStarSubscription(EditUserStarSubscription|array $dto): true;

    /**
     * Informs a user that some of the Telegram Passport elements they provided
     * contains errors. The user will not be able to re-submit their Passport to you
     * until the errors are fixed (the contents of the field for which you returned the
     * error must change). Returns <em>True</em> on success.
     * Use this if the data submitted by the user doesn't satisfy the standards your
     * service requires for any reason. For example, if a birthday date seems invalid,
     * a submitted document is blurry, a scan shows evidence of tampering, etc. Supply
     * some details in the error message to make sure the user knows how to correct the
     * issues.
     *
     * @param SetPassportDataErrors|array{
     *   user_id: int,
     *   errors: PassportElementError[]
     * } $dto
     *
     * @return true
     */
    public function setPassportDataErrors(SetPassportDataErrors|array $dto): true;

    /**
     * Use this method to send a game. On success, the sent <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param SendGame|array{
     *   business_connection_id?: string,
     *   chat_id: int,
     *   message_thread_id?: int,
     *   game_short_name: string,
     *   disable_notification?: bool,
     *   protect_content?: bool,
     *   allow_paid_broadcast?: bool,
     *   message_effect_id?: string,
     *   reply_parameters?: ReplyParameters,
     *   reply_markup?: InlineKeyboardMarkup
     * } $dto
     *
     * @return Message
     */
    public function sendGame(SendGame|array $dto): Message;

    /**
     * Use this method to set the score of the specified user in a game message. On
     * success, if the message is not an inline message, the <a
     * href="https://core.telegram.org/bots/api#message">Message</a> is returned,
     * otherwise <em>True</em> is returned. Returns an error, if the new score is not
     * greater than the user's current score in the chat and <em>force</em> is
     * <em>False</em>.
     *
     * @param SetGameScore|array{
     *   user_id: int,
     *   score: int,
     *   force?: bool,
     *   disable_edit_message?: bool,
     *   chat_id?: int,
     *   message_id?: int,
     *   inline_message_id?: string
     * } $dto
     *
     * @return Message|bool
     */
    public function setGameScore(SetGameScore|array $dto): Message|bool;

    /**
     * Use this method to get data for high score tables. Will return the score of the
     * specified user and several of their neighbors in a game. Returns an Array of <a
     * href="https://core.telegram.org/bots/api#gamehighscore">GameHighScore</a>
     * objects.
     * This method will currently return scores for the target user, plus two of their
     * closest neighbors on each side. Will also return the top three users if the user
     * and their neighbors are not among them. Please note that this behavior is
     * subject to change.
     *
     * @param GetGameHighScores|array{
     *   user_id: int,
     *   chat_id?: int,
     *   message_id?: int,
     *   inline_message_id?: string
     * } $dto
     *
     * @return GameHighScore[]
     */
    public function getGameHighScores(GetGameHighScores|array $dto): array;
}
