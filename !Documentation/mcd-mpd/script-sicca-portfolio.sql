#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: status
#------------------------------------------------------------

CREATE TABLE status(
        id_status     Int  Auto_increment  NOT NULL ,
        status_status Varchar (50) NOT NULL ,
        editor_status Varchar (50) NOT NULL ,
        color_status  Varchar (50) NOT NULL
	,CONSTRAINT status_PK PRIMARY KEY (id_status)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        id_users       Int  Auto_increment  NOT NULL ,
        login_users    Varchar (50) NOT NULL ,
        pass_users     Varchar (50) NOT NULL ,
        name_users     Varchar (50) NOT NULL ,
        email_users    Varchar (50) NOT NULL ,
        avatar_users   Varchar (50) NOT NULL ,
        username_users Varchar (50) NOT NULL ,
        id_status      Int NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (id_users)

	,CONSTRAINT users_status_FK FOREIGN KEY (id_status) REFERENCES status(id_status)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: credentials
#------------------------------------------------------------

CREATE TABLE credentials(
        id_credentials           Int  Auto_increment  NOT NULL ,
        name_credentials         Varchar (50) NOT NULL ,
        year_credentials         Date NOT NULL ,
        snap_credentials         Varchar (50) NOT NULL ,
        description_credentials  Varchar (200) NOT NULL ,
        url_credentials          Varchar (50) NOT NULL ,
        txturl_credentials       Varchar (50) NOT NULL ,
        dataposition_credentials Varchar (50) NOT NULL ,
        id_users                 Int NOT NULL
	,CONSTRAINT credentials_PK PRIMARY KEY (id_credentials)

	,CONSTRAINT credentials_users_FK FOREIGN KEY (id_users) REFERENCES users(id_users)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: technology
#------------------------------------------------------------

CREATE TABLE technology(
        id_technology         Int  Auto_increment  NOT NULL ,
        technology_technology Varchar (50) NOT NULL
	,CONSTRAINT technology_PK PRIMARY KEY (id_technology)
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

