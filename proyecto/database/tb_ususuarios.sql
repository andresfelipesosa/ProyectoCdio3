CREATE TABLE tb_usuarios (
    
    id                  INT (20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username            VARCHAR (512) NULL,
    nombres             VARCHAR (512) NULL, 
    apellido_pri        VARCHAR (512) NULL,
    apellido_sec        VARCHAR (512) NULL,
    contrasenia         VARCHAR (512) NULL,
    token               VARCHAR (512) NULL,
    quiz1            INT (10) NULL,
    quiz2              VARCHAR (512) NULL,
    quiz3              VARCHAR (512) NULL,
    quiz4              VARCHAR (512) NULL,
    estado              VARCHAR (255) NULL
);