

drop database VentasArgentina;

create database VentasArgentina;

/*ÉSTA SENTENCIA ME SOLUCIONÓ UN ERROR AL INTENTAR ACCEDER DESDE EL LARAVEL LA BD*/
/*CREATE USER 'root'@'localhost' IDENTIFIED BY 'rob';
GRANT ALL PRIVILEGES ON ecomerce. * TO 'root'@'localhost';
FLUSH PRIVILEGES;*/
/*HABILITAR USUARIO ADMINISTRADOR luego de haberlo creado con email = admin@admin.com*/
/*UPDATE usuarios
SET
    isAdmin = true,
    validado = true
WHERE
    email = 'admin@admin.com';	*/

use VentasArgentina;

/*CREACION DE TABLA USUARIOS*/
create table users(
	usrId				int auto_increment primary key,
    nombre			varchar(40),
    password			varchar(150),
    isAdmin boolean
);

/*CREAMOS LA TABLA PRODUCTOS*/
create table productos(
	prdId			int auto_increment primary key,
    prdNombre		varchar(40),
    prdDescripcion	varchar(200),
    prdPrecio		float,
    prdStock        int,
    prdEliminado    boolean

);
/*CREACION DE LA TABLA VENTAS*/
create table ventas(
    created_at DATE,
	updated_at date,
	venId			int auto_increment primary key,
    venNombreComprador varchar(15) not null,
    venIdProducto	int,
    venStock      int,
    foreign key (venIdProducto) references productos(prdId)
);
/*CREACION DE LA TABLA COMPRAS*/
create table compras(
    created_at DATE,
	updated_at date,
	comId			int auto_increment primary key,
	comVendedor		varchar(15) not null,
	comIdProducto int,
	comStock     int,
	comPrecio   float,
	infoAdicional    varchar(80),
    foreign key (comIdProducto) references productos(prdId)
);





/*CREACIOS DE TABLA INTERMEDIA VENTAS PRODUCTOS-USUARIOS*/


/*CREACIÓN DE VARIAS MARCAS*/

insert into marcas(marNombre) value('Samsung');
insert into marcas(marNombre) value('Xiaomi');
insert into marcas(marNombre) value('Apple');
insert into marcas(marNombre) value('Oster');
insert into marcas(marNombre) value('Patrick');
insert into marcas(marNombre) value('Quicksilver');
insert into marcas(marNombre) value('Zara');
insert into marcas(marNombre) value('JBL');
insert into marcas(marNombre) value('Adidas');
insert into marcas(marNombre) value('Otras marcas');

/*CREACION DE VARIAS CATEGORIAS*/
insert into categorias(catNombre, catDescripcion, catImagen)
    values('Tecnología', 'Cualquier equipo tecnológico que quieras comprar', 'cateroria_tecnologia.png');
insert into categorias(catNombre, catDescripcion, catImagen)
  values('Vestimenta', 'Cualquier ropa o calzado que quieras comprar', 'cateroria_vestimenta.png');
insert into categorias(catNombre, catDescripcion, catImagen)
    values('Hogar', 'Todo para el hogar', 'otros_01.png'
);
insert into categorias(catNombre, catDescripcion, catImagen)
    values('Otros + Servicios', 'Otros productos mas servicios ofrecidos', 'cateroria_otros.png'
);










