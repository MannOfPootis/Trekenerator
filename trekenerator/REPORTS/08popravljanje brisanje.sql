UPDATE TABLE account
SET PASSWORD='OAJNBHAFKIJFAIPBAIBEIHNIJPANFIBPAJHFIA'
WHERE id =0
UPDATE TABLE location
SET name='OAJNBHAFKIJFAIPBAIBEIHNIJPANFIBPAJHFIA'
WHERE id =0
UPDATE TABLE path
SET comment='OAJNBHAFKIJFAIPBAIBEIHNIJPANFIBPAJHFIA'
WHERE id =0
UPDATE TABLE path
SET comment='zaminiva'
WHERE id =0
UPDATE TABLE location
SET height=2000
WHERE id =0
UPDATE TABLE comment
SET text = 'dober dan neki sm narobe napisu'
WHERE poster = 0 and text ='dbr dan neki sm narobe napisu'
UPDATE TABLE account
SET first_name = 'dominik'
WHERE id =0
UPDATE TABLE path--tektonske plošče
SET length += 1
WHERE id =0
UPDATE TABLE path
SET location1 = 2--spremenili smo na drugo lokacijo
WHERE id =0
UPDATE TABLE path
SET location1 = 2--spremenili smo na drugo lokacijo
WHERE id =0
DELETE FROM account
WHERE id between(0,20)--tole so bili prvi exsperimentalni vnosi 

DELETE FORM account 
where first_name Like('%š%') or first_name like('%ž%')--SOVRAŽIM ŠUMNIKE

DELETE FROM account 
where last_name in('joža','bsadxys', 'proisisus')

DELETE FROM LOCATION
where height<=300-- nimam rad nižin

DELETE FROM LOCATION
where height>=9000 --take višine tak nebi semele obstajat

DELETE FROM path
where length<=50 --nebi smelobstajat

delete from path
where poster =5-- ttle clovk posta fake stvari

delete from location
where name ='yellowstone narodni park'-- eksplodiru je lol

delete from comment
where text like ("%nigger%")--samoumevno

delete from comment
where text like ("%nigger%")--samoumevno
