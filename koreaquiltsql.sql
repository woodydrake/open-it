-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- 호스트: localhost
-- 처리한 시간: 16-12-30 09:04 
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
  `teacher_type` varchar(10) NOT NULL COMMENT '강사유형',
  `member_type_h` varchar(10) NOT NULL COMMENT '회원구분(핸드)',
  `is_able_teaching` varchar(10) NOT NULL COMMENT '강의가능유무',
  `level` varchar(5) NOT NULL COMMENT '회원레벨',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=euckr;

--
-- 테이블의 덤프 데이터 `t_member`
--

INSERT INTO `t_member` (`user_name`, `user_id`, `user_pwd`, `user_eng_name`, `user_chi_name`, `user_email`, `user_emailok`, `user_phone`, `user_smsok`, `user_birth`, `user_gender`, `user_address`, `user_regist_day`, `teacher_type`, `member_type_h`, `is_able_teaching`, `level`) VALUES
('admin', 'admin', '1234', 'admin', 'admin', 'admin@domain.com', 'on', '000-0000-0000', 'on', '1991-11-', 'on', 'seoul', '2016-11-11 (11:11)', 'H or M', 'admin', 'on', '5');
