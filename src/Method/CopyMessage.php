<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\ForceReply;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\MessageEntity;
use Appto\TelegramBot\Type\ReplyKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyKeyboardRemove;
use Appto\TelegramBot\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * Use this method to copy messages of any kind. Service messages, paid media
 * messages, giveaway messages, giveaway winners messages, and invoice messages
 * can't be copied. A quiz <a href="#poll">poll</a> can be copied only if the value
 * of the field <em>correct_option_id</em> is known to the bot. The method is
 * analogous to the method <a href="#forwardmessage">forwardMessage</a>, but the
 * copied message doesn't have a link to the original message. Returns the <a
 * href="#messageid">MessageId</a> of the sent message on success.
 *
 * @version Telegram Bot API 7.10
 */
final class CopyMessage extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum
         * supergroups only
         * @var int
         */
        public ?int $message_thread_id,
        /**
         * Unique identifier for the chat where the original message was sent (or channel
         * username in the format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $from_chat_id,
        /**
         * Message identifier in the chat specified in <em>from_chat_id</em>
         * @var int
         */
        public int $message_id,
        /**
         * New caption for media, 0-1024 characters after entities parsing. If not
         * specified, the original caption is kept
         * @var string
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the new caption. See <a
         * href="#formatting-options">formatting options</a> for more details.
         * @var string
         */
        public ?string $parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the new caption, which
         * can be specified instead of <em>parse_mode</em>
         * @var MessageEntity[]
         */
        public ?array $caption_entities,
        /**
         * Pass <em>True</em>, if the caption must be shown above the message media.
         * Ignored if a new caption isn't specified.
         * @var bool
         */
        public ?bool $show_caption_above_media,
        /**
         * Sends the message <a
         * href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>.
         * Users will receive a notification with no sound.
         * @var bool
         */
        public ?bool $disable_notification,
        /**
         * Protects the contents of the sent message from forwarding and saving
         * @var bool
         */
        public ?bool $protect_content,
        /**
         * Description of the message to reply to
         * @var ReplyParameters
         */
        public ?ReplyParameters $reply_parameters,
        /**
         * Additional interface options. A JSON-serialized object for an <a
         * href="/bots/features#inline-keyboards">inline keyboard</a>, <a
         * href="/bots/features#keyboards">custom reply keyboard</a>, instructions to
         * remove a reply keyboard or to force a reply from the user
         * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply
         */
        public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup,
    ) {
    }
}
