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

CREATE TABLE `medon`.`doc_availability` ( `doc_reg_num` VARCHAR(6) NOT NULL , `date` VARCHAR(12) NOT NULL , `Availble_time` VARCHAR(6) NOT NULL , `time_slot` VARCHAR(7) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`time_slot`)) ENGINE = InnoDB;
