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
    public function connect($config)
    {
      $email    = $config->get('pardot.email');
      $user_key = $config->get('pardot.user_key');
      $password = $config->get('pardot.password');

      $this->client = new PardotApi($email, $user_key, $password);
    }

    public function __call($method, $args)
    {
      return call_user_func_array([$this->client, $method], $args);
    }
  }