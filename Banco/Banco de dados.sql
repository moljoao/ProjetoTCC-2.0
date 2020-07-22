create database if not exists TCC;

use TCC;
/*sempre colocar auto increment para ele ir incrementando automaticamente*/
/*sempre selecionar o banco*/

show tables;

/*sempre colocar auto increment para ele ir incrementando automaticamente*/
/*sempre selecionar o banco*/

show tables;

/*-------------   Nova tabela     ---------------*/

   create table Loja (
   idLoja int primary key auto_increment,
   codLoja int,
   NomeLoja varchar(30) not null unique,
   EnderecoLoja varchar(150) not null
);

/*-------------   Nova tabela     ---------------*/

   create table Funcionario (
idPessoa int primary key auto_increment,
imagem varchar(100) not null,
nome varchar(250) not null,
userName varchar(100) not null unique,
email varchar(250) not null unique,
senha varchar(50) not null, 
cpf varchar(11) not null,
telFixo varchar(10) null,
telCelular varchar(11) not null,
telCelular2 varchar(11) null,
tipoUsuario varchar(30) not null,
endereço varchar(100) not null,
cidade varchar(30) not null,
estado varchar(20) not null,
cep varchar(8) null,
ativo varchar(30) default 'ativo'
);

select * from Funcionario;

   create table Loja_Funcionario(
   idLoja INT(5)UNSIGNED NOT NULL,
   idFuncionario INT(5)UNSIGNED NOT NULL
   );

    create table Comanda_Funcionario(
	idComanda INT(5)UNSIGNED NOT NULL,
	idFuncionario INT(5)UNSIGNED NOT NULL
	);
      

 /*INSERT INTO Loja(id_Loja,codLoja) VALUES( 1,'Numero');
INSERT INTO Funcionario(idFuncionario,imagem) VALUES (1, 'identidade');
INSERT INTO Loja_Funcionario(id_Loja, id_Funcionario) VALUES (1,1);*/


/*-------------   Nova tabela     ---------------*/

    create table Comanda (
	idComanda int primary key auto_increment,
    NomeComanda varchar(250) null,
    codcomanda int,
    DataComanda Date, 
    TotalComanda Float,
    Descricao varchar(100) not null
	);
	
    create table itemcomanda (
    iditemcomanda int primary key auto_increment,
    nome varchar(200),
    preco double
    );
    
    insert into itemcomanda(
    nome,
    preco) values(
    'Crepe Calabresa',
    12.50
    );
    
    
    select * from itemcomanda;
    
    insert into Comanda (
    NomeComanda,
    codcomanda,
    DataComanda,
    TotalComanda,
    Descricao) values (
    'Comanda teste',
    123,
	20010211,
    35.99,
    'Essa comanda foi um teste');
    
    /*-------------   Nova tabela     ---------------*/

	create table Produtos (
	idProduto int primary key auto_increment,
	imagem varchar(50)null,
	nome varchar(250) not null,
	descricao varchar(100) not null,
	preco double,
	tipo int not null, 
	ativo varchar(30) default 'ativo'
	);
    
	create table Comanda_Produto(
	idComanda INT(5)UNSIGNED NOT NULL,
	idProduto INT(5)UNSIGNED NOT NULL
	);
      
     
	 /*-------------   Nova tabela     ---------------*/
     
	create table Cliente (
	idCliente int primary key auto_increment,
    Nome varchar(100) not null,
    Telefone varchar(11) not null,
    Endereço varchar(10) null,
    codcliente int,
    CEP varchar(8) null,
    NumEndereco varchar(8),
    Complemento varchar(100),
    Cidade varchar(50),
    Bairro varchar(50),
    TipoEnd varchar(20),
    RuaAvenida varchar(100)
    );
    
	create table Comanda_Cliente(
	idComanda INT(5)UNSIGNED NOT NULL,
	idCliente INT(5)UNSIGNED NOT NULL
	);
      
     
      /*-------------   Nova tabela     ---------------*/
      
	create table Delivery (
	idDelivery int primary key auto_increment,
    NomeEntregador varchar(250) not null,
    descEntrega varchar(150) not null,
    Datahora date
	);
    
	create table Comanda_Delivery(
	idComanda INT(5)UNSIGNED NOT NULL,
	idDelivery INT(5)UNSIGNED NOT NULL
	);
      
    
    /*-------------   Nova tabela     ---------------*/
    
   	create table Mesa (
	idMesa int primary key auto_increment,
    CodMesa int
	); 
    
    	create table Comanda_Mesa(
		idComanda INT(5)UNSIGNED NOT NULL,
		idMesa INT(5)UNSIGNED NOT NULL
		);
      
    
       /*-------------   Nova tabela     ---------------*/
       
select * from Produtos where tipo = 2 AND ativo = "ativo";


insert into Funcionario (
    imagem,
	nome,
    userName,
    email, 
    senha, 
    cpf, 
    telFixo, 
    telCelular,
    telCelular2,
    tipoUsuario,
    endereço,
    cidade,
    estado,
    cep) values (
    'acai.jpg',
    'Larissa', 
    'Lari', 
    'vitor@hotmail.com', 
    'lari123', 
    '48364340840',
    '971035926',
    '971035926',
    '971035926',
    'administrador',
    'rua via maris',
    'itapevi',
    'sao paulo',
     06683430);
    
    

    
    

    
    