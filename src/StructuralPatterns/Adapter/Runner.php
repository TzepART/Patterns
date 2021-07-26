<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Adapter;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        /**
         * Now HrManager can hunt team-leads
         */
        $hunter = new HrManager();

        $backTeamLead = new BackendTeamLead();
        $hunter->hunt(teamLead: $backTeamLead);

        $mobileTeamLead = new MobileTeamLead();
        $hunter->hunt(teamLead: $mobileTeamLead);

        $seniorDeveloper = new SeniorPHPDeveloper();
        // But, He is not a TeamLead :(((. Use Adapter
        $seniorDeveloperAdapter = new SeniorDeveloperAdapter(developer: $seniorDeveloper);
        $hunter->hunt(teamLead: $seniorDeveloperAdapter);
    }
}
