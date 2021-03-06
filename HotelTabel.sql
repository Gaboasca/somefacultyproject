CREATE TABLE User_Login
(
ID_User INT (4),
username VARCHAR(20) NOT NULL,
password INT(30) NOT NULL,
type INT (1) NULL,
FirstName varchar(30) NULL,
LastName varchar(20) NULL,
Mobile INT (10) NULL,
Phone INT (10) NULL,
email VARCHAR(30) NULL,
CNP INT (13) NULL,
Data DATE NULL,
Location VARCHAR (30) NULL,
City VARCHAR(20) NULL,
Address varchar(100) NULL,
Postal_Code INT(5) NULL, 
NR_Vizite INT (3) NULL,
PRIMARY KEY (ID_User)
);



CREATE TABLE Camera
(
ID_Camere INT (3) NOT NULL,
NR_Camera INT (4),
TIP_Camera VARCHAR(20),
Vedere VARCHAR (5),
Aerconditionat INT(1),
Televizor INT(1),
Internet INT(1),
Balcon INT(1),
Ocupat INT(1),
Pret INT(7),
FOREIGN KEY (ID_Camere) REFERENCES Hotels(ID_Hotel)
);




CREATE TABLE Hotels
(
ID_Hotel INT (6),
h_username VARCHAR(20) NOT NULL,
h_password INT (30) NOT NULL,
h_type int (1),
h_htype int (1),
h_name VARCHAR (30),
h_mobile INT (10),
h_phone INT (10),
h_fax INT(12),
h_email VARCHAR (30),
h_contry VARCHAR (30),
h_city VARCHAR (20),
h_address VARCHAR(100),
h_postalCode INT(5),
h_img1 VARCHAR (100),
h_img2 VARCHAR (100),
h_img3 VARCHAR (100),
h_img4 VARCHAR (100),
h_img5 VARCHAR (100),
h_img6 VARCHAR (100),
h_descriere VARCHAR (2000),
h_logo VARCHAR (100),
PRIMARY KEY (ID_Hotel)
);



CREATE TABLE Facilitati
(
ID_Hotel INT (6) NOT NULL,
Piscina INT(1),
Parcare INT(1),
Lift INT(1),
Restaurant INT(1),
Plaja_Privata INT(1),
SPA INT(1),
Sala_Fitness INT(1),
Sala_Forta INT(1),
Jacuzzi INT(1),
Internet INT(1),
Bar INT (1),
Sauna INT (1),
Foisor INT (1),
Teren_Sport INT (1),
Terasa INT (1),
Gratar INT (1),
FOREIGN KEY (ID_Hotel) REFERENCES Hotels(ID_Hotel)
);



CREATE TABLE Rezervari
(
COD INT (5) AUTO_INCREMENT ,
r_show int (1),
ID_User INT(4)NOT NULL,
ID_Hotel INT(6)NOT NULL,
Start_date DATE,
Edn_date DATE,
NR_Camera INT(4),
TIP_Camere VARCHAR(20),
Price INT(10),
PRIMARY KEY (COD),
INDEX (ID_User),
FOREIGN KEY (ID_User) REFERENCES User_Login(ID_User),
INDEX (ID_Hotel),
FOREIGN KEY (ID_Hotel) REFERENCES Hotels(ID_Hotel)
);

