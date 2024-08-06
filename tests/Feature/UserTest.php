<?php

test('HomeUser', function () {
    $response = $this->get('/user');

    $response->assertStatus(200);
});
test('Cadastro', function() {
    $dados = [
        'name' => 'hugoan',
        'email' => 'teste@1122teste.com',
        'cpf' => 12345668901
    ];
    // dd($dados);
    $response = $this->post('/user/create',$dados);

    $response->assertStatus(200);
});
