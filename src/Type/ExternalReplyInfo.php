<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\MessageOriginCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ExternalReplyInfo extends Data implements TelegramType
{
    public function __construct(
        /** @var  MessageOrigin  Origin of the message replied to by the given message */
        #[WithCast(MessageOriginCast::class)]
        public MessageOrigin $origin,
        /**
         * @var  Chat|null  Chat the original message belongs to. Available only if the chat is a supergroup or
         * a channel.
         */
        public ?Chat $chat,
        /**
         * @var  int|null  Unique message identifier inside the original chat. Available only if the original
         * chat is a supergroup or a channel.
         */
        public ?int $message_id,
        /**
         * @var  LinkPreviewOptions|null  Options used for link preview generation for the original message, if
         * it is a text message
         */
        public ?LinkPreviewOptions $link_preview_options,
        /** @var  Animation|null  Message is an animation, information about the animation */
        public ?Animation $animation,
        /** @var  Audio|null  Message is an audio file, information about the file */
        public ?Audio $audio,
        /** @var  Document|null  Message is a general file, information about the file */
        public ?Document $document,
        /** @var  LivePhoto|null  Message is a live photo, information about the live photo */
        public ?LivePhoto $live_photo,
        /** @var  PaidMediaInfo|null  Message contains paid media; information about the paid media */
        public ?PaidMediaInfo $paid_media,
        /** @var  PhotoSize[]|null  Message is a photo, available sizes of the photo */
        public ?array $photo,
        /** @var  Sticker|null  Message is a sticker, information about the sticker */
        public ?Sticker $sticker,
        /** @var  Story|null  Message is a forwarded story */
        public ?Story $story,
        /** @var  Video|null  Message is a video, information about the video */
        public ?Video $video,
        /** @var  VideoNote|null  Message is a video note, information about the video message */
        public ?VideoNote $video_note,
        /** @var  Voice|null  Message is a voice message, information about the file */
        public ?Voice $voice,
        /** @var  true|null  True, if the message media is covered by a spoiler animation */
        public ?true $has_media_spoiler,
        /** @var  Checklist|null  Message is a checklist */
        public ?Checklist $checklist,
        /** @var  Contact|null  Message is a shared contact, information about the contact */
        public ?Contact $contact,
        /** @var  Dice|null  Message is a dice with random value */
        public ?Dice $dice,
        /** @var  Game|null  Message is a game, information about the game. More about games */
        public ?Game $game,
        /** @var  Giveaway|null  Message is a scheduled giveaway, information about the giveaway */
        public ?Giveaway $giveaway,
        /** @var  GiveawayWinners|null  A giveaway with public winners was completed */
        public ?GiveawayWinners $giveaway_winners,
        /**
         * @var  Invoice|null  Message is an invoice for a payment, information about the invoice. More about
         * payments
         */
        public ?Invoice $invoice,
        /** @var  Location|null  Message is a shared location, information about the location */
        public ?Location $location,
        /** @var  Poll|null  Message is a native poll, information about the poll */
        public ?Poll $poll,
        /** @var  Venue|null  Message is a venue, information about the venue */
        public ?Venue $venue,
    ) {
    }
}
