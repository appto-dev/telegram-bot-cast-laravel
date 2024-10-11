<?php
namespace Appto\TelegramBot\Interface;

use Appto\TelegramBot\Method\AddStickerToSet;
use Appto\TelegramBot\Method\AnswerCallbackQuery;
use Appto\TelegramBot\Method\AnswerInlineQuery;
use Appto\TelegramBot\Method\AnswerPreCheckoutQuery;
use Appto\TelegramBot\Method\AnswerShippingQuery;
use Appto\TelegramBot\Method\AnswerWebAppQuery;
use Appto\TelegramBot\Method\ApproveChatJoinRequest;
use Appto\TelegramBot\Method\BanChatMember;
use Appto\TelegramBot\Method\BanChatSenderChat;
use Appto\TelegramBot\Method\ChatMemberBanned;
use Appto\TelegramBot\Method\Close;
use Appto\TelegramBot\Method\CloseForumTopic;
use Appto\TelegramBot\Method\CloseGeneralForumTopic;
use Appto\TelegramBot\Method\CopyMessage;
use Appto\TelegramBot\Method\CopyMessages;
use Appto\TelegramBot\Method\CreateChatInviteLink;
use Appto\TelegramBot\Method\CreateChatSubscriptionInviteLink;
use Appto\TelegramBot\Method\CreateForumTopic;
use Appto\TelegramBot\Method\CreateInvoiceLink;
use Appto\TelegramBot\Method\CreateNewStickerSet;
use Appto\TelegramBot\Method\DeclineChatJoinRequest;
use Appto\TelegramBot\Method\DeleteChatPhoto;
use Appto\TelegramBot\Method\DeleteChatStickerSet;
use Appto\TelegramBot\Method\DeleteForumTopic;
use Appto\TelegramBot\Method\DeleteMessage;
use Appto\TelegramBot\Method\DeleteMessages;
use Appto\TelegramBot\Method\DeleteMyCommands;
use Appto\TelegramBot\Method\DeleteStickerFromSet;
use Appto\TelegramBot\Method\DeleteStickerSet;
use Appto\TelegramBot\Method\DeleteWebhook;
use Appto\TelegramBot\Method\EditChatInviteLink;
use Appto\TelegramBot\Method\EditChatSubscriptionInviteLink;
use Appto\TelegramBot\Method\EditForumTopic;
use Appto\TelegramBot\Method\EditGeneralForumTopic;
use Appto\TelegramBot\Method\EditMessageCaption;
use Appto\TelegramBot\Method\EditMessageLiveLocation;
use Appto\TelegramBot\Method\EditMessageMedia;
use Appto\TelegramBot\Method\EditMessageReplyMarkup;
use Appto\TelegramBot\Method\EditMessageText;
use Appto\TelegramBot\Method\ExportChatInviteLink;
use Appto\TelegramBot\Method\ForwardMessage;
use Appto\TelegramBot\Method\ForwardMessages;
use Appto\TelegramBot\Method\GetBusinessConnection;
use Appto\TelegramBot\Method\GetChat;
use Appto\TelegramBot\Method\GetChatAdministrators;
use Appto\TelegramBot\Method\GetChatMember;
use Appto\TelegramBot\Method\GetChatMemberCount;
use Appto\TelegramBot\Method\GetChatMenuButton;
use Appto\TelegramBot\Method\GetCustomEmojiStickers;
use Appto\TelegramBot\Method\GetFile;
use Appto\TelegramBot\Method\GetForumTopicIconStickers;
use Appto\TelegramBot\Method\GetGameHighScores;
use Appto\TelegramBot\Method\GetMe;
use Appto\TelegramBot\Method\GetMyCommands;
use Appto\TelegramBot\Method\GetMyDefaultAdministratorRights;
use Appto\TelegramBot\Method\GetMyDescription;
use Appto\TelegramBot\Method\GetMyName;
use Appto\TelegramBot\Method\GetMyShortDescription;
use Appto\TelegramBot\Method\GetStarTransactions;
use Appto\TelegramBot\Method\GetStickerSet;
use Appto\TelegramBot\Method\GetUpdates;
use Appto\TelegramBot\Method\GetUserChatBoosts;
use Appto\TelegramBot\Method\GetUserProfilePhotos;
use Appto\TelegramBot\Method\GetWebhookInfo;
use Appto\TelegramBot\Method\HideGeneralForumTopic;
use Appto\TelegramBot\Method\LeaveChat;
use Appto\TelegramBot\Method\LogOut;
use Appto\TelegramBot\Method\PinChatMessage;
use Appto\TelegramBot\Method\PromoteChatMember;
use Appto\TelegramBot\Method\RefundStarPayment;
use Appto\TelegramBot\Method\ReopenForumTopic;
use Appto\TelegramBot\Method\ReopenGeneralForumTopic;
use Appto\TelegramBot\Method\ReplaceStickerInSet;
use Appto\TelegramBot\Method\RestrictChatMember;
use Appto\TelegramBot\Method\RevokeChatInviteLink;
use Appto\TelegramBot\Method\SendAnimation;
use Appto\TelegramBot\Method\SendAudio;
use Appto\TelegramBot\Method\SendChatAction;
use Appto\TelegramBot\Method\SendContact;
use Appto\TelegramBot\Method\SendDice;
use Appto\TelegramBot\Method\SendDocument;
use Appto\TelegramBot\Method\SendGame;
use Appto\TelegramBot\Method\SendInvoice;
use Appto\TelegramBot\Method\SendLocation;
use Appto\TelegramBot\Method\SendMediaGroup;
use Appto\TelegramBot\Method\SendMessage;
use Appto\TelegramBot\Method\SendPaidMedia;
use Appto\TelegramBot\Method\SendPhoto;
use Appto\TelegramBot\Method\SendPoll;
use Appto\TelegramBot\Method\SendSticker;
use Appto\TelegramBot\Method\SendVenue;
use Appto\TelegramBot\Method\SendVideo;
use Appto\TelegramBot\Method\SendVideoNote;
use Appto\TelegramBot\Method\SendVoice;
use Appto\TelegramBot\Method\SetChatAdministratorCustomTitle;
use Appto\TelegramBot\Method\SetChatDescription;
use Appto\TelegramBot\Method\SetChatMenuButton;
use Appto\TelegramBot\Method\SetChatPermissions;
use Appto\TelegramBot\Method\SetChatPhoto;
use Appto\TelegramBot\Method\SetChatStickerSet;
use Appto\TelegramBot\Method\SetChatTitle;
use Appto\TelegramBot\Method\SetCustomEmojiStickerSetThumbnail;
use Appto\TelegramBot\Method\SetGameScore;
use Appto\TelegramBot\Method\SetMessageReaction;
use Appto\TelegramBot\Method\SetMyCommands;
use Appto\TelegramBot\Method\SetMyDefaultAdministratorRights;
use Appto\TelegramBot\Method\SetMyDescription;
use Appto\TelegramBot\Method\SetMyName;
use Appto\TelegramBot\Method\SetMyShortDescription;
use Appto\TelegramBot\Method\SetPassportDataErrors;
use Appto\TelegramBot\Method\SetStickerEmojiList;
use Appto\TelegramBot\Method\SetStickerKeywords;
use Appto\TelegramBot\Method\SetStickerMaskPosition;
use Appto\TelegramBot\Method\SetStickerPositionInSet;
use Appto\TelegramBot\Method\SetStickerSetThumbnail;
use Appto\TelegramBot\Method\SetStickerSetTitle;
use Appto\TelegramBot\Method\SetWebhook;
use Appto\TelegramBot\Method\StopMessageLiveLocation;
use Appto\TelegramBot\Method\StopPoll;
use Appto\TelegramBot\Method\UnbanChatMember;
use Appto\TelegramBot\Method\UnbanChatSenderChat;
use Appto\TelegramBot\Method\UnhideGeneralForumTopic;
use Appto\TelegramBot\Method\UnpinAllChatMessages;
use Appto\TelegramBot\Method\UnpinAllForumTopicMessages;
use Appto\TelegramBot\Method\UnpinAllGeneralForumTopicMessages;
use Appto\TelegramBot\Method\UnpinChatMessage;
use Appto\TelegramBot\Method\UploadStickerFile;
use Appto\TelegramBot\Type\BotCommand;
use Appto\TelegramBot\Type\BotDescription;
use Appto\TelegramBot\Type\BotName;
use Appto\TelegramBot\Type\BotShortDescription;
use Appto\TelegramBot\Type\BusinessConnection;
use Appto\TelegramBot\Type\ChatAdministratorRights;
use Appto\TelegramBot\Type\ChatFullInfo;
use Appto\TelegramBot\Type\ChatInviteLink;
use Appto\TelegramBot\Type\ChatMember;
use Appto\TelegramBot\Type\File;
use Appto\TelegramBot\Type\ForumTopic;
use Appto\TelegramBot\Type\GameHighScore;
use Appto\TelegramBot\Type\MenuButton;
use Appto\TelegramBot\Type\Message;
use Appto\TelegramBot\Type\MessageId;
use Appto\TelegramBot\Type\Poll;
use Appto\TelegramBot\Type\SentWebAppMessage;
use Appto\TelegramBot\Type\StarTransactions;
use Appto\TelegramBot\Type\Sticker;
use Appto\TelegramBot\Type\StickerSet;
use Appto\TelegramBot\Type\Update;
use Appto\TelegramBot\Type\User;
use Appto\TelegramBot\Type\UserChatBoosts;
use Appto\TelegramBot\Type\UserProfilePhotos;
use Appto\TelegramBot\Type\WebhookInfo;

