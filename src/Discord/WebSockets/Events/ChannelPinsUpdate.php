<?php

/*
 * This file is apart of the DiscordPHP project.
 *
 * Copyright (c) 2016 David Cole <david@team-reflex.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the LICENSE.md file.
 */

namespace Discord\WebSockets\Events;

use Discord\Parts\Channel\Message;
use Discord\Repository\Channel\MessageRepository;
use Discord\WebSockets\Event;
use React\Promise\Deferred;

class ChannelPinsUpdate extends Event
{
    /**
     * {@inheritdoc}
     */
    public function handle(Deferred $deferred, $data)
    {
        //wip
    }
}
