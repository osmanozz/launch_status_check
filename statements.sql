CREATE DATABASE launch_status_check;
USE launch_status_check;


CREATE TABLE bloemen(
    bloem_code INT NOT NULL AUTO_INCREMENT,
    bloem_naam VARCHAR(255),
    bloem_img BLOB,
    prijs_per_stuk DECIMAL(10,2),
    aanwezig_toaal INT,
    PRIMARY KEY (bloem_code)
);

CREATE TABLE magazijnen(
    magazijn_code INT NOT NULL AUTO_INCREMENT,
    magazijn_naam VARCHAR(255) NOT NULL,
    PRIMARY KEY (magazijn_code)
);

CREATE TABLE voorraad_bloemen(
    magazijn_code INT NOT NULL,
    bloem_code INT NOT NULL,
    aantal int,
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

INSERT INTO `bloemen` (
    `bloem_code`, `bloem_naam`, `bloem_img`, `prijs_per_stuk`, `aanwezig_totaal`) 
VALUES (NULL, 'orkide', NULL, '12', '33'), 
(NULL, 'roos', NULL, '33', '100'),
(NULL, 'boeket', NULL, '13', '212');


INSERT INTO `magazijnen` (
    `magazijn_code`, `magazijn_naam`) 
VALUES (NULL, 'Rotterdam'), 
(NULL, 'Aalsmeer');

