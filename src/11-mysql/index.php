<?php

echo '<pre>';
echo 'SETTING UP MYSQL ON THE COMMAND LINE:';
echo '</pre>';
// log in with the root user name. For root user, generaly there's no password.
echo 'mysql -u root';
// in general, your database correspondes to yoru website. 1 site, 1 database.
echo 'create database mytodo
<br>';
echo 'show databases
<br>';
echo 'use mytodo
<br>';
echo 'create table todos (description text, completed boolean)
<br>';
echo 'show tables
<br>';
echo 'description todos
<br>';
echo 'drop table todos
<br>';
echo 'show tables
<br>';
echo 'create table todos (id integer PRIMARY KEY AUTO_INCREMENT, description text NOT NULL
<br>, completed boolean)';
echo 'show tables
<br>';
echo 'describe todos
<br>';
echo 'insert into todos (description, completed) values("Go to the store", false)
<br>';
echo 'select * from todos
<br>';
echo 'Install a GUI for mySQL
<br>';
echo 'I installed "HeidSQL"
<pre>';
echo 'END OF VIDEO
</pre>';