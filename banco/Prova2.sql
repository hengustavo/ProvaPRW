
Drop database if exists fluxo_caixa;

Create  database if not exists fluxo_caixa;

use fluxo_caixa;

CREATE TABLE fluxo_caixa
(
    id		INTEGER	    NOT NULL AUTO_INCREMENT,
    data 	DATE		NOT NULL,
    tipo	VARCHAR(10)	NOT NULL,
    valor	DECIMAL(10,2)	NOT NULL,
    historico	VARCHAR(150)	NOT NULL,
    cheque	VARCHAR(3)	NOT NULL,
    PRIMARY KEY	(id)
);