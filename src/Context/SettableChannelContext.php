<?php
declare(strict_types=1);


namespace Akki\SyliusSettableChannelPlugin\Context;

use Sylius\Component\Channel\Context\ChannelNotFoundException;
use Sylius\Component\Channel\Model\ChannelInterface;
use Sylius\Component\Channel\Repository\ChannelRepositoryInterface;

final class SettableChannelContext implements SettableChannelContextInterface
{
    private ChannelInterface|null $channel;

    public function __construct(
        private readonly ChannelRepositoryInterface $channelRepository
    )
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

    public function setChannelByCode(string $channelCode): void
    {
        $channel = $this->channelRepository->findOneByCode($channelCode);

        if (null === $channel) {
            throw new ChannelNotFoundException();
        }

        $this->channel = $channel;
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