interface TelegramBotInterface
{
    /**
     * Use this method to receive incoming updates using long polling (<a href="https://en.wikipedia.org/wiki/Push_technology#Long_polling">wiki</a>). Returns an Array of <a href="#update">Update</a> objects.
     * @param GetUpdates $method
     * @return Update[]
     */
    function getUpdates(GetUpdates $method): array;


    /**
     * Use this method to specify a URL and receive incoming updates via an outgoing webhook. Whenever there is an update for the bot, we will send an HTTPS POST request to the specified URL, containing a JSON-serialized <a href="#update">Update</a>. In case of an unsuccessful request, we will give up after a reasonable amount of attempts. Returns <em>True</em> on success.
     * If you'd like to make sure that the webhook was set by you, you can specify secret data in the parameter <em>secret_token</em>. If specified, the request will contain a header "X-Telegram-Bot-Api-Secret-Token" with the secret token as content.
     * @param SetWebhook $method
     * @return true
     */
    function setWebhook(SetWebhook $method): true;


    /**
     * Use this method to remove webhook integration if you decide to switch back to <a href="#getupdates">getUpdates</a>. Returns <em>True</em> on success.
     * @param DeleteWebhook $method
     * @return true
     */
    function deleteWebhook(DeleteWebhook $method): true;


    /**
     * Use this method to get current webhook status. Requires no parameters. On success, returns a <a href="#webhookinfo">WebhookInfo</a> object. If the bot is using <a href="#getupdates">getUpdates</a>, will return an object with the <em>url</em> field empty.
     * @param GetWebhookInfo $method
     * @return WebhookInfo
     */
    function getWebhookInfo(GetWebhookInfo $method): WebhookInfo;


    /**
     * Represents a <a href="#chatmember">chat member</a> that was banned in the chat and can't return to the chat or view chat messages.
     * @param ChatMemberBanned $method
     * @return ChatMember
     */
    function ChatMemberBanned(ChatMemberBanned $method): ChatMember;


    /**
     * A simple method for testing your bot's authentication token. Requires no parameters. Returns basic information about the bot in form of a <a href="#user">User</a> object.
     * @param GetMe $method
     * @return User
     */
    function getMe(GetMe $method): User;


    /**
     * Use this method to log out from the cloud Bot API server before launching the bot locally. You must log out the bot before running it locally, otherwise there is no guarantee that the bot will receive updates. After a successful call, you can immediately log in on a local server, but will not be able to log in back to the cloud Bot API server for 10 minutes. Returns <em>True</em> on success. Requires no parameters.
     * @param LogOut $method
     * @return true
     */
    function logOut(LogOut $method): true;


