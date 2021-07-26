<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Adapter;

/**
 * Class BackendTeamLead
 * @package Patterns\StructuralPatterns\Adapter
 */
class MobileTeamLead implements TeamLeadInterface
{
    public function lead(): void
    {
        echo '- I manage of mobile developing.'.PHP_EOL;
    }

    public function plan(): void
    {
        echo '- I use Trello for task management.'.PHP_EOL;
    }
}
