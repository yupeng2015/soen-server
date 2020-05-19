<?php

namespace Soen\Server;

/**
 * Interface HandlerInterface
 * @package Soen\Server
 */
interface HandlerInterface
{

    /**
     * @param ServerRequest $request
     * @param Response $response
     * @return mixed
     */
    public function handle();

}
