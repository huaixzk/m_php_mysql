###Sql for mysql###
// all sql commonds 
* delete from books where price="0.00";
* mysqldump --database mydb -u user -p
* flush privilileges;

###privileges###

* show tables;
* show databases;
* describe table(name) ;
* show tables from db_name;
> show tables from mysql;
* show columns from table_name from db_name;

* show grants for user_name; 

###grant_for_user###

* grant all on * to test identified by '00' with grant option;

* describe  table | column;
* explain table;

==describe table || explain table|| show columns from table;==
* explain select * from db_name.table_name;

###optimize###

* optimize table table_name;
* flush tables;

###DB SHA1###

- insert into table_name values ('table_1', sha1('table_2'));
- insert into authorized_users values ('b', 'a');
- select * from authorized_users where name = 'root' and password = 'fb96549631c835eb239cd614cc6b5cb7d295121a'  or name = 'a' and  password = 'a';
-  select * from authorized_users where name = 'root' and password = 'fb96549631c835eb239cd614cc6b5cb7d295121a'  or password = '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8';
