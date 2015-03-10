drop schema if exists names;
create schema names default character set utf8 collate utf8_polish_ci;
grant all on names.* to project@localhost identified by 'secret';
flush privileges;