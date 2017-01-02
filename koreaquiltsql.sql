-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- 호스트: localhost
-- 처리한 시간: 17-01-02 18:53 
-- 서버 버전: 5.1.41
-- PHP 버전: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 데이터베이스: `workplus`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `t_member`
--

CREATE TABLE IF NOT EXISTS `t_member` (
  `user_name` varchar(10) NOT NULL COMMENT '이름',
  `user_id` varchar(15) NOT NULL COMMENT '아이디',
  `user_pwd` varchar(20) NOT NULL COMMENT '비밀번호',
  `user_eng_name` varchar(30) NOT NULL COMMENT '영문이름',
  `user_chi_name` varchar(30) NOT NULL COMMENT '한문이름',
  `user_email` varchar(30) NOT NULL COMMENT '이메일',
  `user_emailok` varchar(3) NOT NULL COMMENT '이메일 확인',
  `user_phone` varchar(20) NOT NULL COMMENT '휴대번호',
  `user_smsok` varchar(3) NOT NULL COMMENT '문자 확인',
  `user_birth` char(8) NOT NULL COMMENT '생일',
  `user_gender` varchar(3) NOT NULL COMMENT '성별',
  `user_address` varchar(300) NOT NULL COMMENT '주소',
  `user_regist_day` varchar(20) NOT NULL COMMENT '가입날짜',
  `use_yn` varchar(2) NOT NULL COMMENT '사용여부',
  `teacher_type` varchar(10) NOT NULL COMMENT '강사유형',
  `member_type_m` varchar(10) NOT NULL COMMENT '회원구분(머신)',
  `member_type_h` varchar(10) NOT NULL COMMENT '회원구분(핸드)',
  `member_type_h_nm` varchar(20) NOT NULL COMMENT '머신퀄트(수업이름)',
  `member_type_h_explain_nm` varchar(20) NOT NULL COMMENT '머신퀄트(수업설명)',
  `member_type_m_nm` varchar(20) NOT NULL COMMENT '핸드퀄트(수업이름)',
  `member_type_m_explain_nm` varchar(20) NOT NULL COMMENT '핸드퀄트(수업설명)',
  `is_able_teaching` varchar(10) NOT NULL COMMENT '강의가능유무',
  `level` varchar(5) NOT NULL COMMENT '회원레벨',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=euckr;

--
-- 테이블의 덤프 데이터 `t_member`
--

INSERT INTO `t_member` (`user_name`, `user_id`, `user_pwd`, `user_eng_name`, `user_chi_name`, `user_email`, `user_emailok`, `user_phone`, `user_smsok`, `user_birth`, `user_gender`, `user_address`, `user_regist_day`, `use_yn`, `teacher_type`, `member_type_m`, `member_type_h`, `member_type_h_nm`, `member_type_h_explain_nm`, `member_type_m_nm`, `member_type_m_explain_nm`, `is_able_teaching`, `level`) VALUES
('admin', 'admin', '1234', 'admin', 'admin', 'admin@domain.com', '-', '000-0000-0000', '-', '19910410', '-', 'seoul', '2016-11-11 (11:11)', '-', '-', '-', '-', '-', '-', '-', '-', 'Y', '5'),
('김용우', 'woodydrake', 'a1s2d3', 'yongwoo kim', '金用雨', 'woodydrake@hanmail.net', 'Y', '010-8006-9068', 'Y', '19910410', 'M', '158-673-경기도 하남시 덕풍동KCC스위첸 아파트', '2016-12-02 (16:08)', 'N', '', '', '', '', '', '', '', '', '2'),
('김준엽', 'junjun41', '1234', 'kimjunyeup', '金俊燁', 'junjun11@naver.com', 'N', '010-4581-5234', 'N', 'ex)19800', 'M', '102-412-인천 서구103-1402', '2017-01-02 (16:11)', 'Y', '', '', '', '', '', '', '', '', '2'),
('조지숙', 'zozi16', '4321', 'jo ji suk', '調地淑', 'zozi@hanmail.net', 'Y', '010-5487-9852', 'N', '19960805', 'F', '158-673-경기도 수원시103-1001', '2017-01-02 (16:13)', 'N', '', '', '', '', '', '', '', '', '1'),
('안수빈', 'ananaa', '1919', 'annsue', '安水貧', 'bins102@naver.com', 'N', '010-5474-4846', 'N', '19961105', 'F', '123-516-서울특별시 서초구방배동', '2017-01-02 (16:24)', 'Y', '', '', '', '', '', '', '', '', '1'),
('이호언', 'hounjangdam', '1010', 'hu', '李護言', 'leeho102@nate.com', 'Y', '010-9821-9151', 'Y', '19931123', 'M', '156-844-경기도 안산시103번지', '2017-01-02 (16:26)', 'Y', '', '', '', '', '', '', '', '', '2'),
('주동석', 'juddong123', '189', 'judong', '主洞石', 'juddong132@naver.com', 'N', '010-2164-8732', 'N', '19961215', 'M', '156-844-경기도 안산시 111번지', '2017-01-02 (16:27)', 'Y', '', '', '', '', '', '', '', '', '1'),
('김태민', 'taemin11', '1919', 'taemin', '金太民', 'taemin11@naver.com', 'Y', '010-4567-7975', 'N', '19961230', 'M', '156-844-서울특별시 노원구상계동', '2016-05-02 (16:51)', 'Y', '', '', '', '', '', '', '', '', '1'),
('김용재', 'yongyong1313', '1876', 'yongjae', '金容材', 'yongyong1313@hanmail.net', 'Y', '010-1248-837', 'N', '19940506', 'M', '102-401-인천 부평구101번지', '2016-01-02 (16:52)', 'Y', '', '', '', '', '', '', '', '', '1'),
('정진리', 'leelee3131', '9876', 'jungjinlee', '政進理', 'leejin10@gmail.com', 'N', '010-5471-4597', 'N', '19960203', 'M', '156-844-서울특별시 송파구방이동', '2017-01-02 (16:54)', 'Y', '', '', '', '', '', '', '', '', '1'),
('이지훈', 'hooni', '4567', 'leejihoon', '李地勳', 'jihoonzang@nate.com', 'Y', '010-1234-4567', 'N', '19960111', 'M', '518-973-경기도 수원시102번지', '2017-01-02 (16:56)', 'Y', '', '', '', '', '', '', '', '', '1'),
('공연경', 'kongy', '1908', 'kong', '工硏經', 'kong123@naver.com', 'N', '010-7894-5431', 'N', '19981112', 'F', '518-973-서울특별시 강남구대치동', '2017-01-02 (16:57)', 'Y', '', '', '', '', '', '', '', '', '1'),
('김동규', 'donggu', '2456', 'donggyu', '洞圭', 'dongdong@hanmail.net', 'Y', '010-8192-4915', 'Y', '19961003', 'M', '891-234-경상북도 포항시829번지', '2017-01-02 (16:58)', 'Y', '', '', '', '', '', '', '', '', '1'),
('남경민', 'nammin', '171615', 'nam gyoung min', '南經民', 'nam111@naver.com', 'N', '010-4215-4847', 'Y', '19930708', 'M', '124-151-경상남도 진주시911번지', '2016-12-02 (16:59)', 'Y', '', '', '', '', '', '', '', '', '1'),
('이춘호', 'cucutrain', '2345', 'lee chun ho', '李春護', 'chono@kku.ac.kr', 'Y', '010-9251-8341', 'N', '19971111', 'M', '102-401-서울시 송파구 오금동', '2017-01-02 (17:01)', 'Y', '', '', '', '', '', '', '', '', '1');
