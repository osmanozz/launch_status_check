CREATE DATABASE launch_status_check;
USE launch_status_check;


CREATE TABLE bloemen(
    bloem_code INT NOT NULL AUTO_INCREMENT,
    bloem_naam VARCHAR(255),
    bloem_img BLOB,
    PRIMARY KEY (bloem_code)
);

CREATE TABLE magazijnen(
    magazijn_code INT NOT NULL AUTO_INCREMENT,
    magazijn_naam VARCHAR(255) NOT NULL,
    bloem_code INT,
    PRIMARY KEY (magazijn_code),
);

CREATE TABLE voorraad(
    magazijn_code INT NOT NULL,
    bloem_code INT NOT NULL,
    FOREIGN KEY (magazijn_code) REFERENCES magazijnen(magazijn_code) ON DELETE CASCADE,
    FOREIGN KEY (bloem_code) REFERENCES bloemen(bloem_code) ON DELETE CASCADE
);

CREATE TABLE medewerker(
    medewerker_code INT NOT NULL AUTO_INCREMENT,
    medewerker_naam VARCHAR(255),
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (medewerker_code)
);