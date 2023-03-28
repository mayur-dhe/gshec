

CREATE TABLE messages (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(100),
    email varchar(100),
    mobile varchar(20),
    subject varchar(255),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);


CREATE TABLE scholar (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(50),
    address varchar(100),
    city varchar(30),
    state varchar(30),
    country varchar(30),
    worktype varchar(25),
    workname varchar(50),
    areaofwork varchar(100),
    visitfreq varchar(25),
    local_add varchar(100),
    local_inst varchar(50),
    othername varchar(50),
    otheremail varchar(30),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);