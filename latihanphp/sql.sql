CREATE TABLE USER_ACCOUNT (
    ID INTEGER UNIQUE AUTO_INCREMENT ,
    NAME VARCHAR(255) NOT NULL,
    PASSWORD VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID)
    ); 

INSERT INTO user_account(NAME, PASSWORD) VALUES ('root', 'toor');                                    

SELECT NAME, PASSWORD FROM USER_ACCOUNT