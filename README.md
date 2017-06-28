<h2>Reeeh</h2>

Simple, Fast & easy PHP Framework

<h3>How to get started?</h3>

<ul>
<li>Download the framework then put inside your server folder like htdocs or other.</li>

<li>Then you have to rename the folder on reeeh or any your application name.</li>

<li>Edit the htaccess "rewriteBase /reeeh/"</li>

<li>You have to configure the framework initilize file.</li>

<li>Create a Database called reeeh or your application name.</li>
</ul>


You have to create table users and database then you can start use the framework.


<code>
CREATE TABLE `users` ( `id` int(11) NOT NULL AUTO_INCREMENT, `email` varchar(150) CHARACTER SET utf8 NOT NULL, `password` varchar(200) CHARACTER SET utf8 NOT NULL, `passwordsalt` varchar(200) CHARACTER SET utf8 NOT NULL, `fullname` varchar(50) CHARACTER SET utf8 NOT NULL, `first_name` varchar(150) CHARACTER SET utf8 NOT NULL, `last_name` varchar(150) CHARACTER SET utf8 NOT NULL, `phone` varchar(20) CHARACTER SET utf8 NOT NULL, `description` varchar(500) CHARACTER SET utf8 NOT NULL, `cdate` datetime NOT NULL, `cby` int(11) NOT NULL, `udate` datetime NOT NULL, `uby` int(11) NOT NULL, PRIMARY KEY (id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8; 
</code>

<h3>Get involved</h3>
If you are interested about developing the framework contact me on facebook : fb.com/brahim.moullablad or send me an email : b.moullablad.com
