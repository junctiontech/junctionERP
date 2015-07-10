-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2015 at 03:03 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
`department_id` int(11) NOT NULL COMMENT 'department id is a auto increment and primary key for department table',
  `organization_id` int(11) NOT NULL COMMENT 'organization id is a auto increment and primary key for department table',
  `department_name` varchar(250) DEFAULT NULL COMMENT 'department name for  organizations'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='Table department for organization`s employee';

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `organization_id`, `department_name`) VALUES
(4, 3, 'Human Resorce'),
(5, 3, 'technical'),
(6, 3, 'developer'),
(7, 3, 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
`designation_id` int(11) NOT NULL COMMENT 'Designation id is a auto increment and primary key for designations table',
  `organization_id` int(11) NOT NULL COMMENT 'organization id is a auto increment and primary key for designations table',
  `designation_name` varchar(250) NOT NULL COMMENT 'designation name for  organizations'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Table  designations for organization`s employee';

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `organization_id`, `designation_name`) VALUES
(3, 3, 'hr manager'),
(4, 3, 'php developer');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(11) NOT NULL COMMENT 'Employee id is a auto increment and primary key for employee table',
  `organization_id` int(11) NOT NULL COMMENT ' Organization id is a auto increment and primary key for employee table',
  `department_id` int(11) DEFAULT NULL COMMENT 'Department name for a employee for his organization',
  `designation_id` int(11) DEFAULT NULL COMMENT 'Designations name for employee',
  `user_id` int(11) DEFAULT NULL COMMENT 'user_id is for login',
  `username` varchar(20) DEFAULT NULL COMMENT 'user name for employee to access his account',
  `password` varchar(15) DEFAULT NULL COMMENT 'password  for employee to access his account',
  `salary_frquency` varchar(10) DEFAULT NULL COMMENT 'frequency for employee payroll',
  `joining_date` varchar(300) DEFAULT NULL COMMENT 'joining date for employee',
  `first_name` varchar(15) DEFAULT NULL COMMENT 'first name for employee',
  `last_name` varchar(15) DEFAULT NULL COMMENT 'last name for employee',
  `birthdate` varchar(255) DEFAULT NULL COMMENT 'birth date for employee',
  `gender` varchar(10) DEFAULT NULL COMMENT 'gender for employee',
  `image` varchar(250) DEFAULT NULL COMMENT 'employee pic',
  `martial_status` varchar(15) DEFAULT NULL COMMENT 'employee martial status',
  `nationality` varchar(15) DEFAULT NULL COMMENT 'employee nationalty',
  `father_name` varchar(15) DEFAULT NULL COMMENT 'employee father name',
  `passport` varchar(30) DEFAULT NULL COMMENT 'employee passport',
  `present_address` varchar(250) DEFAULT NULL COMMENT 'employee address',
  `mobile` varchar(12) DEFAULT NULL COMMENT 'employee mobile',
  `email` varchar(20) DEFAULT NULL COMMENT 'employee email',
  `country` varchar(15) DEFAULT NULL COMMENT 'employee country',
  `state` varchar(15) DEFAULT NULL COMMENT 'employee state',
  `city` varchar(15) DEFAULT NULL COMMENT 'employee city',
  `zip` varchar(9) DEFAULT NULL COMMENT 'employee zip',
  `resume` varchar(250) DEFAULT NULL COMMENT 'employee resume',
  `offerletter` varchar(250) DEFAULT NULL COMMENT 'employee offer lettaer',
  `joiningletter` varchar(255) DEFAULT NULL COMMENT 'employee join letter',
  `idproof` varchar(250) DEFAULT NULL COMMENT 'employee id proof',
  `bank_name` varchar(50) DEFAULT NULL COMMENT 'employee bank name',
  `branch_name` varchar(250) DEFAULT NULL COMMENT 'employee branch name',
  `acc_name` varchar(50) DEFAULT NULL COMMENT 'employee account name',
  `acc_no` varchar(20) DEFAULT NULL COMMENT 'employee account number'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table employee for a organizations';

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `organization_id`, `department_id`, `designation_id`, `user_id`, `username`, `password`, `salary_frquency`, `joining_date`, `first_name`, `last_name`, `birthdate`, `gender`, `image`, `martial_status`, `nationality`, `father_name`, `passport`, `present_address`, `mobile`, `email`, `country`, `state`, `city`, `zip`, `resume`, `offerletter`, `joiningletter`, `idproof`, `bank_name`, `branch_name`, `acc_name`, `acc_no`) VALUES
(8, 3, 5, 4, NULL, '12334455', '', 'weekly', '', 'testing123123', 'testing123123', '12/03/2035', 'male', 'testing123123images (1).jpg', '', 'indian', 'testing123123', 'testing123123', 'testing123123', '(146) 541-56', 'testing123123', '', 'Delhi', '1', '65 46 51', 'testing123123Lighthouse.jpg', 'testing123123Penguins.jpg', 'testing123123Chrysanthemum.jpg', 'testing123123Jellyfish.jpg', 'testing123123', 'testing123123', 'testing123123', '8'),
(76, 2, 6, 4, NULL, '', '', 'weekly', '07/16/2015', ' ratan', ' tata', '11/11/2011', 'male', '76images (1).jpg', '', 'indian', ' tata', ' tataffff', ' tata', '(111) 111-11', 'tata', 'india', 'Delhi', '1', '23 24 23', ' tataadsfgsdgChrysanthemum.jpg', ' tataadsfgsdgDesert.jpg', ' tataadsfgsdgHydrangeas.jpg', ' tataadsfgsdgPenguins.jpg', ' tata', ' tata', ' tata', '76');

-- --------------------------------------------------------

--
-- Table structure for table `function`
--

CREATE TABLE IF NOT EXISTS `function` (
  `function_id` varchar(20) NOT NULL COMMENT 'function id is a auto increment and primary key for a function table',
  `function_name` varchar(50) NOT NULL COMMENT 'function name is function identity'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Function table for defined function list where give you perm';

--
-- Dumping data for table `function`
--

INSERT INTO `function` (`function_id`, `function_name`) VALUES
('acc_setting', 'acc_setting'),
('add_departments', 'add departments'),
('add_designation', 'add designation'),
('add_emp', 'add emp'),
('add_organization', 'add organization'),
('add_role', 'add role'),
('attendance_report', 'attendance_report'),
('blocked_user', 'blocked user'),
('change_pass', 'change pass'),
('delete_departments', 'delete departments'),
('delete_designation', 'delete designation'),
('delete_organization', 'delete organization'),
('delete_user', 'delete user'),
('emp_award', 'emp award'),
('index', 'index'),
('insert_department', 'insert department'),
('insert_designation', 'insert designation'),
('insert_employee', 'insert employee'),
('insert_organization', 'insert organization'),
('insert_role', 'insert role'),
('login_user', 'login user'),
('login_view', 'login_view'),
('manage_attendance', 'manage_attendance'),
('manage_departments', 'manage departments'),
('manage_designation', 'manage designation'),
('manage_emp', 'manage emp'),
('manage_organization', 'manage organization'),
('manage_users', 'manage users'),
('refrence', 'refrence list'),
('role_assign', 'role assign'),
('role_management', 'role management'),
('role_permission', 'role permission'),
('sign_up', 'sign_up'),
('update_department', 'update department'),
('update_designation', 'update designation'),
('update_employee', 'update employee'),
('update_organization', 'update organization'),
('update_role_permissi', 'manage  unit'),
('user_add', 'user add'),
('user_role', 'user role');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
`organization_id` int(11) NOT NULL COMMENT 'organization id is a auto increment and primary key for organization table',
  `organization_name` varchar(50) DEFAULT NULL COMMENT 'organization name for organizations',
  `organization_desc` varchar(250) DEFAULT NULL COMMENT 'organization description for organization table'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Table organizations for organization`s employee';

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`organization_id`, `organization_name`, `organization_desc`) VALUES
(2, 'Khaira n associate', 'bhopal'),
(3, 'Junction software Pvt Ltd.', 'software company');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` varchar(20) NOT NULL COMMENT 'role id primary key and auto increment for assign role',
  `description` varchar(20) DEFAULT NULL COMMENT 'role descriptons',
  `created_by` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT 'create  person name',
  `created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'created date',
  `updated_by` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT 'update person name',
  `updated_on` timestamp NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Role table for check authority';

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `description`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
('blocked', 'blocked', NULL, '2015-07-09 07:03:02', NULL, '0000-00-00 00:00:00'),
('hr', 'hr', NULL, '2015-07-01 05:03:12', NULL, '0000-00-00 00:00:00'),
('vendor', 'vendor', NULL, '2015-07-10 12:35:23', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_permission`
--

CREATE TABLE IF NOT EXISTS `role_permission` (
  `role_id` varchar(20) NOT NULL COMMENT 'Role is primary key for role permissions',
  `function_id` varchar(20) NOT NULL COMMENT 'finction primary key dor role permissons',
  `auth_read` int(5) NOT NULL COMMENT 'Auth read is field for role permissions',
  `auth_execute` int(5) NOT NULL COMMENT 'Auth executeis field for role permissions',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'create person name',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create date',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'update person name',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table for role permissions';

--
-- Dumping data for table `role_permission`
--

INSERT INTO `role_permission` (`role_id`, `function_id`, `auth_read`, `auth_execute`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
('hr', 'acc_setting', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'add_departments', 1, 0, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'add_designation', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'add_emp', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'add_organization', 0, 0, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'add_role', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'attendance_report', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'blocked_user', 0, 0, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'change_pass', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'delete_departments', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'delete_designation', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'delete_organization', 0, 0, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'delete_user', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'emp_award', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'index', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'insert_department', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'insert_designation', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'insert_employee', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'insert_organization', 0, 0, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'insert_role', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'login_user', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'login_view', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'manage_attendance', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'manage_departments', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'manage_designation', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'manage_emp', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'manage_organization', 0, 0, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'manage_users', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'refrence', 0, 0, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'role_assign', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'role_management', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'role_permission', 0, 0, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'sign_up', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'update_department', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'update_designation', 0, 0, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'update_employee', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'update_organization', 0, 0, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'update_role_permissi', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'user_add', 0, 0, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('hr', 'user_role', 1, 1, '', '2015-07-09 10:02:25', '', '0000-00-00 00:00:00'),
('superuser', 'index', 1, 1, '', '2015-07-09 07:14:35', '', '0000-00-00 00:00:00'),
('vendor', 'acc_setting', 1, 1, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'add_departments', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'add_designation', 1, 1, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'add_emp', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'add_organization', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'add_role', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'attendance_report', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'blocked_user', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'change_pass', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'delete_departments', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'delete_designation', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'delete_organization', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'delete_user', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'emp_award', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'index', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'insert_department', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'insert_designation', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'insert_employee', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'insert_organization', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'insert_role', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'login_user', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'login_view', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'manage_attendance', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'manage_departments', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'manage_designation', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'manage_emp', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'manage_organization', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'manage_users', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'refrence', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'role_assign', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'role_management', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'role_permission', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'sign_up', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'update_department', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'update_designation', 1, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'update_employee', 1, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'update_organization', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'update_role_permissi', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'user_add', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00'),
('vendor', 'user_role', 0, 0, '', '2015-07-09 07:57:29', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
`user_id` int(11) NOT NULL COMMENT 'user id is priamary key and auto increment for signup',
  `usermailid` varchar(15) DEFAULT NULL COMMENT 'user mail id for sign up',
  `password` varchar(10) DEFAULT NULL COMMENT 'password for sign up',
  `user_name` varchar(15) NOT NULL COMMENT 'user name for sign up'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COMMENT='sign up table for new user';

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`user_id`, `usermailid`, `password`, `user_name`) VALUES
(1, 'test@gmail.com', '123456', 'test'),
(8, 'testing@gmail.c', '121212', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE IF NOT EXISTS `tracking` (
  `employee_id` varchar(15) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `imei` int(25) NOT NULL,
  `datetime` datetime NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(30) NOT NULL COMMENT 'user id is auto increment  and primary key for users',
  `organization_id` int(11) NOT NULL COMMENT 'org id is foreign key',
  `role_id` varchar(20) DEFAULT NULL COMMENT 'role id  is foriegn key for users',
  `usermailid` varchar(30) DEFAULT NULL COMMENT 'mail id for users',
  `password` varchar(50) DEFAULT NULL COMMENT 'password for users',
  `created_by` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT 'crated person name',
  `created_on` timestamp NULL DEFAULT NULL COMMENT 'created date',
  `updated_by` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT 'update by person name',
  `updated_on` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'update date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT COMMENT='users table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `organization_id`, `role_id`, `usermailid`, `password`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
('3', 2, 'employee', 'user@gmail.com', 'initial', NULL, NULL, NULL, '2015-07-10 07:06:42'),
('6', 3, 'hr', 'ankit@gmail.com', '123', NULL, NULL, NULL, '2015-07-09 06:49:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`department_id`,`organization_id`), ADD KEY `department_ibfk_1` (`organization_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
 ADD PRIMARY KEY (`designation_id`,`organization_id`), ADD KEY `organization_id` (`organization_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`employee_id`,`organization_id`), ADD KEY `organization_id` (`organization_id`), ADD KEY `FK_dept` (`department_id`), ADD KEY `designation` (`designation_id`) COMMENT 'designation';

--
-- Indexes for table `function`
--
ALTER TABLE `function`
 ADD PRIMARY KEY (`function_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
 ADD PRIMARY KEY (`organization_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
 ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `role_permission`
--
ALTER TABLE `role_permission`
 ADD PRIMARY KEY (`role_id`,`function_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
 ADD PRIMARY KEY (`employee_id`,`organization_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`,`organization_id`), ADD KEY `organization_id` (`organization_id`), ADD KEY `role` (`role_id`) COMMENT 'role';

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'department id is a auto increment and primary key for department table',AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Designation id is a auto increment and primary key for designations table',AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
MODIFY `organization_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'organization id is a auto increment and primary key for organization table',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user id is priamary key and auto increment for signup',AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`);

--
-- Constraints for table `designation`
--
ALTER TABLE `designation`
ADD CONSTRAINT `designation_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
ADD CONSTRAINT `FK_dept` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE,
ADD CONSTRAINT `FK_designation` FOREIGN KEY (`designation_id`) REFERENCES `designation` (`designation_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
