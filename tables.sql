CREATE TABLE autor (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    cpf CHAR(11) NOT NULL,
    primary key (id)
);

CREATE TABLE cliente (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    cpf CHAR(11) NOT NULL,
    primary key (id)
);

CREATE TABLE manga (
    cod INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    autor INT NOT NULL,
    primary key (cod),
    foreign key (autor)
        references autor(id)
);

CREATE TABLE cliente_manga (
    cliente INT NOT NULL,
    manga INT NOT NULL,
    primary key (cliente, manga),
    foreign key (cliente)
        references cliente(id),
    foreign key (manga)
        references manga(cod)
);

