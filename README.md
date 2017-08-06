# Fermicoding
Junior PHP Job/Position

## Sta treba promeniti:

(Ja sam napravio Virtual Host na Apache-u i nazvao ga fermicoding.dev) 

1. .htaccess 	- Promeniti putanju za RewriteBase ukoliko se ne koristi VH u Apache-u

## Koriscenje:

1. Prikaz sva tri testa se prikazuje na **~/home** ( ili **~/home/index** )
2. Prvi test - Bootstrap 3 sa grid sistemom:
	* za velicinu **≥768px** prikazuju se sva tri div elementa u istom redu.
	* za velicinu **<768px** prikazuju se prva dva elementa (slika i sledeci div) u jednom redu dok treci div prelazi ispod ta dva.
3. Drugi test - jQuery provera dva seta od po tri tekstualna input polja za datum/mesec/godinu.
4. PHP/AJAX (JavaScript) skripta koja prikazuje mesto (Novi Sad), vreme, detaljniji opis vremena i trenutnu temperaturu. Izvrsava se cim se otvori stranica a zatim na svakih 10 sekundi.
5. Za vreme sam koristio OpenWeatherMap API ( https://openweathermap.org/ )
