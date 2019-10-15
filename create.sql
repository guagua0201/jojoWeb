DROP TABLE `Animal`;
CREATE TABLE IF NOT EXISTS `Animal` (
	`Id`  INT NOT NULL AUTO_INCREMENT,
	`Name` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`ImagePath` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`C1` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT "" NOT NULL,
	`C2` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT "" NOT NULL,
	`C3` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`C4` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`C5` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`C6` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`C7` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY (`Id`), 
);