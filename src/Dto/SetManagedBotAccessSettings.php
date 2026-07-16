<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to change the access settings of a managed bot. Returns <em>True</em> on success.
 */
final class SetManagedBotAccessSettings extends Dto implements TelegramBotDto
{
    public function __construct(
        /** User identifier of the managed bot whose access settings will be changed */
        public int $user_id,
        /** Pass <em>True</em> if only selected users can access the bot. The bot's owner can always access it. */
        public bool $is_access_restricted,
        /**
         * A JSON-serialized list of up to 10 identifiers of users who will have access to the bot in addition to its
         * owner. Ignored if <em>is_access_restricted</em> is <em>False</em>.
         * @var array<int>
         */
        public ?array $added_user_ids,
    ) {
    }
}
