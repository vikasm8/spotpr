Steps -

1.

create table users (   
  id               number(10),   
  uname             VARCHAR2(120 BYTE),   
  username         VARCHAR2(120 BYTE),   
  upassword         VARCHAR2(120 BYTE),   
  email            VARCHAR2(120 BYTE),   
  phone            VARCHAR2(120 BYTE),   
  access_level           VARCHAR2(120 BYTE),   
  user_status      VARCHAR2(120 BYTE),   
  CREATED_DATE     date,   
  constraint u_id PRIMARY KEY(id)   
)

2.

Create sequence uid_sequence start with 1   
increment by 1   
minvalue 1   
maxvalue 10000

3.

insert into users (id,uname,username, upassword,email,phone,access_level, user_status) values(uid_sequence.nextval,'Rahul','rahuliitm69','123456','rahul@gmail.com','9878798989','1','1');
	insert into users (id,uname,username, upassword,email,phone,access_level, user_status) values(uid_sequence.nextval,'Vikas','vikast','123456','vikas@gmail.com','9878798989','1','1');