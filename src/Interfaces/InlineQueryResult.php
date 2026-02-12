<?php

namespace Appto\TelegramBot\Interfaces;

/**
 * This object represents one result of an inline query. Telegram clients currently
 * support results of the following 20 types:
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultcachedaudio">InlineQueryResultCachedAudio</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultcacheddocument">InlineQueryResultCachedDocument</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultcachedgif">InlineQueryResultCachedGif</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultcachedmpeg4gif">InlineQueryResultCachedMpeg4Gif</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultcachedphoto">InlineQueryResultCachedPhoto</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultcachedsticker">InlineQueryResultCachedSticker</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultcachedvideo">InlineQueryResultCachedVideo</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultcachedvoice">InlineQueryResultCachedVoice</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultarticle">InlineQueryResultArticle</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultaudio">InlineQueryResultAudio</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultcontact">InlineQueryResultContact</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultgame">InlineQueryResultGame</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultdocument">InlineQueryResultDocument</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultgif">InlineQueryResultGif</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultlocation">InlineQueryResultLocation</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif">InlineQueryResultMpeg4Gif</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultphoto">InlineQueryResultPhoto</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultvenue">InlineQueryResultVenue</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultvideo">InlineQueryResultVideo</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#inlinequeryresultvoice">InlineQueryResultVoice</a>
 * Note: All URLs passed in inline query results will be available to end users and
 * therefore must be assumed to be public.
 */
interface InlineQueryResult
{
}