    /**
     * Use this method to close the bot instance before moving it from one local server to another. You need to delete the webhook before calling this method to ensure that the bot isn't launched again after server restart. The method will return error 429 in the first 10 minutes after the bot is launched. Returns <em>True</em> on success. Requires no parameters.
     * @param Close $method
     * @return true
     */
    function close(Close $method): true;


    /**
     * Use this method to send text messages. On success, the sent <a href="#message">Message</a> is returned.
     * @param SendMessage $method
     * @return Message
     */
    function sendMessage(SendMessage $method): Message;


    /**
     * Use this method to forward messages of any kind. Service messages and messages with protected content can't be forwarded. On success, the sent <a href="#message">Message</a> is returned.
     * @param ForwardMessage $method
     * @return Message
     */
    function forwardMessage(ForwardMessage $method): Message;


    /**
     * Use this method to forward multiple messages of any kind. If some of the specified messages can't be found or forwarded, they are skipped. Service messages and messages with protected content can't be forwarded. Album grouping is kept for forwarded messages. On success, an array of <a href="#messageid">MessageId</a> of the sent messages is returned.
     * @param ForwardMessages $method
     * @return MessageId[]
     */
    function forwardMessages(ForwardMessages $method): array;


    /**
     * Use this method to copy messages of any kind. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz <a href="#poll">poll</a> can be copied only if the value of the field <em>correct_option_id</em> is known to the bot. The method is analogous to the method <a href="#forwardmessage">forwardMessage</a>, but the copied message doesn't have a link to the original message. Returns the <a href="#messageid">MessageId</a> of the sent message on success.
     * @param CopyMessage $method
     * @return MessageId
     */
    function copyMessage(CopyMessage $method): MessageId;


    /**
     * Use this method to copy messages of any kind. If some of the specified messages can't be found or copied, they are skipped. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz <a href="#poll">poll</a> can be copied only if the value of the field <em>correct_option_id</em> is known to the bot. The method is analogous to the method <a href="#forwardmessages">forwardMessages</a>, but the copied messages don't have a link to the original message. Album grouping is kept for copied messages. On success, an array of <a href="#messageid">MessageId</a> of the sent messages is returned.
     * @param CopyMessages $method
     * @return MessageId[]
     */
    function copyMessages(CopyMessages $method): array;


    /**
     * Use this method to send photos. On success, the sent <a href="#message">Message</a> is returned.
     * @param SendPhoto $method
     * @return Message
     */
    function sendPhoto(SendPhoto $method): Message;


    /**
     * Use this method to send audio files, if you want Telegram clients to display them in the music player. Your audio must be in the .MP3 or .M4A format. On success, the sent <a href="#message">Message</a> is returned. Bots can currently send audio files of up to 50 MB in size, this limit may be changed in the future.
     * For sending voice messages, use the <a href="#sendvoice">sendVoice</a> method instead.
     * @param SendAudio $method
     * @return Message
     */
    function sendAudio(SendAudio $method): Message;


    /**
     * Use this method to send general files. On success, the sent <a href="#message">Message</a> is returned. Bots can currently send files of any type of up to 50 MB in size, this limit may be changed in the future.
     * @param SendDocument $method
     * @return Message
     */
    function sendDocument(SendDocument $method): Message;


    /**
     * Use this method to send video files, Telegram clients support MPEG4 videos (other formats may be sent as <a href="#document">Document</a>). On success, the sent <a href="#message">Message</a> is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future.
     * @param SendVideo $method
     * @return Message
     */
    function sendVideo(SendVideo $method): Message;


    /**
     * Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On success, the sent <a href="#message">Message</a> is returned. Bots can currently send animation files of up to 50 MB in size, this limit may be changed in the future.
     * @param SendAnimation $method
     * @return Message
     */
    function sendAnimation(SendAnimation $method): Message;


    /**
     * Use this method to send audio files, if you want Telegram clients to display the file as a playable voice message. For this to work, your audio must be in an .OGG file encoded with OPUS, or in .MP3 format, or in .M4A format (other formats may be sent as <a href="#audio">Audio</a> or <a href="#document">Document</a>). On success, the sent <a href="#message">Message</a> is returned. Bots can currently send voice messages of up to 50 MB in size, this limit may be changed in the future.
     * @param SendVoice $method
     * @return Message
     */
    function sendVoice(SendVoice $method): Message;


    /**
     * As of <a href="https://telegram.org/blog/video-messages-and-telescope">v.4.0</a>, Telegram clients support rounded square MPEG4 videos of up to 1 minute long. Use this method to send video messages. On success, the sent <a href="#message">Message</a> is returned.
     * @param SendVideoNote $method
     * @return Message
     */
    function sendVideoNote(SendVideoNote $method): Message;


    /**
     * Use this method to send paid media. On success, the sent <a href="#message">Message</a> is returned.
     * @param SendPaidMedia $method
     * @return Message
     */
    function sendPaidMedia(SendPaidMedia $method): Message;


    /**
     * Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an array of <a href="#message">Messages</a> that were sent is returned.
     * @param SendMediaGroup $method
     * @return Message[]
     */
    function sendMediaGroup(SendMediaGroup $method): array;


    /**
     * Use this method to send point on the map. On success, the sent <a href="#message">Message</a> is returned.
     * @param SendLocation $method
     * @return Message
     */
    function sendLocation(SendLocation $method): Message;


    /**
     * Use this method to send information about a venue. On success, the sent <a href="#message">Message</a> is returned.
     * @param SendVenue $method
     * @return Message
     */
    function sendVenue(SendVenue $method): Message;


    /**
     * Use this method to send phone contacts. On success, the sent <a href="#message">Message</a> is returned.
     * @param SendContact $method
     * @return Message
     */
    function sendContact(SendContact $method): Message;


    /**
     * Use this method to send a native poll. On success, the sent <a href="#message">Message</a> is returned.
     * @param SendPoll $method
     * @return Message
     */
    function sendPoll(SendPoll $method): Message;


    /**
     * Use this method to send an animated emoji that will display a random value. On success, the sent <a href="#message">Message</a> is returned.
     * @param SendDice $method
     * @return Message
     */
    function sendDice(SendDice $method): Message;


