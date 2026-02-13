<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\InputPollOption;
use Appto\TelegramBot\Data\MessageEntity;
use Appto\TelegramBot\Data\ReplyParameters;
use Appto\TelegramBot\Interfaces\ReplyMarkup;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to send a native poll. On success, the sent <a
 * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
 */
final class SendPoll extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be sent
         */
        public ?string $business_connection_id,
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>). Polls can't be sent to channel direct
         * messages chats.
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of a forum; for forum
         * supergroups and private chats of bots with forum topic mode enabled only
         */
        public ?int $message_thread_id,
        /** Poll question, 1-300 characters */
        public string $question,
        /**
         * Mode for parsing entities in the question. See <a
         * href="#formatting-options">formatting options</a> for more details. Currently,
         * only custom emoji entities are allowed
         */
        public ?string $question_parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the poll question. It
         * can be specified instead of <em>question_parse_mode</em>
         */
        public ?MessageEntity $question_entities,
        /** A JSON-serialized list of 2-12 answer options */
        public InputPollOption $options,
        /** <em>True</em>, if the poll needs to be anonymous, defaults to <em>True</em> */
        public ?bool $is_anonymous,
        /** Poll type, "quiz" or "regular", defaults to "regular" */
        public ?string $type,
        /**
         * <em>True</em>, if the poll allows multiple answers, ignored for polls in quiz
         * mode, defaults to <em>False</em>
         */
        public ?bool $allows_multiple_answers,
        /** 0-based identifier of the correct answer option, required for polls in quiz mode */
        public ?int $correct_option_id,
        /**
         * Text that is shown when a user chooses an incorrect answer or taps on the lamp
         * icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after
         * entities parsing
         */
        public ?string $explanation,
        /**
         * Mode for parsing entities in the explanation. See <a
         * href="#formatting-options">formatting options</a> for more details.
         */
        public ?string $explanation_parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the poll explanation.
         * It can be specified instead of <em>explanation_parse_mode</em>
         */
        public ?MessageEntity $explanation_entities,
        /**
         * Amount of time in seconds the poll will be active after creation, 5-600. Can't
         * be used together with <em>close_date</em>.
         */
        public ?int $open_period,
        /**
         * Point in time (Unix timestamp) when the poll will be automatically closed. Must
         * be at least 5 and no more than 600 seconds in the future. Can't be used together
         * with <em>open_period</em>.
         */
        public ?int $close_date,
        /**
         * Pass <em>True</em> if the poll needs to be immediately closed. This can be
         * useful for poll preview.
         */
        public ?bool $is_closed,
        /**
         * Sends the message <a
         * href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>.
         * Users will receive a notification with no sound.
         */
        public ?bool $disable_notification,
        /** Protects the contents of the sent message from forwarding and saving */
        public ?bool $protect_content,
        /**
         * Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a
         * href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting
         * limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will
         * be withdrawn from the bot's balance
         */
        public ?bool $allow_paid_broadcast,
        /**
         * Unique identifier of the message effect to be added to the message; for private
         * chats only
         */
        public ?string $message_effect_id,
        /** Description of the message to reply to */
        public ?ReplyParameters $reply_parameters,
        /**
         * Additional interface options. A JSON-serialized object for an <a
         * href="/bots/features#inline-keyboards">inline keyboard</a>, <a
         * href="/bots/features#keyboards">custom reply keyboard</a>, instructions to
         * remove a reply keyboard or to force a reply from the user
         */
        public ?ReplyMarkup $reply_markup,
    ) {
    }
}
