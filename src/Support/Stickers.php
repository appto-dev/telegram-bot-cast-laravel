<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Support;

use Appto\TelegramBot\Type\File;
use Appto\TelegramBot\Type\ForceReply;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputFile;
use Appto\TelegramBot\Type\InputSticker;
use Appto\TelegramBot\Type\MaskPosition;
use Appto\TelegramBot\Type\Message;
use Appto\TelegramBot\Type\ReplyKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyKeyboardRemove;
use Appto\TelegramBot\Type\ReplyParameters;
use Appto\TelegramBot\Type\Sticker;
use Appto\TelegramBot\Type\StickerSet;
use Appto\TelegramBot\Type\SuggestedPostParameters;

/**
 * The following methods and objects allow your bot to handle stickers and sticker sets.
 */
interface Stickers
{
    /**
     * Use this method to send static .WEBP,
     * <a href="https://telegram.org/blog/animated-stickers">animated</a> .TGS, or
     * <a href="https://telegram.org/blog/video-stickers-better-reactions">video</a> .WEBM stickers. On
     * success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  InputFile|string $sticker Sticker to send. Pass a file_id as String to send a file that
     * exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a
     * .WEBP sticker from the Internet, or upload a new .WEBP, .TGS, or .WEBM sticker using
     * multipart/form-data. <a href="#sending-files">More information on Sending Files </a>. Video and
     * animated stickers can't be sent via an HTTP URL.
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  int|null $receiver_user_id For outgoing ephemeral messages, unique identifier of the user
     * who will receive the message; for group and supergroup chats only. It is not guaranteed that the
     * user will receive the message, especially if they are offline. See
     * <a href="#ephemeral-messages-and-commands">ephemeral message sending</a> for more details.
     * @param  string|null $callback_query_id For outgoing ephemeral messages, identifier of the callback
     * query which triggered the message if any
     * @param  string|null $emoji Emoji associated with the sticker; only for just uploaded stickers
     * @param  bool|null $disable_notification Sends the message
     * <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a
     * notification with no sound.
     * @param  bool|null $protect_content Protects the contents of the sent message from forwarding and
     * saving
     * @param  bool|null $allow_paid_broadcast Pass <em>True</em> to allow up to 1000 messages per second,
     * ignoring
     * <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a>
     * for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's
     * balance.
     * @param  string|null $message_effect_id Unique identifier of the message effect to be added to the
     * message; for private chats only
     * @param  SuggestedPostParameters|null $suggested_post_parameters A JSON-serialized object containing
     * the parameters of the suggested post to send; for direct messages chats only. If the message is sent
     * as a reply to another suggested post, then that suggested post is automatically declined.
     * @param  ReplyParameters|null $reply_parameters Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     * Additional interface options. A JSON-serialized object for an
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>,
     * <a href="/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply
     * keyboard or to force a reply from the user.
     *
     * @return Message
     */
    public function sendSticker(
        int|string $chat_id,
        InputFile|string $sticker,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?int $receiver_user_id = null,
        ?string $callback_query_id = null,
        ?string $emoji = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to get a sticker set. On success, a
     * <a href="https://core.telegram.org/bots/api#stickerset">StickerSet</a> object is returned.
     *
     * @param  string $name Name of the sticker set
     *
     * @return StickerSet
     */
    public function getStickerSet(string $name): StickerSet;

    /**
     * Use this method to get information about custom emoji stickers by their identifiers. Returns an
     * Array of <a href="https://core.telegram.org/bots/api#sticker">Sticker</a> objects.
     *
     * @param  string[] $custom_emoji_ids A JSON-serialized list of custom emoji identifiers. At most 200
     * custom emoji identifiers can be specified.
     *
     * @return Sticker[]
     */
    public function getCustomEmojiStickers(array $custom_emoji_ids): array;

    /**
     * Use this method to upload a file with a sticker for later use in the
     * <a href="https://core.telegram.org/bots/api#createnewstickerset">createNewStickerSet</a>,
     * <a href="https://core.telegram.org/bots/api#addstickertoset">addStickerToSet</a>, or
     * <a href="https://core.telegram.org/bots/api#replacestickerinset">replaceStickerInSet</a> methods
     * (the file can be used multiple times). Returns the uploaded
     * <a href="https://core.telegram.org/bots/api#file">File</a> on success.
     *
     * @param  int $user_id User identifier of sticker file owner
     * @param  InputFile $sticker A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See
     * <a href="/stickers"></a><a href="https://core.telegram.org/stickers">https://core.telegram.org/stickers</a>
     * for technical requirements. <a href="#sending-files">More information on Sending Files </a>
     * @param  string $sticker_format Format of the sticker, must be one of "static", "animated", "video"
     *
     * @return File
     */
    public function uploadStickerFile(int $user_id, InputFile $sticker, string $sticker_format): File;

    /**
     * Use this method to create a new sticker set owned by a user. The bot will be able to edit the
     * sticker set thus created. Returns <em>True</em> on success.
     *
     * @param  int $user_id User identifier of created sticker set owner
     * @param  string $name Short name of sticker set, to be used in <code>t.me/addstickers/</code> URLs
     * (e.g., <em>animals</em>). Can contain only English letters, digits and underscores. Must begin with
     * a letter, can't contain consecutive underscores and must end in <code>"_by_<bot_username>"</code>.
     * <code><bot_username></code> is case insensitive. 1-64 characters.
     * @param  string $title Sticker set title, 1-64 characters
     * @param  InputSticker[] $stickers A JSON-serialized list of 1-50 initial stickers to be added to the
     * sticker set
     * @param  string|null $sticker_type Type of stickers in the set, pass "regular", "mask", or
     * "custom_emoji". By default, a regular sticker set is created.
     * @param  bool|null $needs_repainting Pass <em>True</em> if stickers in the sticker set must be
     * repainted to the color of text when used in messages, the accent color if used as emoji status,
     * white on chat photos, or another appropriate color based on context; for custom emoji sticker sets
     * only
     *
     * @return true
     */
    public function createNewStickerSet(
        int $user_id,
        string $name,
        string $title,
        array $stickers,
        ?string $sticker_type = null,
        ?bool $needs_repainting = null,
    ): true;

    /**
     * Use this method to add a new sticker to a set created by the bot. Emoji sticker sets can have up to
     * 200 stickers. Other sticker sets can have up to 120 stickers. Returns <em>True</em> on success.
     *
     * @param  int $user_id User identifier of sticker set owner
     * @param  string $name Sticker set name
     * @param  InputSticker $sticker A JSON-serialized object with information about the added sticker. If
     * exactly the same sticker had already been added to the set, then the set isn't changed.
     *
     * @return true
     */
    public function addStickerToSet(int $user_id, string $name, InputSticker $sticker): true;

    /**
     * Use this method to move a sticker in a set created by the bot to a specific position. Returns
     * <em>True</em> on success.
     *
     * @param  string $sticker File identifier of the sticker
     * @param  int $position New sticker position in the set, zero-based
     *
     * @return true
     */
    public function setStickerPositionInSet(string $sticker, int $position): true;

    /**
     * Use this method to delete a sticker from a set created by the bot. Returns <em>True</em> on success.
     *
     * @param  string $sticker File identifier of the sticker
     *
     * @return true
     */
    public function deleteStickerFromSet(string $sticker): true;

    /**
     * Use this method to replace an existing sticker in a sticker set with a new one. The method is
     * equivalent to calling
     * <a href="https://core.telegram.org/bots/api#deletestickerfromset">deleteStickerFromSet</a>, then
     * <a href="https://core.telegram.org/bots/api#addstickertoset">addStickerToSet</a>, then
     * <a href="https://core.telegram.org/bots/api#setstickerpositioninset">setStickerPositionInSet</a>.
     * Returns <em>True</em> on success.
     *
     * @param  int $user_id User identifier of the sticker set owner
     * @param  string $name Sticker set name
     * @param  string $old_sticker File identifier of the replaced sticker
     * @param  InputSticker $sticker A JSON-serialized object with information about the added sticker. If
     * exactly the same sticker had already been added to the set, then the set remains unchanged.
     *
     * @return true
     */
    public function replaceStickerInSet(
        int $user_id,
        string $name,
        string $old_sticker,
        InputSticker $sticker,
    ): true;

    /**
     * Use this method to change the list of emoji assigned to a regular or custom emoji sticker. The
     * sticker must belong to a sticker set created by the bot. Returns <em>True</em> on success.
     *
     * @param  string $sticker File identifier of the sticker
     * @param  string[] $emoji_list A JSON-serialized list of 1-20 emoji associated with the sticker
     *
     * @return true
     */
    public function setStickerEmojiList(string $sticker, array $emoji_list): true;

    /**
     * Use this method to change search keywords assigned to a regular or custom emoji sticker. The sticker
     * must belong to a sticker set created by the bot. Returns <em>True</em> on success.
     *
     * @param  string $sticker File identifier of the sticker
     * @param  string[]|null $keywords A JSON-serialized list of 0-20 search keywords for the sticker with
     * total length of up to 64 characters
     *
     * @return true
     */
    public function setStickerKeywords(string $sticker, ?array $keywords = null): true;

    /**
     * Use this method to change the
     * <a href="https://core.telegram.org/bots/api#maskposition">mask position</a> of a mask sticker. The
     * sticker must belong to a sticker set that was created by the bot. Returns <em>True</em> on success.
     *
     * @param  string $sticker File identifier of the sticker
     * @param  MaskPosition|null $mask_position A JSON-serialized object with the position where the mask
     * should be placed on faces. Omit the parameter to remove the mask position.
     *
     * @return true
     */
    public function setStickerMaskPosition(string $sticker, ?MaskPosition $mask_position = null): true;

    /**
     * Use this method to set the title of a created sticker set. Returns <em>True</em> on success.
     *
     * @param  string $name Sticker set name
     * @param  string $title Sticker set title, 1-64 characters
     *
     * @return true
     */
    public function setStickerSetTitle(string $name, string $title): true;

    /**
     * Use this method to set the thumbnail of a regular or mask sticker set. The format of the thumbnail
     * file must match the format of the stickers in the set. Returns <em>True</em> on success.
     *
     * @param  string $name Sticker set name
     * @param  int $user_id User identifier of the sticker set owner
     * @param  string $format Format of the thumbnail, must be one of "static" for a <strong>.WEBP</strong>
     * or <strong>.PNG</strong> image, "animated" for a <strong>.TGS</strong> animation, or "video" for a
     * <strong>.WEBM</strong> video
     * @param  InputFile|string|null $thumbnail A <strong>.WEBP</strong> or <strong>.PNG</strong> image
     * with the thumbnail, must be up to 128 kilobytes in size and have a width and height of exactly
     * 100px, or a <strong>.TGS</strong> animation with a thumbnail up to 32 kilobytes in size (see
     * <a href="/stickers#animation-requirements"></a><a href="https://core.telegram.org/stickers#animation-requirements">https://core.telegram.org/stickers#animation-requirements</a>
     * for animated sticker technical requirements), or a <strong>.WEBM</strong> video with the thumbnail
     * up to 32 kilobytes in size; see
     * <a href="/stickers#video-requirements"></a><a href="https://core.telegram.org/stickers#video-requirements">https://core.telegram.org/stickers#video-requirements</a>
     * for video sticker technical requirements. Pass a <em>file_id</em> as a String to send a file that
     * already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from
     * the Internet, or upload a new one using multipart/form-data.
     * <a href="#sending-files">More information on Sending Files </a>. Animated and video sticker set
     * thumbnails can't be uploaded via HTTP URL. If omitted, then the thumbnail is dropped and the first
     * sticker is used as the thumbnail.
     *
     * @return true
     */
    public function setStickerSetThumbnail(
        string $name,
        int $user_id,
        string $format,
        InputFile|string|null $thumbnail = null,
    ): true;

    /**
     * Use this method to set the thumbnail of a custom emoji sticker set. Returns <em>True</em> on
     * success.
     *
     * @param  string $name Sticker set name
     * @param  string|null $custom_emoji_id Custom emoji identifier of a sticker from the sticker set; pass
     * an empty string to drop the thumbnail and use the first sticker as the thumbnail
     *
     * @return true
     */
    public function setCustomEmojiStickerSetThumbnail(
        string $name,
        ?string $custom_emoji_id = null,
    ): true;

    /**
     * Use this method to delete a sticker set that was created by the bot. Returns <em>True</em> on
     * success.
     *
     * @param  string $name Sticker set name
     *
     * @return true
     */
    public function deleteStickerSet(string $name): true;
}
