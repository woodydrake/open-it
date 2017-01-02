-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- ȣ��Ʈ: localhost
-- ó���� �ð�: 17-01-02 18:53 
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
  `use_yn` varchar(2) NOT NULL COMMENT '��뿩��',
  `teacher_type` varchar(10) NOT NULL COMMENT '��������',
  `member_type_m` varchar(10) NOT NULL COMMENT 'ȸ������(�ӽ�)',
  `member_type_h` varchar(10) NOT NULL COMMENT 'ȸ������(�ڵ�)',
  `member_type_h_nm` varchar(20) NOT NULL COMMENT '�ӽ���Ʈ(�����̸�)',
  `member_type_h_explain_nm` varchar(20) NOT NULL COMMENT '�ӽ���Ʈ(��������)',
  `member_type_m_nm` varchar(20) NOT NULL COMMENT '�ڵ���Ʈ(�����̸�)',
  `member_type_m_explain_nm` varchar(20) NOT NULL COMMENT '�ڵ���Ʈ(��������)',
  `is_able_teaching` varchar(10) NOT NULL COMMENT '���ǰ�������',
  `level` varchar(5) NOT NULL COMMENT 'ȸ������',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=euckr;

--
-- ���̺��� ���� ������ `t_member`
--

INSERT INTO `t_member` (`user_name`, `user_id`, `user_pwd`, `user_eng_name`, `user_chi_name`, `user_email`, `user_emailok`, `user_phone`, `user_smsok`, `user_birth`, `user_gender`, `user_address`, `user_regist_day`, `use_yn`, `teacher_type`, `member_type_m`, `member_type_h`, `member_type_h_nm`, `member_type_h_explain_nm`, `member_type_m_nm`, `member_type_m_explain_nm`, `is_able_teaching`, `level`) VALUES
('admin', 'admin', '1234', 'admin', 'admin', 'admin@domain.com', '-', '000-0000-0000', '-', '19910410', '-', 'seoul', '2016-11-11 (11:11)', '-', '-', '-', '-', '-', '-', '-', '-', 'Y', '5'),
('����', 'woodydrake', 'a1s2d3', 'yongwoo kim', '������', 'woodydrake@hanmail.net', 'Y', '010-8006-9068', 'Y', '19910410', 'M', '158-673-��⵵ �ϳ��� ��ǳ��KCC����þ ����Ʈ', '2016-12-02 (16:08)', 'N', '', '', '', '', '', '', '', '', '2'),
('���ؿ�', 'junjun41', '1234', 'kimjunyeup', '�����', 'junjun11@naver.com', 'N', '010-4581-5234', 'N', 'ex)19800', 'M', '102-412-��õ ����103-1402', '2017-01-02 (16:11)', 'Y', '', '', '', '', '', '', '', '', '2'),
('������', 'zozi16', '4321', 'jo ji suk', '�����', 'zozi@hanmail.net', 'Y', '010-5487-9852', 'N', '19960805', 'F', '158-673-��⵵ ������103-1001', '2017-01-02 (16:13)', 'N', '', '', '', '', '', '', '', '', '1'),
('�ȼ���', 'ananaa', '1919', 'annsue', '���޸', 'bins102@naver.com', 'N', '010-5474-4846', 'N', '19961105', 'F', '123-516-����Ư���� ���ʱ���赿', '2017-01-02 (16:24)', 'Y', '', '', '', '', '', '', '', '', '1'),
('��ȣ��', 'hounjangdam', '1010', 'hu', '�����', 'leeho102@nate.com', 'Y', '010-9821-9151', 'Y', '19931123', 'M', '156-844-��⵵ �Ȼ��103����', '2017-01-02 (16:26)', 'Y', '', '', '', '', '', '', '', '', '2'),
('�ֵ���', 'juddong123', '189', 'judong', '����', 'juddong132@naver.com', 'N', '010-2164-8732', 'N', '19961215', 'M', '156-844-��⵵ �Ȼ�� 111����', '2017-01-02 (16:27)', 'Y', '', '', '', '', '', '', '', '', '1'),
('���¹�', 'taemin11', '1919', 'taemin', '������', 'taemin11@naver.com', 'Y', '010-4567-7975', 'N', '19961230', 'M', '156-844-����Ư���� �������赿', '2016-05-02 (16:51)', 'Y', '', '', '', '', '', '', '', '', '1'),
('�����', 'yongyong1313', '1876', 'yongjae', '����', 'yongyong1313@hanmail.net', 'Y', '010-1248-837', 'N', '19940506', 'M', '102-401-��õ ����101����', '2016-01-02 (16:52)', 'Y', '', '', '', '', '', '', '', '', '1'),
('������', 'leelee3131', '9876', 'jungjinlee', '������', 'leejin10@gmail.com', 'N', '010-5471-4597', 'N', '19960203', 'M', '156-844-����Ư���� ���ı����̵�', '2017-01-02 (16:54)', 'Y', '', '', '', '', '', '', '', '', '1'),
('������', 'hooni', '4567', 'leejihoon', '����', 'jihoonzang@nate.com', 'Y', '010-1234-4567', 'N', '19960111', 'M', '518-973-��⵵ ������102����', '2017-01-02 (16:56)', 'Y', '', '', '', '', '', '', '', '', '1'),
('������', 'kongy', '1908', 'kong', '������', 'kong123@naver.com', 'N', '010-7894-5431', 'N', '19981112', 'F', '518-973-����Ư���� ��������ġ��', '2017-01-02 (16:57)', 'Y', '', '', '', '', '', '', '', '', '1'),
('�赿��', 'donggu', '2456', 'donggyu', '��Ф', 'dongdong@hanmail.net', 'Y', '010-8192-4915', 'Y', '19961003', 'M', '891-234-���ϵ� ���׽�829����', '2017-01-02 (16:58)', 'Y', '', '', '', '', '', '', '', '', '1'),
('�����', 'nammin', '171615', 'nam gyoung min', '������', 'nam111@naver.com', 'N', '010-4215-4847', 'Y', '19930708', 'M', '124-151-��󳲵� ���ֽ�911����', '2016-12-02 (16:59)', 'Y', '', '', '', '', '', '', '', '', '1'),
('����ȣ', 'cucutrain', '2345', 'lee chun ho', '�����', 'chono@kku.ac.kr', 'Y', '010-9251-8341', 'N', '19971111', 'M', '102-401-����� ���ı� ���ݵ�', '2017-01-02 (17:01)', 'Y', '', '', '', '', '', '', '', '', '1');
