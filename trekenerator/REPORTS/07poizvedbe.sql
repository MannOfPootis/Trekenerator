INSERT INTO account(first_name, last_name, username, password)
values ('Janez','Novak', 'janez80085', '$2y$10$3ok0sqLqQiEgINZjlEyG9u1V0qKr9CDxtIhOP8UZfX7bnSZhStUjW')

insert into account( first_name, last_name, username, password)
values ('Janez','Novak', 'janez81085', '$2y$10$3ok0sqLqQiEgINZjlEyG9u1V0qKr9CDxtIhOP8UZfX7bnSZhStUjW')

insert into location(name, height, poster, comment)
values('gorska koča triglav',2000,0,'koča pod najišjim vrhom v sloveniji')

insert into location(name, height, poster)
values('gorska koča raduha',1700,0,)

insert into location(name, height, poster, comment)
values('gorska koča peca',1906,0,'visok vrh na koroškem')

insert into location(name, height, poster, comment)
values('smrekovnik',1500,1,'vulkanski vrh od mrtvega ognjenika ')

insert into location(name, height, poster, comment)
values('celje',300,0,'mesto')

insert into location(name, height, poster, comment)
values('ljubljana',300,1,'glaavno mesto slovenije')

insert into location(name, height, poster, comment)
values('dobrna',300,1,'mesto kjer so kar vredu tolice')

insert into location(name, height, poster, comment)
values('zavrh',907,1,'vrh na paškem kozjaku')

insert into PATH(name,length, location1, location2, poster, comment)
values('od raduhe na  triglav', 100000,0,1,'dolga pot in zelo zanimiva')

insert into PATH(name,length, location1, location2, poster, comment)
values('k24 prva postaja', 6000,1,2,'pot med vrhovi koroške')

insert into PATH(name,length, location1, location2, poster, comment)
values('k24 druga postaja', 6000,3,2,'pot med vrhovi koroške')

insert into PATH(name,length, location1, location2, poster, comment)
values('ljubljana do celja', 70000,4,5,'povezava med dvema mestom')

insert into PATH(name,length, location1, location2, poster, comment)
values('anina pot', 10000,6,7,'dolga pot in zelo zanimiva')

insert into PATH(name,length, location1, location2, poster, comment)
values('anina pot', 10000,6,7,'dolga pot in zelo zanimiva')

insert into comment(poster,TEXT,topic,towards )
values(0,'TVOJA MAMA','LOCATION',1)

insert into comment(poster,TEXT,topic,towards )
values(0,'TVOJA MAMA','LOCATION',1)

insert into comment(poster,TEXT,topic,towards )
values(0,'TVOJA MAMA','LOCATION',1)

insert into comment(poster,TEXT,topic,towards )
values(0,'TVOJA MAMA','LOCATION',2)