    /**
     * Use this method when you need to tell the user that something is happening on the bot's side. The status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear its typing status). Returns <em>True</em> on success.
     * Example: The <a href="https://t.me/imagebot">ImageBot</a> needs some time to process a request and upload the image. Instead of sending a text message along the lines of "Retrieving image, please wait…", the bot may use <a href="#sendchataction">sendChatAction</a> with <em>action</em> = <em>upload_photo</em>. The user will see a "sending photo" status for the bot.
     * We only recommend using this method when a response from the bot will take a noticeable amount of time to arrive.
     * @param SendChatAction $method
     * @return true
     */
    function sendChatAction(SendChatAction $method): true;


    /**
     * Use this method to change the chosen reactions on a message. Service messages can't be reacted to. Automatically forwarded messages from a channel to its discussion group have the same available reactions as messages in the channel. Bots can't use paid reactions. Returns <em>True</em> on success.
     * @param SetMessageReaction $method
     * @return true
     */
    function setMessageReaction(SetMessageReaction $method): true;


    /**
     * Use this method to get a list of profile pictures for a user. Returns a <a href="#userprofilephotos">UserProfilePhotos</a> object.
     * @param GetUserProfilePhotos $method
     * @return UserProfilePhotos
     */
    function getUserProfilePhotos(GetUserProfilePhotos $method): UserProfilePhotos;


    /**
     * Use this method to get basic information about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a <a href="#file">File</a> object is returned. The file can then be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling <a href="#getfile">getFile</a> again.
     * @param GetFile $method
     * @return File
     */
    function getFile(GetFile $method): File;


    /**
     * Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the chat on their own using invite links, etc., unless <a href="#unbanchatmember">unbanned</a> first. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns <em>True</em> on success.
     * @param BanChatMember $method
     * @return true
     */
    function banChatMember(BanChatMember $method): true;


    /**
     * Use this method to unban a previously banned user in a supergroup or channel. The user will not return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be removed from the chat. If you don't want this, use the parameter <em>only_if_banned</em>. Returns <em>True</em> on success.
     * @param UnbanChatMember $method
     * @return true
     */
    function unbanChatMember(UnbanChatMember $method): true;


    /**
     * Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights. Pass <em>True</em> for all permissions to lift restrictions from a user. Returns <em>True</em> on success.
     * @param RestrictChatMember $method
     * @return true
     */
    function restrictChatMember(RestrictChatMember $method): true;


    /**
     * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass <em>False</em> for all boolean parameters to demote a user. Returns <em>True</em> on success.
     * @param PromoteChatMember $method
     * @return true
     */
    function promoteChatMember(PromoteChatMember $method): true;


    /**
     * Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns <em>True</em> on success.
     * @param SetChatAdministratorCustomTitle $method
     * @return true
     */
    function setChatAdministratorCustomTitle(SetChatAdministratorCustomTitle $method): true;


    /**
     * Use this method to ban a channel chat in a supergroup or a channel. Until the chat is <a href="#unbanchatsenderchat">unbanned</a>, the owner of the banned chat won't be able to send messages on behalf of any of their channels. The bot must be an administrator in the supergroup or channel for this to work and must have the appropriate administrator rights. Returns <em>True</em> on success.
     * @param BanChatSenderChat $method
     * @return true
     */
    function banChatSenderChat(BanChatSenderChat $method): true;


    /**
     * Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns <em>True</em> on success.
     * @param UnbanChatSenderChat $method
     * @return true
     */
    function unbanChatSenderChat(UnbanChatSenderChat $method): true;


    /**
     * Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the <em>can_restrict_members</em> administrator rights. Returns <em>True</em> on success.
     * @param SetChatPermissions $method
     * @return true
     */
    function setChatPermissions(SetChatPermissions $method): true;


    /**
     * Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the new invite link as <em>String</em> on success.
     * @param ExportChatInviteLink $method
     * @return string
     */
    function exportChatInviteLink(ExportChatInviteLink $method): string;


    /**
     * Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. The link can be revoked using the method <a href="#revokechatinvitelink">revokeChatInviteLink</a>. Returns the new invite link as <a href="#chatinvitelink">ChatInviteLink</a> object.
     * @param CreateChatInviteLink $method
     * @return ChatInviteLink
     */
    function createChatInviteLink(CreateChatInviteLink $method): ChatInviteLink;


    /**
     * Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the edited invite link as a <a href="#chatinvitelink">ChatInviteLink</a> object.
     * @param EditChatInviteLink $method
     * @return ChatInviteLink
     */
    function editChatInviteLink(EditChatInviteLink $method): ChatInviteLink;


    /**
     * Use this method to create a <a href="https://telegram.org/blog/superchannels-star-reactions-subscriptions#star-subscriptions">subscription invite link</a> for a channel chat. The bot must have the <em>can_invite_users</em> administrator rights. The link can be edited using the method <a href="#editchatsubscriptioninvitelink">editChatSubscriptionInviteLink</a> or revoked using the method <a href="#revokechatinvitelink">revokeChatInviteLink</a>. Returns the new invite link as a <a href="#chatinvitelink">ChatInviteLink</a> object.
     * @param CreateChatSubscriptionInviteLink $method
     * @return ChatInviteLink
     */
    function createChatSubscriptionInviteLink(CreateChatSubscriptionInviteLink $method): ChatInviteLink;


    /**
     * Use this method to edit a subscription invite link created by the bot. The bot must have the <em>can_invite_users</em> administrator rights. Returns the edited invite link as a <a href="#chatinvitelink">ChatInviteLink</a> object.
     * @param EditChatSubscriptionInviteLink $method
     * @return ChatInviteLink
     */
    function editChatSubscriptionInviteLink(EditChatSubscriptionInviteLink $method): ChatInviteLink;


    /**
     * Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as <a href="#chatinvitelink">ChatInviteLink</a> object.
     * @param RevokeChatInviteLink $method
     * @return ChatInviteLink
     */
    function revokeChatInviteLink(RevokeChatInviteLink $method): ChatInviteLink;


