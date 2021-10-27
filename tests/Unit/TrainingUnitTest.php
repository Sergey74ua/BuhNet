<?php

namespace Tests\Unit;

use Tests\TestCase;

class TrainingUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    //Выводим содержимое странички в консоль
    public function test_html()
    {
        $response = $this->get('calc');

        #dd($response->getContent());
    }

    //Проверяем ответ страницы
    public function test_status()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        //или так
        $this->assertEquals(200, $response->status());
    }

    //Проверка аторизации
    public function test_auth()
    {
        $this->post('/login', [
            'email' => 'qwerty@gmail.com',
            'password' => '123456'
        ]);

        $response = $this->get('cabinet');
    
        $response->assertOk();
    }

    //Проверка аторизации без почты
    public function test_mail()
    {
        $this->post('/login', [
            'email' => '0@gmail.com',
            'password' => '123456'
        ]);

        $response = $this->get('cabinet');
    
        $response->assertUnauthorized();
    }

    //Проверка аторизации без пароля
    public function test_pass()
    {
        $this->post('/login', [
            'email' => 'qwerty@gmail.com',
            'password' => '0'
        ]);

        $response = $this->get('cabinet');
    
        $response->assertUnauthorized();
    }
}
