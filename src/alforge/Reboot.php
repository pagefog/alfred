<?php

namespace AlForge;

use AlForge\Forge;
use Alfred\Workflows\Workflow;

class Reboot extends Forge
{
    public function search($query)
    {
        echo $this->serverSearch($query);
    }

    public function execute($server_id)
    {
        $server = $this->getServerInfo($server_id);

        if($this->confirm("Are you sure you want to reboot the server `$server->name`?")){
            $response = $this->apiRequest("https://forge.laravel.com/api/v1/servers/$server->id/reboot");
            $this->respond("`$server->name` is rebooting...");
        }

    }
}