    /**
     * Use this method to approve a chat join request. The bot must be an administrator in the chat for this to work and must have the <em>can_invite_users</em> administrator right. Returns <em>True</em> on success.
     * @param ApproveChatJoinRequest $method
     * @return true
     */
    function approveChatJoinRequest(ApproveChatJoinRequest $method): true;


    /**
     * Use this method to decline a chat join request. The bot must be an administrator in the chat for this to work and must have the <em>can_invite_users</em> administrator right. Returns <em>True</em> on success.
     * @param DeclineChatJoinRequest $method
     * @return true
     */
    function declineChatJoinRequest(DeclineChatJoinRequest $method): true;


    /**
     * Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns <em>True</em> on success.
     * @param SetChatPhoto $method
     * @return true
     */
    function setChatPhoto(SetChatPhoto $method): true;


    /**
     * Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns <em>True</em> on success.
     * @param DeleteChatPhoto $method
     * @return true
     */
    function deleteChatPhoto(DeleteChatPhoto $method): true;


    /**
     * Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns <em>True</em> on success.
     * @param SetChatTitle $method
     * @return true
     */
    function setChatTitle(SetChatTitle $method): true;


    /**
     * Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns <em>True</em> on success.
     * @param SetChatDescription $method
     * @return true
     */
    function setChatDescription(SetChatDescription $method): true;


    /**
     * Use this method to add a message to the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns <em>True</em> on success.
     * @param PinChatMessage $method
     * @return true
     */
    function pinChatMessage(PinChatMessage $method): true;


    /**
     * Use this method to remove a message from the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns <em>True</em> on success.
     * @param UnpinChatMessage $method
     * @return true
     */
    function unpinChatMessage(UnpinChatMessage $method): true;


    /**
     * Use this method to clear the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns <em>True</em> on success.
     * @param UnpinAllChatMessages $method
     * @return true
     */
    function unpinAllChatMessages(UnpinAllChatMessages $method): true;


    /**
     * Use this method for your bot to leave a group, supergroup or channel. Returns <em>True</em> on success.
     * @param LeaveChat $method
     * @return true
     */
    function leaveChat(LeaveChat $method): true;


    /**
     * Use this method to get up-to-date information about the chat. Returns a <a href="#chatfullinfo">ChatFullInfo</a> object on success.
     * @param GetChat $method
     * @return ChatFullInfo
     */
    function getChat(GetChat $method): ChatFullInfo;


    /**
     * Use this method to get a list of administrators in a chat, which aren't bots. Returns an Array of <a href="#chatmember">ChatMember</a> objects.
     * @param GetChatAdministrators $method
     * @return ChatMember[]
     */
    function getChatAdministrators(GetChatAdministrators $method): array;


    /**
     * Use this method to get the number of members in a chat. Returns <em>Int</em> on success.
     * @param GetChatMemberCount $method
     * @return int
     */
    function getChatMemberCount(GetChatMemberCount $method): int;


    /**
     * Use this method to get information about a member of a chat. The method is only guaranteed to work for other users if the bot is an administrator in the chat. Returns a <a href="#chatmember">ChatMember</a> object on success.
     * @param GetChatMember $method
     * @return ChatMember
     */
    function getChatMember(GetChatMember $method): ChatMember;


    /**
     * Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field <em>can_set_sticker_set</em> optionally returned in <a href="#getchat">getChat</a> requests to check if the bot can use this method. Returns <em>True</em> on success.
     * @param SetChatStickerSet $method
     * @return true
     */
    function setChatStickerSet(SetChatStickerSet $method): true;


    /**
     * Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field <em>can_set_sticker_set</em> optionally returned in <a href="#getchat">getChat</a> requests to check if the bot can use this method. Returns <em>True</em> on success.
     * @param DeleteChatStickerSet $method
     * @return true
     */
    function deleteChatStickerSet(DeleteChatStickerSet $method): true;


    /**
     * Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user. Requires no parameters. Returns an Array of <a href="#sticker">Sticker</a> objects.
     * @param GetForumTopicIconStickers $method
     * @return Sticker[]
     */
    function getForumTopicIconStickers(GetForumTopicIconStickers $method): array;


    /**
     * Use this method to create a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights. Returns information about the created topic as a <a href="#forumtopic">ForumTopic</a> object.
     * @param CreateForumTopic $method
     * @return ForumTopic
     */
    function createForumTopic(CreateForumTopic $method): ForumTopic;


    /**
     * Use this method to edit name and icon of a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights, unless it is the creator of the topic. Returns <em>True</em> on success.
     * @param EditForumTopic $method
     * @return true
     */
    function editForumTopic(EditForumTopic $method): true;


    /**
     * Use this method to close an open topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights, unless it is the creator of the topic. Returns <em>True</em> on success.
     * @param CloseForumTopic $method
     * @return true
     */
    function closeForumTopic(CloseForumTopic $method): true;


    /**
     * Use this method to reopen a closed topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights, unless it is the creator of the topic. Returns <em>True</em> on success.
     * @param ReopenForumTopic $method
     * @return true
     */
    function reopenForumTopic(ReopenForumTopic $method): true;


    /**
     * Use this method to delete a forum topic along with all its messages in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_delete_messages</em> administrator rights. Returns <em>True</em> on success.
     * @param DeleteForumTopic $method
     * @return true
     */
    function deleteForumTopic(DeleteForumTopic $method): true;


    /**
     * Use this method to clear the list of pinned messages in a forum topic. The bot must be an administrator in the chat for this to work and must have the <em>can_pin_messages</em> administrator right in the supergroup. Returns <em>True</em> on success.
     * @param UnpinAllForumTopicMessages $method
     * @return true
     */
    function unpinAllForumTopicMessages(UnpinAllForumTopicMessages $method): true;


    /**
     * Use this method to edit the name of the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights. Returns <em>True</em> on success.
     * @param EditGeneralForumTopic $method
     * @return true
     */
    function editGeneralForumTopic(EditGeneralForumTopic $method): true;


    /**
     * Use this method to close an open 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights. Returns <em>True</em> on success.
     * @param CloseGeneralForumTopic $method
     * @return true
     */
    function closeGeneralForumTopic(CloseGeneralForumTopic $method): true;


