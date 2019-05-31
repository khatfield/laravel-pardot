<?php


namespace Khatfield\LaravelPardot;


use HGG\Pardot\Connector;
use Illuminate\Support\Collection;

class Pardot
{
    protected $client;

    /**
     * @param Collection $config
     */
    public function connect($config)
    {
        $username = $config->get('pardot.username');
        $password = $config->get('pardot.password');
        $user_key = $config->get('pardot.user_key');

        $this->client = new Connector(
            [
                'email'    => $username,
                'user-key' => $user_key,
                'password' => $password,
            ]
        );
    }

    public function __call($method, $args)
    {
        return call_user_func_array([$this->client, $method], $args);
    }
}