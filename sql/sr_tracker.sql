Steps -

1) 

create table SR_TRACKER (  
  id                      number(10),  
  jira_number             VARCHAR2(120 BYTE),  
  database_name           VARCHAR2(120 BYTE),  
  sr_number                   VARCHAR2(120 BYTE),  
  sr_name               VARCHAR2(120 BYTE),  
  start_date             VARCHAR2(120 BYTE),  
  change_number             VARCHAR2(120 BYTE),  
  change_status             VARCHAR2(120 BYTE),  
  CREATED_DATE                 date,  
  constraint sr_id PRIMARY KEY(id)  
);

2)

Create sequence srid_sequence start with 1  
increment by 1  
minvalue 1  
maxvalue 10000

3)

insert into SR_TRACKER (id,jira_number,database_name, sr_number,sr_name, CREATED_DATE) values(srid_sequence.nextval,'Jira01','jiradb01','srnum01','srname01', '11-jan-18');

insert into SR_TRACKER (id,jira_number,database_name, sr_number,sr_name, CREATED_DATE) values(srid_sequence.nextval,'Jira02','jiradb02','srnum02','srname02', TO_DATE('11/01/2019', 'dd/mm/yyyy'));