    /**
     * Use this method to reopen a closed 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights. The topic will be automatically unhidden if it was hidden. Returns <em>True</em> on success.
     * @param ReopenGeneralForumTopic $method
     * @return true
     */
    function reopenGeneralForumTopic(ReopenGeneralForumTopic $method): true;


    /**
     * Use this method to hide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights. The topic will be automatically closed if it was open. Returns <em>True</em> on success.
     * @param HideGeneralForumTopic $method
     * @return true
     */
    function hideGeneralForumTopic(HideGeneralForumTopic $method): true;


    /**
     * Use this method to unhide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights. Returns <em>True</em> on success.
     * @param UnhideGeneralForumTopic $method
     * @return true
     */
    function unhideGeneralForumTopic(UnhideGeneralForumTopic $method): true;


    /**
     * Use this method to clear the list of pinned messages in a General forum topic. The bot must be an administrator in the chat for this to work and must have the <em>can_pin_messages</em> administrator right in the supergroup. Returns <em>True</em> on success.
     * @param UnpinAllGeneralForumTopicMessages $method
     * @return true
     */
    function unpinAllGeneralForumTopicMessages(UnpinAllGeneralForumTopicMessages $method): true;


    /**
     * Use this method to send answers to callback queries sent from <a href="/bots/features#inline-keyboards">inline keyboards</a>. The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, <em>True</em> is returned.
     * Alternatively, the user can be redirected to the specified Game URL. For this option to work, you must first create a game for your bot via <a href="https://t.me/botfather">@BotFather</a> and accept the terms. Otherwise, you may use links like t.me/your_bot?start=XXXX that open your bot with a parameter.
     * @param AnswerCallbackQuery $method
     * @return true
     */
    function answerCallbackQuery(AnswerCallbackQuery $method): true;


    /**
     * Use this method to get the list of boosts added to a chat by a user. Requires administrator rights in the chat. Returns a <a href="#userchatboosts">UserChatBoosts</a> object.
     * @param GetUserChatBoosts $method
     * @return UserChatBoosts
     */
    function getUserChatBoosts(GetUserChatBoosts $method): UserChatBoosts;


    /**
     * Use this method to get information about the connection of the bot with a business account. Returns a <a href="#businessconnection">BusinessConnection</a> object on success.
     * @param GetBusinessConnection $method
     * @return BusinessConnection
     */
    function getBusinessConnection(GetBusinessConnection $method): BusinessConnection;


    /**
     * Use this method to change the list of the bot's commands. See <a href="/bots/features#commands">this manual</a> for more details about bot commands. Returns <em>True</em> on success.
     * @param SetMyCommands $method
     * @return true
     */
    function setMyCommands(SetMyCommands $method): true;


    /**
     * Use this method to delete the list of the bot's commands for the given scope and user language. After deletion, <a href="#determining-list-of-commands">higher level commands</a> will be shown to affected users. Returns <em>True</em> on success.
     * @param DeleteMyCommands $method
     * @return true
     */
    function deleteMyCommands(DeleteMyCommands $method): true;


    /**
     * Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of <a href="#botcommand">BotCommand</a> objects. If commands aren't set, an empty list is returned.
     * @param GetMyCommands $method
     * @return BotCommand[]
     */
    function getMyCommands(GetMyCommands $method): array;


    /**
     * Use this method to change the bot's name. Returns <em>True</em> on success.
     * @param SetMyName $method
     * @return true
     */
    function setMyName(SetMyName $method): true;


    /**
     * Use this method to get the current bot name for the given user language. Returns <a href="#botname">BotName</a> on success.
     * @param GetMyName $method
     * @return BotName
     */
    function getMyName(GetMyName $method): BotName;


    /**
     * Use this method to change the bot's description, which is shown in the chat with the bot if the chat is empty. Returns <em>True</em> on success.
     * @param SetMyDescription $method
     * @return true
     */
    function setMyDescription(SetMyDescription $method): true;


    /**
     * Use this method to get the current bot description for the given user language. Returns <a href="#botdescription">BotDescription</a> on success.
     * @param GetMyDescription $method
     * @return BotDescription
     */
    function getMyDescription(GetMyDescription $method): BotDescription;


    /**
     * Use this method to change the bot's short description, which is shown on the bot's profile page and is sent together with the link when users share the bot. Returns <em>True</em> on success.
     * @param SetMyShortDescription $method
     * @return true
     */
    function setMyShortDescription(SetMyShortDescription $method): true;


    /**
     * Use this method to get the current bot short description for the given user language. Returns <a href="#botshortdescription">BotShortDescription</a> on success.
     * @param GetMyShortDescription $method
     * @return BotShortDescription
     */
    function getMyShortDescription(GetMyShortDescription $method): BotShortDescription;


    /**
     * Use this method to change the bot's menu button in a private chat, or the default menu button. Returns <em>True</em> on success.
     * @param SetChatMenuButton $method
     * @return true
     */
    function setChatMenuButton(SetChatMenuButton $method): true;


    /**
     * Use this method to get the current value of the bot's menu button in a private chat, or the default menu button. Returns <a href="#menubutton">MenuButton</a> on success.
     * @param GetChatMenuButton $method
     * @return MenuButton
     */
    function getChatMenuButton(GetChatMenuButton $method): MenuButton;


    /**
     * Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels. These rights will be suggested to users, but they are free to modify the list before adding the bot. Returns <em>True</em> on success.
     * @param SetMyDefaultAdministratorRights $method
     * @return true
     */
    function setMyDefaultAdministratorRights(SetMyDefaultAdministratorRights $method): true;


    /**
     * Use this method to get the current default administrator rights of the bot. Returns <a href="#chatadministratorrights">ChatAdministratorRights</a> on success.
     * @param GetMyDefaultAdministratorRights $method
     * @return ChatAdministratorRights
     */
    function getMyDefaultAdministratorRights(GetMyDefaultAdministratorRights $method): ChatAdministratorRights;


