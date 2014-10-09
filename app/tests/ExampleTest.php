<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testEmpleosAll()
	{
		$crawler = $this->client->request('GET', '/empleos');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}