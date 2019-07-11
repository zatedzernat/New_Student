# MySQL-Front 5.0  (Build 1.0)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;


# Host: proxy-m3.sit.kmutt.ac.th    Database: IT_Curriculum
# ------------------------------------------------------
# Server version 5.0.26

#
# Table structure for table mscregis
#

DROP TABLE IF EXISTS `mscregis`;
CREATE TABLE `mscregis` (
  `cur` varchar(4) default '0' COMMENT '��ѡ�ٵ� Ex. BIS, IT_N, IT_W, SW',
  `sid` varchar(12) default NULL COMMENT '���ʹѡ�֡�� Ex. 54432131',
  `testno` varchar(12) default NULL COMMENT '�������Ѥ� Ex. 54251100186',
  `idno` varchar(13) NOT NULL default '0' COMMENT '�Ţ���ѵû�ЪҪ� Ex. 1100400128486',
  `fnameth` varchar(15) default NULL COMMENT '�ӹ�˹�� (��) Ex. �ҧ���',
  `nameth` varchar(100) default NULL COMMENT '���� (��) Ex. �����',
  `lastname_th` varchar(100) default NULL COMMENT '���ʡ�� (��) Ex. 㨴�',
  `fnameen` varchar(15) default NULL COMMENT '�ӹ�˹�� (�ѧ���) Ex. Miss, Mrs., Mr.',
  `nameen` varchar(100) default NULL COMMENT '���� (�ѧ���) Ex. Somsri',
  `lastname_en` varchar(100) default NULL COMMENT '���ʡ�� (�ѧ���) Ex. Jaidee',
  `sex` varchar(4) default NULL COMMENT '�� Ex. ���, ˭ԧ',
  `bloodtype` varchar(5) default NULL COMMENT '�������ʹ Ex. O, B, A, AB',
  `dbirth` char(2) default NULL COMMENT '�ѹ�Դ Ex. 01',
  `mbirth` char(2) default NULL COMMENT '��͹�Դ Ex. 12',
  `ybirth` varchar(4) default NULL COMMENT '���Դ Ex. 2534',
  `status` varchar(20) default NULL COMMENT 'ʶҹ� Ex. �ʴ, ����',
  `national` varchar(50) default NULL COMMENT '���ͪҵ� Ex. ��',
  `origin` varchar(50) default NULL COMMENT '�ѭ�ҵ� Ex. ��',
  `religion` varchar(50) default NULL COMMENT '��ʹ� Ex. �ط�',
  `note` longtext,
  `address` longtext COMMENT '������� Ex. 48/786 ���� 7 ��� ǧ��ǹ�ͺ�͡',
  `add1` varchar(50) default NULL COMMENT '�ǧ/�Ӻ� Ex. �ҧ�͹',
  `add2` varchar(50) default NULL COMMENT 'ࢵ/����� Ex. �ҧ�͹',
  `city` varchar(25) default NULL COMMENT '�ѧ��Ѵ Ex. ��ا෾��ҹ��',
  `zipcode` varchar(5) default NULL COMMENT '������ɳ��� Ex. 10260',
  `tel` varchar(30) default NULL COMMENT '�������Ѿ�� Ex. 024062129',
  `mobile` varchar(20) default NULL COMMENT '������Ͷ�� Ex. 0869006621',
  `email` varchar(40) default NULL COMMENT '������� Ex.email@hotmail.com',
  `em_address` longtext COMMENT '�������Դ��ͩء�Թ Ex. 8 ���� 6 �.�͡���76 �.�ҧ�͹ �.�ҧ�͹ ��� 10150',
  `contact` varchar(60) default NULL COMMENT '���ͼ��Դ��ͩء�Թ Ex. �ҧ��� 㨴�',
  `em_tel` varchar(30) default NULL COMMENT '�����áóթء�Թ Ex. 0891090822',
  `name_bus` varchar(250) default NULL COMMENT '���ͺ���ѷ Ex. IBM Thailand',
  `workadd` varchar(256) default NULL COMMENT '����������ѷ Ex. 128/199 �Ҥ�þ��䷾�ҫ�� ��� 18 �.���� �ǧ��觾��� ࢵ�Ҫ��� ��ا෾� 10400',
  `telwork` varchar(30) default NULL COMMENT '�������Ѿ�����ѷ Ex. 029857462',
  `position` varchar(50) default NULL COMMENT '���˹� Ex. ���Ѵ���',
  `year_start` varchar(4) default NULL COMMENT '�շ��������ҹ Ex. 2555',
  `workexp` varchar(5) default NULL COMMENT '���ʺ��ó�ӧҹ Ex. 1',
  `notework` longtext,
  `graduate` varchar(100) default NULL COMMENT '�زԷ�診 Ex. Ƿ.�.',
  `year_end` varchar(4) default NULL COMMENT '�շ�診 Ex. 2554',
  `gfrom` varchar(100) default NULL COMMENT 'ʶҺѹ�������稡���֡�� Ex. �.������ʵ��',
  `branch` varchar(100) default NULL COMMENT '�Ң��Ԫ��͡ Ex. ෤��������ʹ��',
  `type_edu` varchar(100) default NULL COMMENT '������ʶҺѹ Ex. �Ѱ���',
  `gpa` varchar(4) default NULL COMMENT '�ô����� Ex. 2.56',
  `note_edu` longtext,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP COMMENT '���� update ����ش Ex. 2011-10-11 11:32:35',
  `register` varchar(1) default 'N' COMMENT 'ŧ����¹������� Ex. Y, N',
  `questionnaire` int(3) default NULL,
  PRIMARY KEY  (`idno`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620 COMMENT='�к���͡�����Źѡ�֡������ /Sukanda';

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
