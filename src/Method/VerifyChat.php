<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Verifies a chat on behalf of the organization which is represented by the bot.
 * Returns <em>True</em> on success.
 */
final class VerifyChat extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Custom description for the verification; 0-70 characters. Must be empty if the
         * organization isn't allowed to provide a custom verification description.
         * @var string
         */
        public ?string $custom_description,
    ) {
    }
}
