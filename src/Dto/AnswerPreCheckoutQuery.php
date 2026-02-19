<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form of
 * an <a href="https://core.telegram.org/bots/api#update">Update</a> with the field <em>pre_checkout_query</em>. Use this
 * method to respond to such pre-checkout queries. On success, <em>True</em> is returned. Note: The Bot API must receive an
 * answer within 10 seconds after the pre-checkout query was sent.
 */
final class AnswerPreCheckoutQuery extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier for the query to be answered */
        public string $pre_checkout_query_id,
        /**
         * Specify <em>True</em> if everything is alright (goods are available, etc.) and the bot is ready to proceed with the
         * order. Use <em>False</em> if there are any problems.
         */
        public bool $ok,
        /**
         * Required if <em>ok</em> is <em>False</em>. Error message in human readable form that explains the reason for failure to
         * proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy
         * filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to
         * the user.
         */
        public ?string $error_message,
    ) {
    }
}
