<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Deletes a story previously posted by the bot on behalf of a managed business
 * account. Requires the <em>can_manage_stories</em> business bot right. Returns
 * <em>True</em> on success.
 */
final class DeleteStory extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
        /**
         * Unique identifier of the story to delete
         * @var int
         */
        public int $story_id,
    ) {
    }
}
