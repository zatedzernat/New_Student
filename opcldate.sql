CREATE TABLE `opcldate` (
 `opendate` datetime NOT NULL,
 `closedate` datetime NOT NULL,
 `semester` varchar(10) NOT NULL COMMENT 'ex "1/2562"',
 PRIMARY KEY (`semester`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8