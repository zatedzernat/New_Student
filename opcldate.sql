CREATE TABLE `opcldate` (
 `opendate` date NOT NULL,
 `closedate` date NOT NULL,
 `semester` varchar(10) NOT NULL COMMENT 'ex "1/2562"',
 PRIMARY KEY (`semester`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8