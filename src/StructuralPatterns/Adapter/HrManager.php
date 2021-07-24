<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Adapter;

/**
 * Now create hunter who hunts any type of Team-leads
 *
 * Class HrManager
 * @package Patterns\StructuralPatterns\Adapter
 */
class HrManager
{
    public function hunt(TeamLeadInterface $teamLead)
    {
        echo '- Hello, I am looking for a team lead. ';
        echo 'Do you have a leadership experience?'.PHP_EOL;
        echo '- '.$teamLead->lead();
        echo 'Do you have a planning experience?'.PHP_EOL;
        echo '- '.$teamLead->plan();
        echo 'Thank you!) We will recall to you :))'.PHP_EOL;
    }
}