    /**
     * Use this method to edit text and <a href="#games">game</a> messages. On success, if the edited message is not an inline message, the edited <a href="#message">Message</a> is returned, otherwise <em>True</em> is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
     * @param EditMessageText $method
     * @return true|Message
     */
    function editMessageText(EditMessageText $method): true|Message;


    /**
     * Use this method to edit captions of messages. On success, if the edited message is not an inline message, the edited <a href="#message">Message</a> is returned, otherwise <em>True</em> is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
     * @param EditMessageCaption $method
     * @return true|Message
     */
    function editMessageCaption(EditMessageCaption $method): true|Message;


    /**
     * Use this method to edit animation, audio, document, photo, or video messages. If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for document albums and to a photo or a video otherwise. When an inline message is edited, a new file can't be uploaded; use a previously uploaded file via its file_id or specify a URL. On success, if the edited message is not an inline message, the edited <a href="#message">Message</a> is returned, otherwise <em>True</em> is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
     * @param EditMessageMedia $method
     * @return true|Message
     */
    function editMessageMedia(EditMessageMedia $method): true|Message;


    /**
     * Use this method to edit live location messages. A location can be edited until its <em>live_period</em> expires or editing is explicitly disabled by a call to <a href="#stopmessagelivelocation">stopMessageLiveLocation</a>. On success, if the edited message is not an inline message, the edited <a href="#message">Message</a> is returned, otherwise <em>True</em> is returned.
     * @param EditMessageLiveLocation $method
     * @return true|Message
     */
    function editMessageLiveLocation(EditMessageLiveLocation $method): true|Message;


    /**
     * Use this method to stop updating a live location message before <em>live_period</em> expires. On success, if the message is not an inline message, the edited <a href="#message">Message</a> is returned, otherwise <em>True</em> is returned.
     * @param StopMessageLiveLocation $method
     * @return true|Message
     */
    function stopMessageLiveLocation(StopMessageLiveLocation $method): true|Message;


    /**
     * Use this method to edit only the reply markup of messages. On success, if the edited message is not an inline message, the edited <a href="#message">Message</a> is returned, otherwise <em>True</em> is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
     * @param EditMessageReplyMarkup $method
     * @return true|Message
     */
    function editMessageReplyMarkup(EditMessageReplyMarkup $method): true|Message;


    /**
     * Use this method to stop a poll which was sent by the bot. On success, the stopped <a href="#poll">Poll</a> is returned.
     * @param StopPoll $method
     * @return Poll
     */
    function stopPoll(StopPoll $method): Poll;


    /**
     * Use this method to delete a message, including service messages, with the following limitations:- A message can only be deleted if it was sent less than 48 hours ago.- Service messages about a supergroup, channel, or forum topic creation can't be deleted.- A dice message in a private chat can only be deleted if it was sent more than 24 hours ago.- Bots can delete outgoing messages in private chats, groups, and supergroups.- Bots can delete incoming messages in private chats.- Bots granted <em>can_post_messages</em> permissions can delete outgoing messages in channels.- If the bot is an administrator of a group, it can delete any message there.- If the bot has <em>can_delete_messages</em> permission in a supergroup or a channel, it can delete any message there.Returns <em>True</em> on success.
     * @param DeleteMessage $method
     * @return true
     */
    function deleteMessage(DeleteMessage $method): true;


    /**
     * Use this method to delete multiple messages simultaneously. If some of the specified messages can't be found, they are skipped. Returns <em>True</em> on success.
     * @param DeleteMessages $method
     * @return true
     */
    function deleteMessages(DeleteMessages $method): true;


    /**
     * Use this method to send static .WEBP, <a href="https://telegram.org/blog/animated-stickers">animated</a> .TGS, or <a href="https://telegram.org/blog/video-stickers-better-reactions">video</a> .WEBM stickers. On success, the sent <a href="#message">Message</a> is returned.
     * @param SendSticker $method
     * @return Message
     */
    function sendSticker(SendSticker $method): Message;


    /**
     * Use this method to get a sticker set. On success, a <a href="#stickerset">StickerSet</a> object is returned.
     * @param GetStickerSet $method
     * @return StickerSet
     */
    function getStickerSet(GetStickerSet $method): StickerSet;


    /**
     * Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of <a href="#sticker">Sticker</a> objects.
     * @param GetCustomEmojiStickers $method
     * @return Sticker[]
     */
    function getCustomEmojiStickers(GetCustomEmojiStickers $method): array;


    /**
     * Use this method to upload a file with a sticker for later use in the <a href="#createnewstickerset">createNewStickerSet</a>, <a href="#addstickertoset">addStickerToSet</a>, or <a href="#replacestickerinset">replaceStickerInSet</a> methods (the file can be used multiple times). Returns the uploaded <a href="#file">File</a> on success.
     * @param UploadStickerFile $method
     * @return File
     */
    function uploadStickerFile(UploadStickerFile $method): File;


    /**
     * Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created. Returns <em>True</em> on success.
     * @param CreateNewStickerSet $method
     * @return true
     */
    function createNewStickerSet(CreateNewStickerSet $method): true;


    /**
     * Use this method to add a new sticker to a set created by the bot. Emoji sticker sets can have up to 200 stickers. Other sticker sets can have up to 120 stickers. Returns <em>True</em> on success.
     * @param AddStickerToSet $method
     * @return true
     */
    function addStickerToSet(AddStickerToSet $method): true;


    /**
     * Use this method to move a sticker in a set created by the bot to a specific position. Returns <em>True</em> on success.
     * @param SetStickerPositionInSet $method
     * @return true
     */
    function setStickerPositionInSet(SetStickerPositionInSet $method): true;


    /**
     * Use this method to delete a sticker from a set created by the bot. Returns <em>True</em> on success.
     * @param DeleteStickerFromSet $method
     * @return true
     */
    function deleteStickerFromSet(DeleteStickerFromSet $method): true;


    /**
     * Use this method to replace an existing sticker in a sticker set with a new one. The method is equivalent to calling <a href="#deletestickerfromset">deleteStickerFromSet</a>, then <a href="#addstickertoset">addStickerToSet</a>, then <a href="#setstickerpositioninset">setStickerPositionInSet</a>. Returns <em>True</em> on success.
     * @param ReplaceStickerInSet $method
     * @return true
     */
    function replaceStickerInSet(ReplaceStickerInSet $method): true;


