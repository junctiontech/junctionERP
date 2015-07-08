-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2015 at 10:49 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='Table department for organization`s employee';

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `organization_id`, `department_name`) VALUES
(4, 3, 'Human Resorce');

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
(4, 3, 'php developer'),
(5, 3, 'web developer');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` varchar(15) NOT NULL COMMENT 'Employee id is a auto increment and primary key for employee table',
  `organization_id` int(11) NOT NULL COMMENT ' Organization id is a auto increment and primary key for employee table',
  `department_id` int(11) NOT NULL COMMENT 'Department name for a employee for his organization',
  `designation_id` int(11) NOT NULL COMMENT 'Designations name for employee',
  `user_id` int(11) DEFAULT NULL COMMENT 'user_id is for login',
  `username` varchar(20) DEFAULT NULL COMMENT 'user name for employee to access his account',
  `password` varchar(15) DEFAULT NULL COMMENT 'password  for employee to access his account',
  `frquency` varchar(10) DEFAULT NULL COMMENT 'frequency for employee payroll',
  `joining_date` varchar(300) DEFAULT NULL COMMENT 'joining date for employee',
  `first_name` varchar(15) DEFAULT NULL COMMENT 'first name for employee',
  `last_name` varchar(15) DEFAULT NULL COMMENT 'last name for employee',
  `birthdate` varchar(255) DEFAULT NULL COMMENT 'birth date for employee',
  `gender` varchar(10) DEFAULT NULL COMMENT 'gender for employee',
  `image` varchar(250) DEFAULT NULL COMMENT 'employee pic',
  `maratial_status` varchar(15) DEFAULT NULL COMMENT 'employee martial status',
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

INSERT INTO `employee` (`employee_id`, `organization_id`, `department_id`, `designation_id`, `user_id`, `username`, `password`, `frquency`, `joining_date`, `first_name`, `last_name`, `birthdate`, `gender`, `image`, `maratial_status`, `nationality`, `father_name`, `passport`, `present_address`, `mobile`, `email`, `country`, `state`, `city`, `zip`, `resume`, `offerletter`, `joiningletter`, `idproof`, `bank_name`, `branch_name`, `acc_name`, `acc_no`) VALUES
('testing123', 3, 4, 5, NULL, 'username', '', 'weekly', '03/14/2015', 'testing tata', 'testing', '27/07/1991', 'male', NULL, 'unmarried', 'indian', 'testing', 'testing1212', 'testing', '(011) 111-11', 'testing', 'india', 'Delhi', '1', '01 23 45', NULL, NULL, NULL, 'testing123', 'testing', 'testing', 'testing1231', 'testing123');

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
('add_chapter', 'add chapter'),
('add_department', 'Department Add in sor'),
('add_estsubitem', 'add estsubitem'),
('add_est_submit', 'add est submit'),
('carriage', 'carriage list'),
('chapter', 'chapter'),
('create_item', 'create item'),
('create_ref_cal', 'create ref cal'),
('create_sub_item', 'create sub item'),
('delete_estimate', 'delete estimate'),
('delete_material', 'delete material'),
('delete_subitem', 'delete subitem'),
('del_sitem_est', 'del sitem est'),
('edit_estimation', 'edit for estimation'),
('estimate_pdf', 'estimate pdf'),
('estimation_list', 'estimation list'),
('estimation_val', 'estimation val'),
('get_subitem_list', 'get subitem list'),
('importcsv', 'importcsv'),
('index', 'index csv controller'),
('item_class', 'item class list'),
('labour', 'labour list'),
('manage_carriage', 'manage carriage'),
('manage_item_class', 'manage item class'),
('manage_labour', 'manage labour'),
('manage_material', 'manage material'),
('manage_overhead', 'manage overhead'),
('manage_plant', 'manage plant'),
('manage_refrence', 'manage refrence'),
('manage_subitem', 'manage subitem'),
('manage_unit', 'manage  unit'),
('material', 'material list'),
('overhead', 'overhead list'),
('pdf_file', 'pdf file'),
('plant', 'plant list'),
('refrence', 'refrence list'),
('role_management', 'role management'),
('search_keyword', 'search with keyword'),
('unit', 'unit list'),
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
('admin', NULL, NULL, '2015-06-13 11:37:51', NULL, '0000-00-00 00:00:00'),
('block', 'block', NULL, '2015-06-29 07:42:07', NULL, '0000-00-00 00:00:00'),
('hr', 'hr', NULL, '2015-07-01 05:03:12', NULL, '0000-00-00 00:00:00');

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
('admin', 'add_department', 0, 1, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'add_estsubitem', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'add_est_submit', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'carriage', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'chapter', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'create_item', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'create_ref_cal', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'create_sub_item', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'delete_estimate', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'delete_material', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'delete_subitem', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'del_sitem_est', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'edit_estimation', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'estimate_pdf', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'estimation_list', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'estimation_val', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'get_subitem_list', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'importcsv', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'index', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'item_class', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'labour', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'manage_carriage', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'manage_item_class', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'manage_labour', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'manage_material', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'manage_overhead', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'manage_plant', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'manage_refrence', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'manage_subitem', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'manage_unit', 0, 1, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'material', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'overhead', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'pdf_file', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'plant', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'refrence', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'role_management', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'search_keyword', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'unit', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('admin', 'user_role', 0, 0, '', '2015-06-15 12:30:11', '', '0000-00-00 00:00:00'),
('adminstrator', 'manage_organization', 0, 0, '', '2015-06-30 12:13:52', '', '0000-00-00 00:00:00'),
('block', 'add_department', 0, 0, '', '2015-06-11 06:04:54', '', '0000-00-00 00:00:00'),
('block', 'carriage', 0, 0, '', '2015-06-10 13:07:26', '', '0000-00-00 00:00:00'),
('block', 'chapter', 0, 0, '', '2015-06-10 13:07:30', '', '0000-00-00 00:00:00'),
('block', 'estimation_list', 0, 0, '', '2015-06-10 13:07:35', '', '0000-00-00 00:00:00'),
('block', 'get_subitem_list', 0, 0, '', '2015-06-10 13:07:39', '', '0000-00-00 00:00:00'),
('block', 'index', 0, 0, '', '2015-06-10 13:07:43', '', '0000-00-00 00:00:00'),
('block', 'item', 0, 0, '', '2015-06-10 13:07:48', '', '0000-00-00 00:00:00'),
('block', 'item_class', 0, 0, '', '2015-06-10 13:07:52', '', '0000-00-00 00:00:00'),
('block', 'labour', 0, 0, '', '2015-06-10 13:07:56', '', '0000-00-00 00:00:00'),
('block', 'material', 0, 0, '', '2015-06-10 13:07:59', '', '0000-00-00 00:00:00'),
('block', 'overhead', 0, 0, '', '2015-06-10 13:08:04', '', '0000-00-00 00:00:00'),
('block', 'plant', 0, 0, '', '2015-06-10 13:08:08', '', '0000-00-00 00:00:00'),
('block', 'refrence', 0, 0, '', '2015-06-10 13:08:12', '', '0000-00-00 00:00:00'),
('block', 'role_management', 0, 0, '', '2015-06-10 13:08:16', '', '0000-00-00 00:00:00'),
('block', 'unit', 0, 0, '', '2015-06-10 13:08:20', '', '0000-00-00 00:00:00'),
('block', 'user_role', 0, 0, '', '2015-06-10 13:08:24', '', '0000-00-00 00:00:00'),
('employee', 'add_department', 1, 0, '', '2015-06-29 07:43:25', '', '0000-00-00 00:00:00'),
('employee', 'add_estsubitem', 1, 0, '', '2015-06-29 07:43:29', '', '0000-00-00 00:00:00'),
('employee', 'add_est_submit', 1, 0, '', '2015-06-29 07:43:33', '', '0000-00-00 00:00:00'),
('employee', 'create_item', 1, 0, '', '2015-06-29 07:43:38', '', '0000-00-00 00:00:00'),
('employee', 'create_ref_cal', 1, 0, '', '2015-06-29 07:43:41', '', '0000-00-00 00:00:00'),
('employee', 'create_sub_item', 1, 0, '', '2015-06-29 07:43:45', '', '0000-00-00 00:00:00'),
('employee', 'delete_estimate', 1, 0, '', '2015-06-29 07:43:49', '', '0000-00-00 00:00:00'),
('employee', 'delete_item', 1, 0, '', '2015-06-29 07:43:55', '', '0000-00-00 00:00:00'),
('employee', 'delete_material', 1, 0, '', '2015-06-29 07:43:59', '', '0000-00-00 00:00:00'),
('employee', 'delete_subitem', 1, 0, '', '2015-06-29 07:44:03', '', '0000-00-00 00:00:00'),
('employee', 'del_sitem_est', 1, 0, '', '2015-06-29 07:44:07', '', '0000-00-00 00:00:00'),
('employee', 'edit_estimation', 1, 0, '', '2015-06-29 07:44:10', '', '0000-00-00 00:00:00'),
('employee', 'estimate_pdf', 1, 0, '', '2015-06-29 07:44:14', '', '0000-00-00 00:00:00'),
('employee', 'estimation_val', 1, 0, '', '2015-06-29 07:44:17', '', '0000-00-00 00:00:00'),
('employee', 'get_subitem_list', 1, 0, '', '2015-06-29 07:44:21', '', '0000-00-00 00:00:00'),
('employee', 'importcsv', 0, 0, '', '2015-06-29 07:44:25', '', '0000-00-00 00:00:00'),
('employee', 'index', 1, 0, '', '2015-06-29 07:44:30', '', '0000-00-00 00:00:00'),
('employee', 'manage_carriage', 1, 0, '', '2015-06-29 07:44:33', '', '0000-00-00 00:00:00'),
('employee', 'manage_item_class', 1, 0, '', '2015-06-29 07:44:37', '', '0000-00-00 00:00:00'),
('employee', 'manage_labour', 1, 0, '', '2015-06-29 07:44:41', '', '0000-00-00 00:00:00'),
('employee', 'manage_material', 1, 0, '', '2015-06-29 07:44:45', '', '0000-00-00 00:00:00'),
('employee', 'manage_organization', 0, 0, '', '2015-06-29 10:17:02', '', '0000-00-00 00:00:00'),
('employee', 'manage_overhead', 1, 0, '', '2015-06-29 07:44:48', '', '0000-00-00 00:00:00'),
('employee', 'manage_plant', 1, 0, '', '2015-06-29 07:44:51', '', '0000-00-00 00:00:00'),
('employee', 'manage_refrence', 1, 0, '', '2015-06-29 07:44:55', '', '0000-00-00 00:00:00'),
('employee', 'manage_subitem', 1, 0, '', '2015-06-29 07:44:59', '', '0000-00-00 00:00:00'),
('employee', 'manage_unit', 1, 0, '', '2015-06-29 07:45:03', '', '0000-00-00 00:00:00'),
('employee', 'pdf_file', 0, 0, '', '2015-06-29 07:45:06', '', '0000-00-00 00:00:00'),
('employee', 'role_management', 0, 0, '', '2015-06-29 07:45:10', '', '0000-00-00 00:00:00'),
('employee', 'user_role', 0, 0, '', '2015-06-29 07:45:14', '', '0000-00-00 00:00:00'),
('Super user', 'pdf_file', 1, 1, '', '2015-06-30 11:26:31', '', '0000-00-00 00:00:00');

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
`user_id` int(10) NOT NULL COMMENT 'user id is auto increment  and primary key for users',
  `role_id` varchar(20) DEFAULT NULL COMMENT 'role id  is foriegn key for users',
  `organization_id` int(11) NOT NULL COMMENT 'org id is foreign key',
  `name` varchar(30) DEFAULT NULL COMMENT 'name for users ',
  `usermailid` varchar(30) DEFAULT NULL COMMENT 'mail id for users',
  `password` varchar(50) DEFAULT NULL COMMENT 'password for users',
  `phone_number` varchar(12) DEFAULT NULL COMMENT 'phone number for users',
  `mobile` varchar(12) DEFAULT NULL COMMENT 'mobile for users',
  `address` varchar(250) DEFAULT NULL COMMENT 'address for users',
  `created_by` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT 'crated person name',
  `created_on` timestamp NULL DEFAULT NULL COMMENT 'created date',
  `updated_by` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT 'update by person name',
  `updated_on` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'update date'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT COMMENT='users table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `role_id`, `organization_id`, `name`, `usermailid`, `password`, `phone_number`, `mobile`, `address`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Super user', 1, NULL, 'admin', 'initial', NULL, '', '', NULL, NULL, NULL, '2015-06-30 11:10:51'),
(3, 'admin', 1, NULL, 'user@gmail.com', 'initial', NULL, '', '', NULL, NULL, NULL, '2015-07-01 05:21:57'),
(6, 'hr', 3, NULL, 'ankit@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-04 07:30:15');

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
 ADD PRIMARY KEY (`employee_id`,`organization_id`,`department_id`,`designation_id`), ADD KEY `organization_id` (`organization_id`), ADD KEY `designation_id` (`designation_id`), ADD KEY `employee_ibfk_2` (`department_id`);

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
 ADD PRIMARY KEY (`user_id`,`organization_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'department id is a auto increment and primary key for department table',AUTO_INCREMENT=5;
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'user id is auto increment  and primary key for users',AUTO_INCREMENT=7;
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
ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
