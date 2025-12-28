INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES('平野','test01@test.jp',10,'内容',sysdate());
INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES('大野','test02@test.jp',20,'内容',sysdate());
INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES('平野','test03@test.jp',30,'内容',sysdate());
INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES('小野','test04@test.jp',20,'内容',sysdate());
INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES('草野','test22@test.jp',10,'内容',sysdate());
INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES('高野','test32@test.jp',10,'内容',sysdate());


SELECT * From gs_an_table;
SELECT id,name,age FROM gs_an_table;
SELECT id,name,age FROM gs_an_table WHERE id=1;
SELECT * From gs_an_table WHERE id=1 OR id=3;

SELECT * From gs_an_table WHERE email LIKE '%4@%';
SELECT * FROM gs_an_table ORDER BY age ASC LIMIT 3;

