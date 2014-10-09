<?php

class LoginTest extends TestCase {

	/**
	 * A basic login test.
	 *
	 * @return void
	 */
	public function testLoginView()
	{
		$crawler = $this->client->request('GET', '/login');

		$this->assertTrue($this->client->getResponse()->isOk());

		$this->assertCount(1, $crawler->filter('h1:contains("Log in")'));
		$this->assertCount(2, $crawler->filter('input.form-control'));
		$this->assertCount(1, $crawler->selectButton('Log in'));
		$this->assertCount(1, $crawler->selectLink('Perdiste tu contraseña?'));
	}

	/**
	 * A login form test
	 * @return void
	 */
	public function testLoginForm()
	{
		$crawler = $this->client->request('GET', '/login');

		$this->assertResponseOk();

		$form = $crawler->selectButton('Log in')->form([
				'username'=>'malvarez',
				'password'=>'1234567u'
			]);

		$this->assertEquals('POST', $form->getMethod());
		$this->assertCount(3, $form->getValues());
	}

	/**
	 * A real login test
	 * @return void
	 */
	public function testDoLogin()
	{
		$this->client->request('POST', '/login', [
				'username'=>'malvarez',
				'password'=>'1234567u'
			]);

		$this->assertRedirectedTo('/profile');

		$crawler = $this->client->followRedirect();

		$this->assertResponseOk();

		$this->assertCount(4, $crawler->filter('h4 > span'));
	}


}