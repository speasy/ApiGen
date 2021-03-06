<?php declare(strict_types=1);

namespace ApiGen\Generator\EventSubscriber;

use ApiGen\Contracts\Console\Helper\ProgressBarInterface;
use ApiGen\Generator\Event\GenerateProgressEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

final class ProgressBarSubscriber implements EventSubscriberInterface
{
    /**
     * @var ProgressBarInterface
     */
    private $progressBar;

    public function __construct(ProgressBarInterface $progressBar)
    {
        $this->progressBar = $progressBar;
    }

    /**
     * @return string[]
     */
    public static function getSubscribedEvents(): array
    {
        return [
            GenerateProgressEvent::class => 'generateProgress'
        ];
    }

    public function generateProgress(): void
    {
        $this->progressBar->increment(1);
    }
}
