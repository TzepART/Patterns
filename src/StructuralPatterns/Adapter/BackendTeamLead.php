<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Adapter;

/**
 * Class BackendTeamLead
 * @package Patterns\StructuralPatterns\Adapter
 */
class BackendTeamLead implements TeamLeadInterface
{
    public function lead(): void
    {
        echo '- I am a God of backend Team!!!'.PHP_EOL;
    }

    public function plan(): void
    {
        echo '- I know how create tasks in Jira :))'.PHP_EOL;
    }
}
