<?php
declare(strict_types=1);


namespace Akki\SyliusSettableChannelPlugin\Context;

use Sylius\Component\Channel\Context\ChannelNotFoundException;
use Sylius\Component\Channel\Model\ChannelInterface;

final class SettableChannelContext implements SettableChannelContextInterface
{
    private ChannelInterface|null $channel;

    public function __construct()
    {
        $this->channel = null;
    }

    public function getChannel(): ChannelInterface
    {
        if (null === $this->channel) {
            throw new ChannelNotFoundException();
        }

        return $this->channel;
    }

    public function setChannel(ChannelInterface|null $channel): void
    {
        $this->channel = $channel;
    }

    public function reset(): void
    {
        $this->channel = null;
    }
}
