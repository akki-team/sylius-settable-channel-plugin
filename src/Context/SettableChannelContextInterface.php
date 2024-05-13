<?php
declare(strict_types=1);


namespace Akki\SyliusSettableChannelPlugin\Context;

use Sylius\Component\Channel\Context\ChannelContextInterface;
use Sylius\Component\Core\Model\ChannelInterface;

interface SettableChannelContextInterface extends ChannelContextInterface
{
    public function setChannel(ChannelInterface|null $channel): void;

    public function setChannelByCode(string $channelCode): void;

    public function reset(): void;
}
