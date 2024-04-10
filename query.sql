/*1)TABELLA HOST:*/
 CREATE TABLE HOST(nome char(20),
				   cognome char(20),
				   email char(40),
				   numTel char(20),
				   hostId char(20) unique,
				   password char(20),
				   mezzo char(20);
/*2)TABELLA CLIENTI:*/
 CREATE TABLE CLIENTI(nome char(20),
					 cognome char(20),
					 email char(40),
					 userId char(20) unique,
					 password char(20),
					 metodoPagamento char(20));
/*3)TABELLA RICHIESTE:*/
 CREATE TABLE RICHIESTE(id int(11) unique,
					  città char(20),
					  posizionePartenza date,
					  indirizzoDestinazione date,
					  descrizione text,
					  metodoPagamento int(20),
					  nomeClient char(20),
					  recensione text);
/*4)TABELLA MESSAGGI:*/
 CREATE TABLE RICHIESTA(idRichiesta char(20),
					   testo text,
					   data timestamp,
					   storico char(20));
					   
/*1)Creazione di un utente di tipo host.*/
 INSERTINTOHOST(nome,cognome,email,numTel,hostId,password,mezzo)values('','','','','','','');
/*2)Creazione di un utente di tipo cliente.*/
 INSERTINTOCLIENTI(nome,cognome,email,userId,password,metodoPagamento)values('','','','','','');
/*3)Per inserire una richiesta.*/
INSERTINTOANNUNCI(città,posizionePartenza,indirizzoDestinazione,descrizione,metodoPagamento,nomeClient)values('','','','','','','');
/*4)Per rimuovere una richiesta.*/
 DELETE FROM RICHIESTE WHERE ID = '';
/*5)Per ricercare una richiesta per posizione.*/
 SELECT *FROM Annunci where posizionePartenza between '' and '';
/*6) Per ricercare un annuncio per località.*/
 SELECT * FROM annunci WHERE città ='';
/*7) Per inviare la richiesta all’ host:*/
 
 SELECT email,numTel FROM host INNER JOIN annunci ON (host.hostId = richieste.nomeHost AND richieste.id = '') WHERE nomeClient ='';
 /*8) Per pagare */
 INSERT INTO pagamento(idRichiesta,testo,data)values('','','');
/*9) Per mostrare tutti i messaggi del forum:*/
 SELECT * FROM richieste
/*10)Per aggiungere una recensione:*/
 UPDATE annunci SET recensione='' WHERE id='';


 
				   
				  
