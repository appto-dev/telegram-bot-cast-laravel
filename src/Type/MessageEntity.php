<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents one special entity in a text message. For example,
 * hashtags, usernames, URLs, etc.
 */
final class MessageEntity extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the entity. Currently, can be "mention" (@username), "hashtag" (#hashtag
         * or #hashtag@chatusername), "cashtag" ($USD or $USD@chatusername), "bot_command"
         * (/start@jobs_bot), "url" (https://telegram.org), "email"
         * (do-not-reply@telegram.org), "phone_number" (+1-212-555-0123), "bold" (bold
         * text), "italic" (italic text), "underline" (underlined text), "strikethrough"
         * (strikethrough text), "spoiler" (spoiler message), "blockquote" (block
         * quotation), "expandable_blockquote" (collapsed-by-default block quotation),
         * "code" (monowidth string), "pre" (monowidth block), "text_link" (for clickable
         * text URLs), "text_mention" (for users without usernames), "custom_emoji" (for
         * inline custom emoji stickers)
         * @var string
         */
        public string $type,
        /**
         * Offset in UTF-16 code units to the start of the entity
         * @var int
         */
        public int $offset,
        /**
         * Length of the entity in UTF-16 code units
         * @var int
         */
        public int $length,
        /**
         * For "text_link" only, URL that will be opened after user taps on the text
         * @var string
         */
        public ?string $url,
        /**
         * For "text_mention" only, the mentioned user
         * @var User
         */
        public ?User $user,
        /**
         * For "pre" only, the programming language of the entity text
         * @var string
         */
        public ?string $language,
        /**
         * For "custom_emoji" only, unique identifier of the custom emoji. Use
         * getCustomEmojiStickers to get full information about the sticker
         * @var string
         */
        public ?string $custom_emoji_id,
    ) {
    }
}
