CREATE TABLE Students
(
  isikukood varchar(11)   NOT NULL ,
  lastname  char(20)  NOT NULL ,  	
  name      char(20)  NOT NULL ,  
  grade     int       NOT NULL ,
  email     char(20)  NOT NULL ,
  message   char(250) NULL ,
  CONSTRAINT PK_Students  PRIMARY KEY (isikukood)
);

