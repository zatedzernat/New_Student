CREATE TABLE `opcldate` (
 `opendate` datetime NOT NULL,
 `closedate` datetime NOT NULL,
 `semester` varchar(10) NOT NULL COMMENT 'ex "1/2562"',
 PRIMARY KEY (`semester`)
);

insert into `opcldate` values(CAST(N'2019-07-22 11:00:00' AS DateTime), CAST(N'2019-07-24 23:00:00' AS DateTime), "1/2562");