    /**
     * Use this method to change the list of emoji assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns <em>True</em> on success.
     * @param SetStickerEmojiList $method
     * @return true
     */
    function setStickerEmojiList(SetStickerEmojiList $method): true;


    /**
     * Use this method to change search keywords assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns <em>True</em> on success.
     * @param SetStickerKeywords $method
     * @return true
     */
    function setStickerKeywords(SetStickerKeywords $method): true;


    /**
     * Use this method to change the <a href="#maskposition">mask position</a> of a mask sticker. The sticker must belong to a sticker set that was created by the bot. Returns <em>True</em> on success.
     * @param SetStickerMaskPosition $method
     * @return true
     */
    function setStickerMaskPosition(SetStickerMaskPosition $method): true;


    /**
     * Use this method to set the title of a created sticker set. Returns <em>True</em> on success.
     * @param SetStickerSetTitle $method
     * @return true
     */
    function setStickerSetTitle(SetStickerSetTitle $method): true;


    /**
     * Use this method to set the thumbnail of a regular or mask sticker set. The format of the thumbnail file must match the format of the stickers in the set. Returns <em>True</em> on success.
     * @param SetStickerSetThumbnail $method
     * @return true
     */
    function setStickerSetThumbnail(SetStickerSetThumbnail $method): true;


    /**
     * Use this method to set the thumbnail of a custom emoji sticker set. Returns <em>True</em> on success.
     * @param SetCustomEmojiStickerSetThumbnail $method
     * @return true
     */
    function setCustomEmojiStickerSetThumbnail(SetCustomEmojiStickerSetThumbnail $method): true;


    /**
     * Use this method to delete a sticker set that was created by the bot. Returns <em>True</em> on success.
     * @param DeleteStickerSet $method
     * @return true
     */
    function deleteStickerSet(DeleteStickerSet $method): true;


    /**
     * Use this method to send answers to an inline query. On success, <em>True</em> is returned.No more than 50 results per query are allowed.
     * @param AnswerInlineQuery $method
     * @return true
     */
    function answerInlineQuery(AnswerInlineQuery $method): true;


    /**
     * Use this method to set the result of an interaction with a <a href="/bots/webapps">Web App</a> and send a corresponding message on behalf of the user to the chat from which the query originated. On success, a <a href="#sentwebappmessage">SentWebAppMessage</a> object is returned.
     * @param AnswerWebAppQuery $method
     * @return SentWebAppMessage
     */
    function answerWebAppQuery(AnswerWebAppQuery $method): SentWebAppMessage;


    /**
     * Use this method to send invoices. On success, the sent <a href="#message">Message</a> is returned.
     * @param SendInvoice $method
     * @return Message
     */
    function sendInvoice(SendInvoice $method): Message;


    /**
     * Use this method to create a link for an invoice. Returns the created invoice link as <em>String</em> on success.
     * @param CreateInvoiceLink $method
     * @return string
     */
    function createInvoiceLink(CreateInvoiceLink $method): string;


    /**
     * If you sent an invoice requesting a shipping address and the parameter <em>is_flexible</em> was specified, the Bot API will send an <a href="#update">Update</a> with a <em>shipping_query</em> field to the bot. Use this method to reply to shipping queries. On success, <em>True</em> is returned.
     * @param AnswerShippingQuery $method
     * @return true
     */
    function answerShippingQuery(AnswerShippingQuery $method): true;


    /**
     * Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form of an <a href="#update">Update</a> with the field <em>pre_checkout_query</em>. Use this method to respond to such pre-checkout queries. On success, <em>True</em> is returned. Note: The Bot API must receive an answer within 10 seconds after the pre-checkout query was sent.
     * @param AnswerPreCheckoutQuery $method
     * @return true
     */
    function answerPreCheckoutQuery(AnswerPreCheckoutQuery $method): true;


    /**
     * Returns the bot's Telegram Star transactions in chronological order. On success, returns a <a href="#startransactions">StarTransactions</a> object.
     * @param GetStarTransactions $method
     * @return StarTransactions
     */
    function getStarTransactions(GetStarTransactions $method): StarTransactions;


    /**
     * Refunds a successful payment in <a href="https://t.me/BotNews/90">Telegram Stars</a>. Returns <em>True</em> on success.
     * @param RefundStarPayment $method
     * @return true
     */
    function refundStarPayment(RefundStarPayment $method): true;


    /**
     * Informs a user that some of the Telegram Passport elements they provided contains errors. The user will not be able to re-submit their Passport to you until the errors are fixed (the contents of the field for which you returned the error must change). Returns <em>True</em> on success.
     * Use this if the data submitted by the user doesn't satisfy the standards your service requires for any reason. For example, if a birthday date seems invalid, a submitted document is blurry, a scan shows evidence of tampering, etc. Supply some details in the error message to make sure the user knows how to correct the issues.
     * @param SetPassportDataErrors $method
     * @return true
     */
    function setPassportDataErrors(SetPassportDataErrors $method): true;


    /**
     * Use this method to send a game. On success, the sent <a href="#message">Message</a> is returned.
     * @param SendGame $method
     * @return Message
     */
    function sendGame(SendGame $method): Message;


    /**
     * Use this method to set the score of the specified user in a game message. On success, if the message is not an inline message, the <a href="#message">Message</a> is returned, otherwise <em>True</em> is returned. Returns an error, if the new score is not greater than the user's current score in the chat and <em>force</em> is <em>False</em>.
     * @param SetGameScore $method
     * @return Message|bool
     */
    function setGameScore(SetGameScore $method): Message|bool;


    /**
     * Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. Returns an Array of <a href="#gamehighscore">GameHighScore</a> objects.
     * This method will currently return scores for the target user, plus two of their closest neighbors on each side. Will also return the top three users if the user and their neighbors are not among them. Please note that this behavior is subject to change.
     * @param GetGameHighScores $method
     * @return GameHighScore[]
     */
    function getGameHighScores(GetGameHighScores $method): array;
}
