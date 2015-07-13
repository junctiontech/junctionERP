-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2015 at 01:27 PM
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
  `department_name` varchar(250) DEFAULT NULL COMMENT 'department name for  organizations',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person ',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COMMENT='Table department for organization`s employee';

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `organization_id`, `department_name`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(13, 7, 'computer science', '', '2015-07-13 11:21:46', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
`designation_id` int(11) NOT NULL COMMENT 'Designation id is a auto increment and primary key for designations table',
  `organization_id` int(11) NOT NULL COMMENT 'organization id is a auto increment and primary key for designations table',
  `designation_name` varchar(250) NOT NULL COMMENT 'designation name for  organizations',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='Table  designations for organization`s employee';

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `organization_id`, `designation_name`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(11, 7, 'ANDROID APPLICATION DEVELOPER', '', '2015-07-13 11:22:24', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`employee_id` int(11) NOT NULL COMMENT 'Employee id is a auto increment and primary key for employee table',
  `organization_id` int(11) NOT NULL COMMENT ' Organization id is a auto increment and primary key for employee table',
  `department_id` int(11) DEFAULT NULL COMMENT 'Department name for a employee for his organization',
  `designation_id` int(11) DEFAULT NULL COMMENT 'Designations name for employee',
  `user_id` varchar(30) DEFAULT NULL COMMENT 'user_id is for login',
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
  `acc_no` varchar(20) DEFAULT NULL COMMENT 'employee account number',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person',
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'update of time'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='Table employee for a organizations';

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `organization_id`, `department_id`, `designation_id`, `user_id`, `salary_frquency`, `joining_date`, `first_name`, `last_name`, `birthdate`, `gender`, `image`, `martial_status`, `nationality`, `father_name`, `passport`, `present_address`, `mobile`, `email`, `country`, `state`, `city`, `zip`, `resume`, `offerletter`, `joiningletter`, `idproof`, `bank_name`, `branch_name`, `acc_name`, `acc_no`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(7, 7, NULL, NULL, 'VISHAL', 'monthly', '05/15/2015', 'VISHAL', 'YADAV', '20/12/1988', 'male', 'Penguins.jpg', '', 'indian', 'MR. RAJENDRA YA', 'NIL', 'H. NO. 4 JANAK PURI COLONY AYODHYA BYPASS ROAD BHOPAL', '(888) 955-26', 'engineervishalyadav@', 'india', 'mp', '1', '46 20 41', 'Koala.jpg', 'Desert.jpg', 'Koala.jpg', 'Tulips.jpg', 'BOI', 'BANK OF INDIA', 'VISHAL YADAV', '7', 'superuser', '2015-07-13 11:19:50', 'superuser', '2015-07-13 11:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `function`
--

CREATE TABLE IF NOT EXISTS `function` (
  `function_id` varchar(20) NOT NULL COMMENT 'function id is a auto increment and primary key for a function table',
  `function_name` varchar(50) NOT NULL COMMENT 'function name is function identity',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Function table for defined function list where give you perm';

--
-- Dumping data for table `function`
--

INSERT INTO `function` (`function_id`, `function_name`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
('acc_setting', 'acc_setting', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('add_departments', 'add departments', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('add_designation', 'add designation', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('add_emp', 'add emp', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('add_organization', 'add organization', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('add_role', 'add role', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('attendance_report', 'attendance_report', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('blocked_user', 'blocked user', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('change_pass', 'change pass', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('delete_departments', 'delete departments', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('delete_designation', 'delete designation', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('delete_organization', 'delete organization', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('delete_user', 'delete user', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('emp_award', 'emp award', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('index', 'index', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('insert_department', 'insert department', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('insert_designation', 'insert designation', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('insert_employee', 'insert employee', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('insert_organization', 'insert organization', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('insert_role', 'insert role', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('login_user', 'login user', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('login_view', 'login_view', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('manage_attendance', 'manage_attendance', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('manage_departments', 'manage departments', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('manage_designation', 'manage designation', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('manage_emp', 'manage emp', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('manage_organization', 'manage organization', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('manage_users', 'manage users', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('role_assign', 'role assign', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('role_management', 'role management', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('role_permission', 'role permission', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('sign_up', 'sign_up', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('update_department', 'update department', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('update_designation', 'update designation', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('update_employee', 'update employee', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('update_organization', 'update organization', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('update_role_permissi', 'manage  unit', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('user_add', 'user add', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00'),
('user_role', 'user role', '', '2015-07-11 05:18:24', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
`organization_id` int(11) NOT NULL COMMENT 'organization id is a auto increment and primary key for organization table',
  `organization_name` varchar(50) DEFAULT NULL COMMENT 'organization name for organizations',
  `organization_desc` varchar(250) DEFAULT NULL COMMENT 'organization description for organization table',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COMMENT='Table organizations for organization`s employee';

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`organization_id`, `organization_name`, `organization_desc`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(7, 'abc construction group', 'Satna company', '', '2015-07-13 06:29:19', '', '0000-00-00 00:00:00'),
(8, 'software copany', 'sarbhanga', '', '2015-07-13 06:29:59', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` varchar(20) NOT NULL COMMENT 'role id primary key and auto increment for assign role',
  `role_description` varchar(50) DEFAULT NULL COMMENT 'role descriptons',
  `created_by` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT 'name of create person',
  `created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT 'name of update person',
  `updated_on` timestamp NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Role table for check authority';

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_description`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
('admin', 'admin', NULL, '2015-07-13 06:42:17', NULL, '0000-00-00 00:00:00'),
('user', 'user', NULL, '2015-07-13 07:43:15', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_permission`
--

CREATE TABLE IF NOT EXISTS `role_permission` (
  `role_id` varchar(20) NOT NULL COMMENT 'Role is primary key for role permissions',
  `function_id` varchar(20) NOT NULL COMMENT 'finction primary key dor role permissons',
  `auth_read` int(5) NOT NULL COMMENT 'Auth read is field for role permissions',
  `auth_execute` int(5) NOT NULL COMMENT 'Auth executeis field for role permissions',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table for role permissions';

--
-- Dumping data for table `role_permission`
--

INSERT INTO `role_permission` (`role_id`, `function_id`, `auth_read`, `auth_execute`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
('admin', 'acc_setting', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'add_departments', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'add_designation', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'add_emp', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'add_organization', 0, 0, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'add_role', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'attendance_report', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'blocked_user', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'change_pass', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'delete_departments', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'delete_designation', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'delete_organization', 0, 0, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'delete_user', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'emp_award', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'index', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'insert_department', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'insert_designation', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'insert_employee', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'insert_organization', 0, 0, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'insert_role', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'login_user', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'login_view', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'manage_attendance', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'manage_departments', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'manage_designation', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'manage_emp', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'manage_organization', 0, 0, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'manage_users', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'role_assign', 0, 0, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'role_management', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'role_permission', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'sign_up', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'update_department', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'update_designation', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'update_employee', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'update_organization', 0, 0, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'update_role_permissi', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'user_add', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('admin', 'user_role', 1, 1, '', '2015-07-13 06:42:17', '', '0000-00-00 00:00:00'),
('user', 'acc_setting', 0, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'add_departments', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'add_designation', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'add_emp', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'add_organization', 0, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'add_role', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'attendance_report', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'blocked_user', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'change_pass', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'delete_departments', 0, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'delete_designation', 0, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'delete_organization', 0, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'delete_user', 0, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'emp_award', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'index', 1, 1, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'insert_department', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'insert_designation', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'insert_employee', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'insert_organization', 0, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'insert_role', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'login_user', 1, 1, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'login_view', 1, 1, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'manage_attendance', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'manage_departments', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'manage_designation', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'manage_emp', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'manage_organization', 0, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'manage_users', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'role_assign', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'role_management', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'role_permission', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'sign_up', 1, 1, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'update_department', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'update_designation', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'update_employee', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'update_organization', 0, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'update_role_permissi', 0, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'user_add', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00'),
('user', 'user_role', 1, 0, '', '2015-07-13 07:43:15', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
`user_id` int(11) NOT NULL COMMENT 'user id is priamary key and auto increment for signup',
  `usermailid` varchar(15) DEFAULT NULL COMMENT 'user mail id for sign up',
  `password` varchar(10) DEFAULT NULL COMMENT 'password for sign up',
  `user_name` varchar(15) NOT NULL COMMENT 'user name for sign up',
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COMMENT='sign up table for new user';

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`user_id`, `usermailid`, `password`, `user_name`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'test@gmail.com', '123456', 'test', '', '2015-07-11 05:34:26', '', '0000-00-00 00:00:00'),
(8, 'testing@gmail.c', '121212', 'testing', '', '2015-07-11 05:34:26', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE IF NOT EXISTS `tracking` (
  `employee_id` varchar(15) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `imei` int(25) NOT NULL,
  `datetime` datetime NOT NULL,
  `location` varchar(250) NOT NULL,
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person ',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
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
  `created_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of create person',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'create of time',
  `updated_by` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'name of update person',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'update of time'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT COMMENT='users table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `organization_id`, `role_id`, `usermailid`, `password`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
('VISHAL', 7, 'admin', 'engineervishalyadav@gmail.com', '123', '', '2015-07-13 11:19:19', '', '0000-00-00 00:00:00');

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
 ADD PRIMARY KEY (`employee_id`,`organization_id`), ADD KEY `organization_id` (`organization_id`), ADD KEY `FK_dept` (`department_id`), ADD KEY `designation` (`designation_id`) COMMENT 'designation', ADD KEY `fk_user_id` (`user_id`) COMMENT 'Fk_user_id';

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
MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'department id is a auto increment and primary key for department table',AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Designation id is a auto increment and primary key for designations table',AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Employee id is a auto increment and primary key for employee table',AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
MODIFY `organization_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'organization id is a auto increment and primary key for organization table',AUTO_INCREMENT=9;
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
ADD CONSTRAINT `FK_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`);

--
-- Constraints for table `role_permission`
--
ALTER TABLE `role_permission`
ADD CONSTRAINT `role_permission_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`),
ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
