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
  `cur` varchar(4) default '0' COMMENT 'หลักสูตร Ex. BIS, IT_N, IT_W, SW',
  `sid` varchar(12) default NULL COMMENT 'รหัสนักศึกษา Ex. 54432131',
  `testno` varchar(12) default NULL COMMENT 'รหัสใบสมัคร Ex. 54251100186',
  `idno` varchar(13) NOT NULL default '0' COMMENT 'เลขที่บัตรประชาชน Ex. 1100400128486',
  `fnameth` varchar(15) default NULL COMMENT 'คำนำหน้า (ไทย) Ex. นางสาว',
  `nameth` varchar(100) default NULL COMMENT 'ชื่อ (ไทย) Ex. สมศรี',
  `lastname_th` varchar(100) default NULL COMMENT 'นามสกุล (ไทย) Ex. ใจดี',
  `fnameen` varchar(15) default NULL COMMENT 'คำนำหน้า (อังกฤษ) Ex. Miss, Mrs., Mr.',
  `nameen` varchar(100) default NULL COMMENT 'ชื่อ (อังกฤษ) Ex. Somsri',
  `lastname_en` varchar(100) default NULL COMMENT 'นามสกุล (อังกฤษ) Ex. Jaidee',
  `sex` varchar(4) default NULL COMMENT 'เพศ Ex. ชาย, หญิง',
  `bloodtype` varchar(5) default NULL COMMENT 'หมู่เลือด Ex. O, B, A, AB',
  `dbirth` char(2) default NULL COMMENT 'วันเกิด Ex. 01',
  `mbirth` char(2) default NULL COMMENT 'เดือนเกิด Ex. 12',
  `ybirth` varchar(4) default NULL COMMENT 'ปีเกิด Ex. 2534',
  `status` varchar(20) default NULL COMMENT 'สถานะ Ex. โสด, สมรส',
  `national` varchar(50) default NULL COMMENT 'เชื้อชาติ Ex. ไทย',
  `origin` varchar(50) default NULL COMMENT 'สัญชาติ Ex. ไทย',
  `religion` varchar(50) default NULL COMMENT 'ศาสนา Ex. พุทธ',
  `note` longtext,
  `address` longtext COMMENT 'ที่อยู่ Ex. 48/786 หมู่ 7 ถนน วงแหวนรอบนอก',
  `add1` varchar(50) default NULL COMMENT 'แขวง/ตำบล Ex. บางบอน',
  `add2` varchar(50) default NULL COMMENT 'เขต/อำเภอ Ex. บางบอน',
  `city` varchar(25) default NULL COMMENT 'จังหวัด Ex. กรุงเทพมหานคร',
  `zipcode` varchar(5) default NULL COMMENT 'รหัสไปรษณีย์ Ex. 10260',
  `tel` varchar(30) default NULL COMMENT 'เบอร์โทรศัพท์ Ex. 024062129',
  `mobile` varchar(20) default NULL COMMENT 'เบอร์มือถือ Ex. 0869006621',
  `email` varchar(40) default NULL COMMENT 'อีเมลล์ Ex.email@hotmail.com',
  `em_address` longtext COMMENT 'ที่อยู่ติดต่อฉุกเฉิน Ex. 8 หมู่ 6 ซ.เอกชัย76 ต.บางบอน อ.บางบอน กทม 10150',
  `contact` varchar(60) default NULL COMMENT 'ชื่อผู้ติดต่อฉุกเฉิน Ex. นางสมใจ ใจดี',
  `em_tel` varchar(30) default NULL COMMENT 'เบอร์โทรกรณีฉุกเฉิน Ex. 0891090822',
  `name_bus` varchar(250) default NULL COMMENT 'ชื่อบริษัท Ex. IBM Thailand',
  `workadd` varchar(256) default NULL COMMENT 'ที่อยู่บริษัท Ex. 128/199 อาคารพญาไทพลาซ่า ชั้น 18 ถ.พญาไท แขวงทุ่งพญาไท เขตราชเทวี กรุงเทพฯ 10400',
  `telwork` varchar(30) default NULL COMMENT 'เบอร์โทรศัพท์บริษัท Ex. 029857462',
  `position` varchar(50) default NULL COMMENT 'ตำแหน่ง Ex. ผู้จัดการ',
  `year_start` varchar(4) default NULL COMMENT 'ปีที่เริ่มงาน Ex. 2555',
  `workexp` varchar(5) default NULL COMMENT 'ประสบการณ์ทำงาน Ex. 1',
  `notework` longtext,
  `graduate` varchar(100) default NULL COMMENT 'วุฒิที่จบ Ex. วท.บ.',
  `year_end` varchar(4) default NULL COMMENT 'ปีที่จบ Ex. 2554',
  `gfrom` varchar(100) default NULL COMMENT 'สถาบันที่สำเร็จการศึกษา Ex. ม.ธรรมศาสตร์',
  `branch` varchar(100) default NULL COMMENT 'สาขาวิชาเอก Ex. เทคโนโลยีสารสนเทศ',
  `type_edu` varchar(100) default NULL COMMENT 'ประเภทสถาบัน Ex. รัฐบาล',
  `gpa` varchar(4) default NULL COMMENT 'เกรดเฉลี่ย Ex. 2.56',
  `note_edu` longtext,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP COMMENT 'เวลา update ล่าสุด Ex. 2011-10-11 11:32:35',
  `register` varchar(1) default 'N' COMMENT 'ลงทะเบียนปฐมนิเทศ Ex. Y, N',
  `questionnaire` int(3) default NULL,
  PRIMARY KEY  (`idno`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620 COMMENT='ระบบกรอกข้อมูลนักศึกษาใหม่ /Sukanda';

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
