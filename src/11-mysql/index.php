<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		pre {
			background-color:lightgray;
		}

		li {
			font-style:italic;
		}
	</style>
</head>
<body>
	<h1>Setting mySQL CLI</h1>
	<pre>Log in with the root user name. For root user, generaly there's no password.</pre>
	<pre>Chose the user before you connect to mysql. I found that, once connected, you cannot switch to another user. You have to `exit` mysql and connect again with the other user;</pre>
	<pre>Add this path to the path enviroment variable and restart your code editor: C:\`$xamp_root_folder`\mysql\bin.</pre>
	<ul>
		<li>mysql -u root</li>
		<li>create database mytodo;</li>
		<pre> In general, your database correspondes to your website. 1 site, 1 database.</pre>
		<li>show databases;</li>
		<li>use mytodo;</li>
		<li>create table todos (id integer PRIMARY KEY AUTO_INCREMENT, description text NOT NULL, completed boolean);</li>
		<pre>the order for each column is `field, type, modifier`, separated from the others by colons.</pre>
		<li>show tables;</li>
		<li>describe todos;</li>
		<li>insert into todos (description, completed) values("Go to the store", false);</li>
		<pre>the id field/collumn will auto increment, as defined in it's modifier, so it does not need to be added</pre>
		<li>select * from todos;</li>
		<li>Install a GUI for mySQL;</li>
		<li>I installed "HeidSQL"</li>	
		<li>drop table todos;</li>
	</ul>
</body>
</html>