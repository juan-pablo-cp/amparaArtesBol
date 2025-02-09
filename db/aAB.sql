-- Persona ( ci, nom, ap_pat, sexo, fec_nac, pasw, email, status, token, telf )
-- Cliente ( ci_client, ciudad, zona, calle )
-- Artesano ( ci_art, espec, admin )

CREATE TABLE Persona (
    ci INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    ap_pat VARCHAR(50),
    sexo CHAR(1),
    fec_nac DATE,
    pasw CHAR(70),
    email VARCHAR(50) NOT NULL,
    status ENUM('si', 'no') DEFAULT 'no',
    token CHAR(4),
    telf VARCHAR(15)
);
ALTER TABLE Persona AUTO_INCREMENT = 1000000;

CREATE TABLE Cliente (
    ci_client INT PRIMARY KEY,
    ciudad VARCHAR(50),
    zona VARCHAR(50),
    calle VARCHAR(50),
    FOREIGN KEY (ci_client) REFERENCES Persona(ci)
);

CREATE TABLE Artesano (
    ci_art INT PRIMARY KEY,
    espec VARCHAR(50),
    admin ENUM('si', 'no') DEFAULT 'no',
    FOREIGN KEY (ci_art) REFERENCES Persona(ci)
);