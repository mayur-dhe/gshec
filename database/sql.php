

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
    email varchar(100),
    address TEXT,
    city varchar(30),
    state varchar(30),
    country varchar(30),
    work_type varchar(25),
    work_name varchar(50),
    area_of_work TEXT,
    designation varchar(100),
    cv varchar(100),
    profile_link varchar(100),
    permanent_address TEXT,
    phone_no varchar(12),
    type_of_eng TEXT,
    visit_freq varchar(25),
    local_address TEXT,
    local_work varchar(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

CREATE TABLE scholar_recommendation (
    id int NOT NULL AUTO_INCREMENT,
    scholar_id int(10) NOT NULL,
    name varchar(50),
    email varchar(30),
    phone_no varchar(12),
    designation varchar(100),
    affiliation varchar(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);