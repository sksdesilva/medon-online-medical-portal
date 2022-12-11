CREATE TABLE patient_info(
NIC varchar(11) PRIMARY KEY,
F_NAME varchar(11),
D_O_B varchar(12),
GENDER varchar(7),
P_ADDRESS varchar(100),
PROVINCE varchar(15),
CON_NUMBER varchar(15),
M_STATE varchar(10),
PASI_ILLENESS varchar(500),
BLOOD_TYPE varchar(10),
Allergy varchar(10),
CON_EXPLAIN varchar(500),
CURRET_MED varchar(10),
DES_OF_MED varchar(200),
EMAIL varchar(50) UNIQUE,
PASSWORD varchar(50),
Kidney_Failure varchar(50),
Liver_failure  varchar(50)
);

CREATE TABLE doc_reg(
    reg_no int(10) PRIMARY KEY,
    dname varchar(100),
    name_with_inti varchar(100),
    frequent_name varchar(100),
    address	varchar(200),
    age	varchar(100),
    gender	varchar(100)
);

CREATE TABLE amb_f_n(
    ID int(20) PRIMARY KEY,
    first_name	varchar(100),
    second_name	varchar(100),
    date_and_time varchar(100),
    E_mail	varchar(100),
    phone_number	varchar(100),
    SS_number	varchar(100),
    addresss	varchar(100),
    gender	varchar(100),
    D_T	varchar(100),
    textt	varchar(100),
    conditionn	varchar(100),	
    reson	varchar(100),
    destination_hos	varchar(100)
);

CREATE TABLE admin(
    user_name varchar(100) PRIMARY KEY,
    passwordd varchar(100)
);

CREATE TABLE aprove_doc(
    doc_id int(10),
    specilization varchar(100),
    on_arachchi varchar(100),
    on_hikkaduwa varchar(100),
    voice_call	varchar(100),
    video_call	varchar(100),
    home_vist	varchar(100),
    fee	varchar(10),
    ap_status varchar(100),
    ADD CONSTRAINT PK1 PRIMARY KEY(doc_id,specilization)
);

CREATE TABLE doc_app(
    email varchar(100) PRIMARY KEY,
    doctor varchar(100),
    speacilization	varchar(100),
    hospital	varchar(100),
    datee	varchar(100),
    timee	varchar(100),
);

CREATE TABLE doc_approve(
    doc_id int(10),
    status varchar(10),
    ADD CONSTRAINT PK1 PRIMARY KEY(doc_id,status)
);

CREATE TABLE `medon`.`doc_availability` ( `doc_reg_num` VARCHAR(6) NOT NULL , `date` VARCHAR(12) NOT NULL , `Availble_time` VARCHAR(6) NOT NULL , `time_slot` VARCHAR(7) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`time_slot`)) ENGINE = InnoDB;
