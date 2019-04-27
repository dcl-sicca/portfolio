#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: technology
#------------------------------------------------------------

CREATE TABLE technology(
        id_technology   Int  Auto_increment  NOT NULL ,
        technology_name Varchar (60) NOT NULL ,
        technology_img  Varchar (60) NOT NULL ,
        technology_alt  Varchar (60) NOT NULL
	,CONSTRAINT technology_PK PRIMARY KEY (id_technology)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: role
#------------------------------------------------------------

CREATE TABLE role(
        id_role     Int  Auto_increment  NOT NULL ,
        role_status Int NOT NULL ,
        role_name   Varchar (60) NOT NULL ,
        role_color  Varchar (50) NOT NULL
	,CONSTRAINT role_PK PRIMARY KEY (id_role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        id_user         Int  Auto_increment  NOT NULL ,
        user_login      Varchar (60) NOT NULL ,
        user_password   Varchar (255) NOT NULL ,
        user_name       Varchar (60) ,
        user_firstname  Varchar (60) ,
        user_avatar     Varchar (60) ,
        user_pseudo     Varchar (60) NOT NULL ,
        user_registered Datetime NOT NULL ,
        user_email      Varchar (60) NOT NULL ,
        id_role         Int NOT NULL
	,CONSTRAINT users_AK UNIQUE (user_email)
	,CONSTRAINT users_PK PRIMARY KEY (id_user)

	,CONSTRAINT users_role_FK FOREIGN KEY (id_role) REFERENCES role(id_role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: credentials
#------------------------------------------------------------

CREATE TABLE credentials(
        id_credentials          Int  Auto_increment  NOT NULL ,
        credentials_name        Varchar (60) NOT NULL ,
        credentials_year        Year ,
        credentials_snap        Longblob ,
        credentials_description Longtext ,
        credentials_url         Varchar (60) ,
        credentials_urltext     Varchar (60) ,
        credentials_registered  Datetime NOT NULL ,
        credentials_position    Int NOT NULL ,
        id_user                 Int NOT NULL
	,CONSTRAINT credentials_AK UNIQUE (credentials_position)
	,CONSTRAINT credentials_PK PRIMARY KEY (id_credentials)

	,CONSTRAINT credentials_users_FK FOREIGN KEY (id_user) REFERENCES users(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: have
#------------------------------------------------------------

CREATE TABLE have(
        id_technology  Int NOT NULL ,
        id_credentials Int NOT NULL
	,CONSTRAINT have_PK PRIMARY KEY (id_technology,id_credentials)

	,CONSTRAINT have_technology_FK FOREIGN KEY (id_technology) REFERENCES technology(id_technology)
	,CONSTRAINT have_credentials0_FK FOREIGN KEY (id_credentials) REFERENCES credentials(id_credentials)
)ENGINE=InnoDB;

