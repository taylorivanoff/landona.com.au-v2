<?php

namespace App\Services;

class Staff
{
    protected array $team;

    public function __construct()
    {
        $this->team = [
            ['name' => 'Tina Randall', 'position' => 'Director', 'email' => 'tina@landona.com.au'],
            ['name' => 'Maddy Ivanoff', 'position' => 'Junior Conveyancer', 'email' => 'maddy@landona.com.au'],
        ];
    }

    public function getTeam(): array
    {
        return $this->team;
    }

    public function addMember($name, $position): void
    {
        $this->team[] = ['name' => $name, 'position' => $position];
    }

    public function getEmails(): array
    {
        return array_map(function($member) {
            return $member['email'];
        }, $this->team);
    }
}
