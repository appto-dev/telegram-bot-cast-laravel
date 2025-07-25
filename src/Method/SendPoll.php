<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\ForceReply;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputPollOption;
use Appto\TelegramBot\Type\MessageEntity;
use Appto\TelegramBot\Type\ReplyKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyKeyboardRemove;
use Appto\TelegramBot\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * Use this method to send a native poll. On success, the sent <a
 * href="#message">Message</a> is returned.
 */
final class SendPoll extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be sent
         * @var string
         */
        public ?string $business_connection_id,
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
         * Poll question, 1-300 characters
         * @var string
         */
        public string $question,
        /**
         * Mode for parsing entities in the question. See <a
         * href="#formatting-options">formatting options</a> for more details. Currently,
         * only custom emoji entities are allowed
         * @var string
         */
        public ?string $question_parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the poll question. It
         * can be specified instead of <em>question_parse_mode</em>
         * @var MessageEntity[]
         */
        public ?array $question_entities,
        /**
         * A JSON-serialized list of 2-12 answer options
         * @var InputPollOption[]
         */
        public array $options,
        /**
         * <em>True</em>, if the poll needs to be anonymous, defaults to <em>True</em>
         * @var bool
         */
        public ?bool $is_anonymous,
        /**
         * Poll type, "quiz" or "regular", defaults to "regular"
         * @var string
         */
        public ?string $type,
        /**
         * <em>True</em>, if the poll allows multiple answers, ignored for polls in quiz
         * mode, defaults to <em>False</em>
         * @var bool
         */
        public ?bool $allows_multiple_answers,
        /**
         * 0-based identifier of the correct answer option, required for polls in quiz mode
         * @var int
         */
        public ?int $correct_option_id,
        /**
         * Text that is shown when a user chooses an incorrect answer or taps on the lamp
         * icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after
         * entities parsing
         * @var string
         */
        public ?string $explanation,
        /**
         * Mode for parsing entities in the explanation. See <a
         * href="#formatting-options">formatting options</a> for more details.
         * @var string
         */
        public ?string $explanation_parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the poll explanation.
         * It can be specified instead of <em>explanation_parse_mode</em>
         * @var MessageEntity[]
         */
        public ?array $explanation_entities,
        /**
         * Amount of time in seconds the poll will be active after creation, 5-600. Can't
         * be used together with <em>close_date</em>.
         * @var int
         */
        public ?int $open_period,
        /**
         * Point in time (Unix timestamp) when the poll will be automatically closed. Must
         * be at least 5 and no more than 600 seconds in the future. Can't be used together
         * with <em>open_period</em>.
         * @var int
         */
        public ?int $close_date,
        /**
         * Pass <em>True</em> if the poll needs to be immediately closed. This can be
         * useful for poll preview.
         * @var bool
         */
        public ?bool $is_closed,
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
         * Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a
         * href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting
         * limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will
         * be withdrawn from the bot's balance
         * @var bool
         */
        public ?bool $allow_paid_broadcast,
        /**
         * Unique identifier of the message effect to be added to the message; for private
         * chats only
         * @var string
         */
        public ?string $message_effect_id,
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
