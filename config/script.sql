CREATE TABLE role(
    id int PRIMARY KEY AUTO_INCREMENT,
    name varchar (20) NOT NULL
    );
CREATE TABLE users(
    id int PRIMARY KEY AUTO_INCREMENT,
    name varchar (50) NOT NULL,
    email varchar (100) NOT NULL,
    user_name varchar (50) NOT NULL UNIQUE,
    passe_word varchar (10) NOT NULL,
    role_id int ,
    FOREIGN KEY (role_id) REFERENCES role(id)
    );

CREATE TABLE blog(
    id int PRIMARY KEY AUTO_INCREMENT,
    titre varchar (20) NOT NULL,
    description varchar (2000),
    users_id int ,
    FOREIGN KEY (users_id) REFERENCES users(id)
    );

CREATE TABLE categorie(
    id int PRIMARY KEY AUTO_INCREMENT,
    name varchar (20) NOT NULL,
    description varchar (2000),
    users_id int ,
    FOREIGN KEY (users_id) REFERENCES users(id)
    
    );

CREATE TABLE service(
    id int PRIMARY KEY AUTO_INCREMENT,
    titre varchar (20) NOT NULL,
    description varchar (2000),
    categorie_id int ,
    FOREIGN KEY (categorie_id) REFERENCES categorie_id(id),
    users_id int ,
    FOREIGN KEY (users_id) REFERENCES users(id)
    );

CREATE TABLE projet(
    id int PRIMARY KEY AUTO_INCREMENT,
    titre varchar (20) NOT NULL,
    description varchar (2000),
    statu varchar (20) NOT NULL,
    users_id int ,
    FOREIGN KEY (users_id) REFERENCES users(id),
    service_id int ,
    FOREIGN KEY (service_id) REFERENCES service(id)
    );


