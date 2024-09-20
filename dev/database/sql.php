
CREATE TABLE activities (
    id int(11) NOT NULL,
    type varchar(10) DEFAULT NULL,
    category varchar(10) DEFAULT NULL,
    title varchar(100) DEFAULT NULL,
    content varchar(500) DEFAULT NULL,
    page_template_id int(10) DEFAULT NULL,
    frm_date date DEFAULT NULL,
    to_date date DEFAULT NULL,
    PRIMARY KEY (id)
);

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
    name varchar(255),
    email varchar(255),
    address TEXT,
    city varchar(255),
    state varchar(100),
    country varchar(30),
    work_type varchar(255),
    work_name varchar(255),
    area_of_work TEXT,
    designation varchar(255),
    cv varchar(255),
    profile_link varchar(255),
    permanent_address TEXT,
    phone_no varchar(12),
    type_of_eng TEXT,
    visit_freq varchar(255),
    local_address TEXT,
    local_work varchar(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status BOOLEAN DEFAULT 1,
    PRIMARY KEY (id)
);

CREATE TABLE scholar_recommendation (
    id int NOT NULL AUTO_INCREMENT,
    scholar_id int(10) NOT NULL,
    name varchar(255),
    email varchar(255),
    phone_no varchar(12),
    designation varchar(255),
    affiliation varchar(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

CREATE TABLE token (
    id INT AUTO_INCREMENT PRIMARY KEY,
    token TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status BOOLEAN DEFAULT 1
);



show enrollment list 
http://localhost/dhe-fe/show-results.php?token=78a0f25a2b1d995ce15ab3d8e955d39737dccb286515b8f35a1794e447eab0ab