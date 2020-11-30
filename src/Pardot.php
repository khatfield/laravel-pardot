<?php

  namespace Khatfield\LaravelPardot;

  use CyberDuck\Pardot\PardotApi;
  use Illuminate\Support\Collection;

  class Pardot
  {
    protected $client;

    /**
     * @param Collection $config
     */
    public function connect($config, $connection = null)
    {
      $connection        = $connection ?? $config->get("pardot.default");
      $email             = $config->get("pardot.connections.{$connection}.email");
      $password          = $config->get("pardot.connections.{$connection}.password");
      $user_key          = $config->get("pardot.connections.{$connection}.user_key");
      $auth_type         = $config->get("pardot.connections.{$connection}.auth_type");
      $business_unit_id  = $config->get("pardot.connections.{$connection}.business_unit_id");
      $consumer_key      = $config->get("pardot.connections.{$connection}.consumer_key");
      $consumer_secret   = $config->get("pardot.connections.{$connection}.consumer_secret");

      $this->client = new PardotApi(
        $email, $password, $user_key, $auth_type,
        $business_unit_id, $consumer_key, $consumer_secret
      );

      if($config->get("pardot.debug") == true) {
        $this->client->setDebug(true);
      }
    }

    public function __call($method, $args)
    {
      return call_user_func_array([$this->client, $method], $args);
    }
  }
