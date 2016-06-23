create database SistemaDeMapas;
use SistemaDeMapas;
create table TipoMapa
	(
			IDTipo int,
			NombreTipo char(30),
			Descripcion varchar(500),
			primary key (IDTipo)
	);

create table Autores
	(
		IDAutor int,
		Nombre char(60),
		FechaNacimiento date,
		Telefono int,
		Direccion char(60),
		primary key (IDAutor)
	);
create table Pais
	(
		IDPais int,
		NombrePais char(30),
		Ubicacion char(30),
		ExtensionTerritorial float,
		primary key (IDPais)
	);
create table Estado
	(
		IDEstado int,
		IDPais int,
		NombreEstado char(30),
		Ubicacion char(30),
		ExtensionTerritorial float,
		primary key (IDEstado),
		FOREIGN key (IDPais) REFERENCES Pais(IDPais)
	);

create table Climas
	(
		IDEstado int,
		TipoDeClima char(30),
		PromedioClimaPrimavera float,
		PromedioClimaVerano float,
		PromedioClimaOtono float,
		PromedioClimaInvierno float,
		TemperaturaAltaRecord float,
		FechaTemperaturaAltaRecord date,
		TemperaturaBajaRecord float,
		FechaTemperaturaBajaRecord date,
		primary key (IDEstado),
		FOREIGN key (IDEstado) REFERENCES Estado(IDEstado)

	);

create table Colindancia
	(
		IDEstado int,
		Norte char(30),
		Noreste char(30),
		Este char(30),
		Sureste char(30),
		Sur char(30),
		Suroeste char(30),
		Oeste char(30),
		Noroeste char(30),
		primary key (IDEstado),
		FOREIGN key (IDEstado) REFERENCES Estado(IDEstado)
	);

create table ActividadesEconomicas
	(
		IDEstado int,
		IngresoAgricultura float,
		IngresoGanaderia float,
		IngresoPesca float,
		IngresoMineria float,
		IngresoTurismo float,
		IngresoComercio float,
		PromedioIngresoMensual float,
		Ingreso2008 float,
		Ingreso2009 float,
		NumeroDeEmpleos int,
		TazaDeCrecimientoAnual float,
		primary key (IDEstado),
		FOREIGN key (IDEstado) REFERENCES Estado(IDEstado)
	);

create table Mapas
	(
		IDMapa int,
		IDEstado int,
		IDAutor int,
		IDTipo int,
		NombreMapa char(30),
		FechaCreacion date,
		primary key (IDMapa),
		FOREIGN KEY (IDEstado) REFERENCES Estado(IDEstado),
		FOREIGN key (IDAutor) REFERENCES Autores(IDAutor),
		FOREIGN key (IDTipo) REFERENCES TipoMapa(IDTipo)
	);

 
use SistemaDeMapas;
insert into TipoMapa values

(1,'Carreteras','Mapa que representa las carreteras que se muestran clasificadas en categurias segun sea su importancia varia.'),
(2,'Ferrocarriles','Mapa itinerario que representa Ia red ferroviaria, las estaciones e infraestructuras ferroviarias de la zona'),
(3,'Husos Horarios','Planisferio que representa los husos horarios de la zona'),
(4,'Orientacion','Mapa que representa elementos topográficos seleccionados con el objeto de poder reafizar una interpretación rápida y sencilla de la propia localización y de otros elementos o iugares significativos.'),
(5,'Geológico','Mapa temático que representa las rocas y estructuras geológicas observables en la superficie terrestre.'),
(6,'Minero','Mapa a gran escala que representa la situación y la extensión de una área de explotación minera en la que se describe tanto sus formas topográficas externas como sus estructuras subterráneas');

insert into Autores values
(1,'Hugo Miramontes','19871011',1251398,'Calle Universidad 1234 Col. IIT'),
(2,'Elizabeth Ramirez','19870601',9876541,'Calle Luna 8432 Col. Casas Grandes'),
(3,'Pancho Pantera','19720903',1234567,'Calle Chocomilk 4321 Col. Quick'),
(4,'Hector Villanueva','19880423',7654321,'Calle Panamericana 9876 Col. Juarez');

insert into Pais values
(1111,'Mexico','19° 13" N 99º 13" O', 1964375),
(1112,'Estados Unidos','38° 00" N 97° 0" O', 9631418),
(1113,'Canada','45° 27" N 75° 42" O', 9984670);


insert into Estado values
(111101,1111,'Chihuahua','25° 38" N 109‘ 07" O',18791),
(111201,1112,'Texas','42° 15“ N 110 17 O',19780),
(111301,1113,'Ontario','92° 13“ N 57‘ 19“ O',23924);


insert into Mapas values

(1,111101,2,3,'Horatios de Chihuahua','20101009'),
(2,111201,1,1,'Carreteras de Texas','20101122'),
(3,111301,4,6,'Minas de Ontario','20080215');

insert into Climas values
(111101,'Seco Templado',10.4,38.8,29.6,0.2,42.9, '200919',-17.3,'20061224'),
(111201,'Desertico',14.8,41.7,30.5,3,45.7,'20100724',-13.3,'20030102'),
(111301,'Humedo abundante lluvia',3.2,27.4,19.7,-19.7,32.6,'20050623',-25.6,'20021219');


insert into Colindancia values
(111101,'Nuevo Mexico','Texas','Coahuila','Coahuila','Durango','Sinaloa','Sonora','Arizona'),
(111201,'Oklahoma','Arkansas','Louisiana','Null','Chihuahua','Chihuahua','Nuevo Mexico','Nuevo Mexico'),
(111301,'Null','Quebec','Quebec','Nueva York','Michigan','Minneota','Manitoba','Manitoba');

insert into ActividadesEconomicas values
(111101,198714.64,215798.78,0.0,15487.98,465795.45,154798.89,4587984.65,123456789.87,321465798.35,528987,2.5),
(111201,12345678.54, 168754165, 0.0, 548794565, 157494666, 123478945, 12463.14,16478941.12, 19784134871.13, 14784313, 4.3),
(111301,12457.12, 154627855, 135431512, 578412.78, 857.55, 5487915645,12467851239, 15478945612.65, 135478641563, 145789512, 3.6);






























