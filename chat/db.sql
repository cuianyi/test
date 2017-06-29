create table chat_log(
	log_id int4 auto_increment primary key,
	rec varchar(10)  not null,
	sender varchar(10) not null,
	content text not null,
	is_new tinyint not null default 1
)charset utf8;