<?php
echo form_open('crud/create');
echo form_label('Nome Completo: ');
echo form_input(array('name'=>'nome'), '','autofocus');
echo '<br />';
echo form_label('Email: ');
echo form_input(array('name'=>'email'));
echo '<br />';
echo form_label('Login: ');
echo form_input(array('name'=>'login'));
echo '<br />';
echo form_label('Senha: ');
echo form_password(array('name'=>'senha'));
echo '<br />';
echo form_label('Repita a senha: ');
echo form_password(array('name'=>'senha2'));
echo '<br />';
echo form_submit(array('name'=>'cadastrar'), 'Cadastrar');
echo form_close();