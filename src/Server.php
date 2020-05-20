<?php

namespace Soen\Server;


class Server implements ServerInterface
{
    public $server;
    function __construct(ServerInterface $server)
    {
        $this->server = $server;
    }

    function up()
    {
        $this->server->up();
    }

    function down()
    {
        $this->server->down();
    }
}