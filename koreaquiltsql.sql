-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- ȣ��Ʈ: localhost
-- ó���� �ð�: 16-12-30 09:04 
-- ���� ����: 5.1.41
-- PHP ����: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- �����ͺ��̽�: `workplus`
--

-- --------------------------------------------------------

--
-- ���̺� ���� `t_member`
--

CREATE TABLE IF NOT EXISTS `t_member` (
  `user_name` varchar(10) NOT NULL COMMENT '�̸�',
  `user_id` varchar(15) NOT NULL COMMENT '���̵�',
  `user_pwd` varchar(20) NOT NULL COMMENT '��й�ȣ',
  `user_eng_name` varchar(30) NOT NULL COMMENT '�����̸�',
  `user_chi_name` varchar(30) NOT NULL COMMENT '�ѹ��̸�',
  `user_email` varchar(30) NOT NULL COMMENT '�̸���',
  `user_emailok` varchar(3) NOT NULL COMMENT '�̸��� Ȯ��',
  `user_phone` varchar(20) NOT NULL COMMENT '�޴��ȣ',
  `user_smsok` varchar(3) NOT NULL COMMENT '���� Ȯ��',
  `user_birth` char(8) NOT NULL COMMENT '����',
  `user_gender` varchar(3) NOT NULL COMMENT '����',
  `user_address` varchar(300) NOT NULL COMMENT '�ּ�',
  `user_regist_day` varchar(20) NOT NULL COMMENT '���Գ�¥',
  `teacher_type` varchar(10) NOT NULL COMMENT '��������',
  `member_type_h` varchar(10) NOT NULL COMMENT 'ȸ������(�ڵ�)',
  `is_able_teaching` varchar(10) NOT NULL COMMENT '���ǰ�������',
  `level` varchar(5) NOT NULL COMMENT 'ȸ������',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=euckr;

--
-- ���̺��� ���� ������ `t_member`
--

INSERT INTO `t_member` (`user_name`, `user_id`, `user_pwd`, `user_eng_name`, `user_chi_name`, `user_email`, `user_emailok`, `user_phone`, `user_smsok`, `user_birth`, `user_gender`, `user_address`, `user_regist_day`, `teacher_type`, `member_type_h`, `is_able_teaching`, `level`) VALUES
('admin', 'admin', '1234', 'admin', 'admin', 'admin@domain.com', 'on', '000-0000-0000', 'on', '1991-11-', 'on', 'seoul', '2016-11-11 (11:11)', 'H or M', 'admin', 'on', '5');
