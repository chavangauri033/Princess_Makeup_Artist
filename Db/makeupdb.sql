-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 08:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makeupdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Username`, `Password`) VALUES
('PMA', 'princessma@123'),
('PMA', 'princessma@123'),
('PMA', 'princessma@123'),
('PMA', 'princessma@123'),
('PMA', 'princessma@123'),
('PMA', 'princessma@123'),
('PMA', 'princessma@123'),
('PMA', 'princessma@123');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `Admission_Id` int(11) NOT NULL,
  `St_Name` varchar(50) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `A_Email` varchar(100) NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `Birthdate` date NOT NULL,
  `Coursename` varchar(50) NOT NULL,
  `Admission_date` varchar(50) NOT NULL,
  `Advance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`Admission_Id`, `St_Name`, `Location`, `Phone`, `A_Email`, `Qualification`, `Birthdate`, `Coursename`, `Admission_date`, `Advance`) VALUES
(1, 'Ankita Arjun Chothe', 'Shivraj pump, Satara.', '9578643208', 'ankita96@gmail.com', 'MSC', '1996-04-04', 'Diploma In Cosmatology', '20/05/21', 'Online_Cash_Payment'),
(2, 'Sai Rajendra Chavan', 'yashwant nagar, Vita Dist-Sangli Tal- Khanapur', '8275040860', 'chavansai033@gmail.com', '10th', '2004-02-04', 'Make-Up Artistry', '25/05/21', 'Cash_On_Dilivery'),
(3, 'Vaishnavi Vishal Kakde ', 'Mangakvar Peth, Satara.', '9976444776', 'vaishanvikakde@gmail.com', 'ENTC', '1999-06-02', 'Hair Chemical', '29/05/21', 'Cash_On_Dilivery'),
(4, 'Malika Adhik Kadam', 'Wadhe Phata, Satara.', '998976486', 'malikakadam03@gmail.com', 'B.E.', '2001-02-15', 'Hair Chemical', '17/06/21', 'Online_Cash_Payment'),
(5, 'Vaishnavi Vishal Kakde ', 'Mangakvar Peth, Satara.', '9976444776', 'vaishanvikakde@gmail.com', 'ENTC', '1999-02-06', 'Diploma In Cosmatology', '17/06/21', 'Cash_On_Dilivery'),
(6, 'Ankita Arjun Chothe', 'Shivraj pump, Satara.', '9578643208', 'ankita96@gmail.com', 'MSC', '1996-04-04', 'Make-Up Artistry', '17/06/21', 'Online_Cash_Payment'),
(7, 'Sanika Ramesh Kamble', 'A/p-Karad', '7778456732', 'sanika@yahoo.com', 'B.C.A.', '2002-11-08', 'Diploma In Cosmatology', '17/06/21', 'Cash_On_Dilivery'),
(8, 'Deepika Prasad Vedpathak', 'shanivar Peth, Satara.', '9489967410', 'deepikaprasad@gmail.com', 'MCA', '1988-09-15', 'Hair Chemical', '17/06/21', 'Cash_On_Dilivery'),
(9, 'Sai Rajendra Chavan', 'yashwant nagar, Vita Dist-Sangli Tal- Khanapur', '8275040860', 'chavansai033@gmail.com', '10th', '2004-02-04', 'Diploma In Cosmatology', '17/06/21', 'Online_Cash_Payment'),
(10, 'Pooja Ramesh Patil', 'Moti Chauk, Satara.', '7588863674', 'poojapatil65@yahoo.com', '9th', '2005-12-14', 'Make-Up Artistry', '18/06/21', 'Cash_On_Dilivery');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Appointment_Id` int(11) NOT NULL,
  `Ur_Name` varchar(50) NOT NULL,
  `Appointment_Type` varchar(50) NOT NULL,
  `Appointment_Add` varchar(100) NOT NULL,
  `Appointment_Date` date NOT NULL,
  `Appointment_Time` varchar(50) NOT NULL,
  `Current_Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Appointment_Id`, `Ur_Name`, `Appointment_Type`, `Appointment_Add`, `Appointment_Date`, `Appointment_Time`, `Current_Date`) VALUES
(1, 'Amisha Vilas Tupe', 'Body', 'Powai Naka, Satara.', '2021-06-08', '10:00 am To 12:30 pm', '21/05/21'),
(2, 'Sai Rajendra Chavan', 'Side swet Curl', 'Ravivar Peth, Satara.', '2021-06-10', '11:00 am To 1:30 pm', '21/05/21'),
(3, 'Ankita Arjun Chothe', 'Shampoo', 'Shivraj Pump, Satara.', '2021-06-17', '11:00 am To 1:30 pm', '15/06/21'),
(4, 'Pooja Ramesh Patil', 'Hair Style', 'Moti Chauk, Satara.', '2021-06-18', '3:00 pm To 4:30pm', '18/06/21'),
(5, 'Pranali Ganesh Jadhav', 'Bridal Mehendi', 'Somwar Peth, Satara.', '2021-06-21', '2:00pm To 5:00pm', '20/06/21');

-- --------------------------------------------------------

--
-- Table structure for table `manage_batch`
--

CREATE TABLE `manage_batch` (
  `Batch_Id` int(11) NOT NULL,
  `Cor_Name` varchar(50) NOT NULL,
  `No_Ofstudents` int(11) NOT NULL,
  `Course_Stuname` varchar(100) NOT NULL,
  `Batch_Time` varchar(50) NOT NULL,
  `Batch_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `manage_batch`
--

INSERT INTO `manage_batch` (`Batch_Id`, `Cor_Name`, `No_Ofstudents`, `Course_Stuname`, `Batch_Time`, `Batch_Date`) VALUES
(2, 'Diploma In Cosmatology', 4, 'Vaishnavi Vishal Kakde,Ankita Arjun Chothe, Sanika Ramesh Kamble, Sai Rajendra Chavan', '2:00 to 4:00', '2021-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `manage_course`
--

CREATE TABLE `manage_course` (
  `course_Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manage_courses`
--

CREATE TABLE `manage_courses` (
  `Course_Id` int(11) NOT NULL,
  `Course_img` varchar(50) NOT NULL,
  `Course_Name` varchar(50) NOT NULL,
  `Course_Description` varchar(100) NOT NULL,
  `Course_Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `manage_courses`
--

INSERT INTO `manage_courses` (`Course_Id`, `Course_img`, `Course_Name`, `Course_Description`, `Course_Price`) VALUES
(2, 'nail4.jfif', 'Nail Art', 'Happinezs is having your nails', 3000),
(3, 'mk20.jpg', 'Make-Up Artistry', 'Achieve beautiful makeup that is trendy ', 20000),
(4, 'mehendi2.jpg', 'Mehendi Designs', 'Life is short make every mehendi count', 5000),
(5, 'hare.jfif', 'Hair Grooming', 'Invest in your hair is important', 10000),
(6, 'haircolo.jpg', 'Hair Chemical', 'Cream Gloss Hair Colors', 10000),
(7, 'cossm.jpg', 'Diploma In Cosmatology', 'the study of beauty treatment', 25000),
(8, 'wax1.jfif', 'Skin And Beauty', '	Heigh Quality Treatments			', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `manage_fee`
--

CREATE TABLE `manage_fee` (
  `Fee_Id` int(11) NOT NULL,
  `Student_Name` varchar(50) NOT NULL,
  `Course_Name` varchar(50) NOT NULL,
  `Total_Fee` int(11) NOT NULL,
  `Paid_Fee` int(11) NOT NULL,
  `Remaining__Fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `manage_fee`
--

INSERT INTO `manage_fee` (`Fee_Id`, `Student_Name`, `Course_Name`, `Total_Fee`, `Paid_Fee`, `Remaining__Fee`) VALUES
(1, 'Vaishnavi Vishal Kakde', 'Diploma In Cosmatology', 25000, 3000, 22000),
(2, 'Sai Rajendra Chavan', 'Make-Up Artistry', 20000, 1000, 19000),
(3, 'Ankita Arjun Chothe', 'Diploma In Cosmatology', 25000, 5000, 2000),
(4, 'Vaishnavi Vishal Kakde', 'Hair Chemical', 10000, 2000, 8000),
(5, 'Malika Adhik Kadam', 'Hair Chemical', 10000, 5000, 5000),
(6, 'Ankita Arjun Chothe', 'Make-Up Artistry', 20000, 5000, 15000),
(7, 'Sanika Ramesh Kamble', 'Diploma In Cosmatology', 25000, 5000, 20000),
(8, 'Deepika Prasad Vedpathak', 'Hair Chemical', 10000, 2000, 8000),
(9, 'Sai Rajendra Chavan', 'Diploma In Cosmatology', 25000, 3000, 22000),
(10, 'Pooja Ramesh Patil', 'Make-Up Artistry', 20000, 2000, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `manage_gallery`
--

CREATE TABLE `manage_gallery` (
  `Gallery_Id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `manage_gallery`
--

INSERT INTO `manage_gallery` (`Gallery_Id`, `img`) VALUES
(1, 'gal6.jpg'),
(2, 'mk1.png'),
(3, 'mk5.jfif'),
(4, 'gal4.jpg'),
(5, 'nail2.jpg'),
(6, 'nail5.jfif'),
(7, 'nail2.jfif'),
(8, 'nail8.jfif'),
(9, 'hs1.jpg'),
(10, 'hairst8.jpg'),
(11, 'hairst4.jpg'),
(12, 'hairsty.jpg'),
(13, 'mehendi.jpg'),
(14, 'mehendi3.jpg'),
(15, 'mehendi6.jpeg'),
(16, 'mehendi5.jfif'),
(17, 'saree3.jpg'),
(18, 'kashta.jpg'),
(19, 'saree2.jpg'),
(20, 'ghagra.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `manage_makeuporder`
--

CREATE TABLE `manage_makeuporder` (
  `Makeup_Id` int(11) NOT NULL,
  `Ure_Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_No` varchar(100) NOT NULL,
  `Make_Type` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Mcurrent_Date` varchar(50) NOT NULL,
  `Advance_Paymentmode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `manage_makeuporder`
--

INSERT INTO `manage_makeuporder` (`Makeup_Id`, `Ure_Name`, `Address`, `Contact_No`, `Make_Type`, `Date`, `Time`, `Mcurrent_Date`, `Advance_Paymentmode`) VALUES
(1, 'Amisha Vilas Tupe', 'Powai Naka, Satara.', '7846372945', 'HD Makeup', '2021-06-09', '2:00pm To 5:00', '21/05/21', 'Online_Cash_Payment'),
(2, 'Sakshi Kishor Mane', 'Koregao, Dist-Satara.', '7846372945', 'Instalook Makeup', '2021-06-09', '11:00 am To 1:30 pm', '21/05/21', 'Cash_On_Dilivery'),
(3, 'Purva Navin Jadhav', 'A/p-Phaltan, Dist-Satara', '7654894329', 'HD Makeup', '2021-06-18', '2:00 am To 4:30 pm', '17/06/21', 'Cash_On_Dilivery'),
(4, 'Vaishnavi Vishal Kakde', 'Manglvar Peth, Satara.', '9976444776', 'Instalook Makeup', '2021-06-25', '10:00 am To 12:30 pm', '17/06/21', 'Cash_On_Dilivery');

-- --------------------------------------------------------

--
-- Table structure for table `manage_offers`
--

CREATE TABLE `manage_offers` (
  `Offer_Id` int(11) NOT NULL,
  `offer_img` varchar(100) NOT NULL,
  `Todays_Offer` varchar(50) NOT NULL,
  `Percent` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `manage_offers`
--

INSERT INTO `manage_offers` (`Offer_Id`, `offer_img`, `Todays_Offer`, `Percent`) VALUES
(1, 'nail2.jpg', 'Todays Offer On Nail Art', '25% Off');

-- --------------------------------------------------------

--
-- Table structure for table `manage_services`
--

CREATE TABLE `manage_services` (
  `Service_Id` int(11) NOT NULL,
  `Service_img` varchar(100) NOT NULL,
  `Service_Name` varchar(50) NOT NULL,
  `Sub_Service` varchar(50) NOT NULL,
  `Service_description` varchar(100) NOT NULL,
  `Service_Price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `manage_services`
--

INSERT INTO `manage_services` (`Service_Id`, `Service_img`, `Service_Name`, `Sub_Service`, `Service_description`, `Service_Price`) VALUES
(3, 'makeup2.jpg', 'Makeup', 'Wedding Makeup', 'Look & feel very nice', '5000'),
(4, 'wax1.jfif', 'Waxing', 'Full legs', 'Full legs waxing with natural products', '300'),
(5, 'haircut.jpg', 'Hair Cutting', 'Hair Cutting', ' A haircut by a Naturals hair stylist', '100'),
(6, 'sareedrephary1.jpg', 'Sadi Drepary', 'Maharashtrian Sadi', '		Designer Maharashtraian Saree', '150'),
(7, 'sakin.jpg', 'Facial', 'Clean Up', 'Anti Aging Facial', '200'),
(8, 'threading.JPG', 'Threading', 'Forehead', 'Threading on forehead	', '100'),
(9, 'coss.jpg', 'Makeup', 'HD Makeup', 'makeup for women', '4000');

-- --------------------------------------------------------

--
-- Table structure for table `manage_staffgallery`
--

CREATE TABLE `manage_staffgallery` (
  `Staff_Id` int(11) NOT NULL,
  `Staff_img` varchar(100) NOT NULL,
  `Staff_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `manage_staffgallery`
--

INSERT INTO `manage_staffgallery` (`Staff_Id`, `Staff_img`, `Staff_Name`) VALUES
(3, 'staff2.jpeg', 'Koaml Pawar'),
(4, 'staff3.jfif', 'Riya Patil'),
(5, 'staff4.jpg', 'Siya Tupe'),
(6, 'staff.jfif', 'Ketaki Mane'),
(7, 'sraff.jfif', 'Surbhi Sonavne');

-- --------------------------------------------------------

--
-- Table structure for table `manage_student_gallery`
--

CREATE TABLE `manage_student_gallery` (
  `Gal_Id` int(11) NOT NULL,
  `Stu_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `manage_student_gallery`
--

INSERT INTO `manage_student_gallery` (`Gal_Id`, `Stu_img`) VALUES
(1, 'gal2.jpg'),
(2, 'mk2.jpg'),
(3, 'mk8.png'),
(4, 'makeup7.jpg'),
(5, 'nail6.jfif'),
(6, 'nailart4.jpg'),
(7, 'nailart2.jfif'),
(8, 'nailart.jpg'),
(9, 'harveni2.jfif'),
(10, 'hairst9.jpg'),
(11, 'hair5.jpg'),
(12, 'hairst2.jpg'),
(13, 'mehendi7.jpg'),
(14, 'stumehe.jpg'),
(15, 'mehendi2.jpg'),
(16, 'mehendi1.jfif'),
(17, 'stusaree1.jfif'),
(18, 'ghagra1.jpg'),
(19, 'bangolo.jfif'),
(20, 'soth.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `paymentmode`
--

CREATE TABLE `paymentmode` (
  `Payment_Id` int(11) NOT NULL,
  `UN` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Tammount` int(11) NOT NULL,
  `Payment_Mode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `paymentmode`
--

INSERT INTO `paymentmode` (`Payment_Id`, `UN`, `Address`, `Tammount`, `Payment_Mode`) VALUES
(2, 'amisha', 'Powai naka, Satra', 1887, 'Online_Cash_Payment'),
(3, 'sakshimane', 'Koregao, Dist-Satara', 1079, 'Cash_On_Dilivery'),
(4, 'Ankita', 'Shivraj Pump, Satara.', 526, 'Online_Cash_Payment'),
(5, 'Purva Jadhav', 'A/p-Phaltan, Dist-Satara', 2158, 'Online_Cash_Payment'),
(6, 'Santosh', 'A/p-Khatav, Dist-Satara.', 3200, 'Online_Cash_Payment'),
(7, 'Aniket Kadam', 'Nagthane, Satara.', 742, 'Cash_On_Dilivery'),
(8, 'jyoti', 'A/p- Pusegao, Dist-Satara', 1600, 'Online_Cash_Payment'),
(9, 'tanuja', 'A/p-Satra', 1258, 'Cash_On_Dilivery'),
(10, 'Ankita', 'A/p-satara', 1258, 'Cash_On_Dilivery'),
(11, '', 'A/p- Vita, Tal-Khanapur, Dist- Sangli.', 900, 'Online_Cash_Payment'),
(12, 'PMA', 'vita', 1800, 'Cash_On_Dilivery');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `Order_Id` int(11) NOT NULL,
  `Usr_Name` varchar(50) NOT NULL,
  `Pr_Id` int(11) NOT NULL,
  `Prd_Name` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Ammount` int(11) NOT NULL,
  `Orderdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`Order_Id`, `Usr_Name`, `Pr_Id`, `Prd_Name`, `Quantity`, `Ammount`, `Orderdate`) VALUES
(2, 'amisha', 2, 'Liquid Lipstik', 3, 1887, '21/05/21'),
(3, 'Sakshimane', 4, 'Rozia Women', 1, 1079, '21/05/21'),
(4, 'Ankita', 3, 'Ey Shadow FT', 1, 900, '15/06/21'),
(5, 'Ankita', 5, '9To5 CC Cream', 1, 526, '15/06/21'),
(6, 'Purva Jadhav', 4, 'Rozia Women', 2, 2158, '17/06/21'),
(7, 'Santosh', 9, 'Foundation', 4, 3200, '18/06/21'),
(8, 'Aniket Kadam', 7, 'MAC ', 1, 742, '18/06/21'),
(9, 'jyoti', 9, 'Foundation', 2, 1600, '14/07/21'),
(10, 'tanuja', 2, 'Liquid Lipstik', 2, 1258, '16/07/21'),
(11, 'Ankita', 2, 'Liquid Lipstik', 2, 1258, '09/08/21'),
(12, '', 3, 'Ey Shadow FT', 1, 900, '21/12/21'),
(13, 'PMA', 10, 'Faundation ', 2, 1800, '17/07/23');

-- --------------------------------------------------------

--
-- Table structure for table `product_report`
--

CREATE TABLE `product_report` (
  `Pr_Id` int(11) NOT NULL,
  `Pr_Name` varchar(50) NOT NULL,
  `Pr_Price` int(11) NOT NULL,
  `Pr_Description` varchar(100) NOT NULL,
  `Pr_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_report`
--

INSERT INTO `product_report` (`Pr_Id`, `Pr_Name`, `Pr_Price`, `Pr_Description`, `Pr_img`) VALUES
(2, 'Liquid Lipstik', 629, 'Pink matte liquid lipstik FM708', 'pr2.jpg'),
(3, 'Ey Shadow FT', 900, 'Spaced out eye shadow palette', 'pr3.jfif'),
(4, 'Rozia Women', 1079, 'Set Of Professional Makeup Brushes', 'pr4.jpg'),
(5, '9To5 CC Cream', 526, 'Lakme Set Of Foundation.', 'pr.jpg'),
(6, '	 NYX Professional', 2842, 'Eyeshadow Base White 0.25 oz.', 'makeuppro.jpg'),
(7, 'MAC ', 742, 'MAC Compact Powder', 'makeupproduct.jfif'),
(8, 'Maybelline Eyeshadow', 1075, 'Maybelline Gel Eyeshadow', 'makeupproduct1.jpg'),
(9, 'Foundation', 800, 'Lacklme Liquid Foundation', 'cancilar.jpg'),
(10, 'Faundation ', 900, 'Lackme Foundation shade no 135', 'pro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_feedback`
--

CREATE TABLE `student_feedback` (
  `Stu_Fullname` varchar(50) NOT NULL,
  `Email_Id` varchar(100) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student_feedback`
--

INSERT INTO `student_feedback` (`Stu_Fullname`, `Email_Id`, `feedback`) VALUES
('Ankita Arjun Chothe', 'ankita96@gmail.com', 'These Course is Helpful for me to improve my skill.   		'),
('Deepika Prasad Vedpathak', 'deepikaprasad@gmail.com', '		Good Experience about course 	'),
('Malika Adhik Kadam', 'malikakadam03@gmail.com', '		Good Experiance	'),
('Pooja Ramesh Patil', 'pooja65@yahoo.com', '		Nice parlor course	'),
('Pranali Ganesh Jadhav', 'pranali01@gmail.com', '	Nice Experience	'),
('Sai Rajendra Chavan', 'chavansai033@gmail.com', 'The Course Was Very Nice		'),
('Sanika Ramesh Kamble', 'sanika@yahoo.com', '	very nice and helpful staff		'),
('Tanuja Rajendra Kadam', 'tanujak@gmail.com', '	good course		');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `S_Firstname` varchar(50) NOT NULL,
  `S_Lastname` varchar(50) NOT NULL,
  `S_Mobile` varchar(50) NOT NULL,
  `S_Email` varchar(50) NOT NULL,
  `S_Personaladdress` varchar(100) NOT NULL,
  `S_Sex` varchar(50) NOT NULL,
  `Studentname` varchar(50) NOT NULL,
  `S_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `Fullname` varchar(50) NOT NULL,
  `Yourmail` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`Fullname`, `Yourmail`, `Message`) VALUES
('Amisha Vilas Tupe', 'amisha@gmail.com', '	Great website		'),
('Aniket Adhik Kadam', 'aniketkadam98@gmail.com', '	Its very user friendly website		'),
('Deepika Prasad Vedpathak', 'deepikaprasad@gmail.com', '	Very Nice Website		'),
('Jyoti Mansing Kadam', 'jyoti17@gmail.com', '\r\nexcellent I liked soo much. thank you 		'),
('Malika Adhik Kadam', 'malikakadam03@gmail.com', '	nice experience 		'),
('Pranali Ganesh Jadhav', 'pranali01@gmail.com', 'User-friendly Website	'),
('Purva Navin Jadhav', 'purva200@gmail.com', '	Website is very nice and helpful to every one 		'),
('Rajeshree Bhaurao Langote', 'rajeshree09@gmail.com', '	Website is very user friendly		'),
('Sakshi Kishor Mane', 'sakshimane90@gmailcom', 'Very nice website and its easy to handle	'),
('Sanika Ramesh Kamble', 'sanika@yahoo.com', '	Great Experience 		'),
('Santosh Rajendra Kadam', 'santu13@gmail.com', '	Its Very Easy To Handel 		');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `U_Name` varchar(50) NOT NULL,
  `U_Contact` varchar(50) NOT NULL,
  `U_Email` varchar(50) NOT NULL,
  `U_Address` varchar(100) NOT NULL,
  `U_Gender` varchar(50) NOT NULL,
  `U_City` varchar(50) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `U_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`U_Name`, `U_Contact`, `U_Email`, `U_Address`, `U_Gender`, `U_City`, `User_Name`, `U_Password`) VALUES
('Amisha Vilas Tupe', '9578643208', 'amisha@gmail.com', 'Powai naka, Satra', 'female', 'Satara', 'amisha', 'amisha@123'),
('Aniket Adhik Kadam', '9898745678', 'aniketkadam98@gmail.com', 'Nagthana, Satara.', 'male', 'Satara.', 'Aniket Kadam', 'aniket@98'),
('Ankita Arjun Chothe', '9764532786', 'ankita96@gmail.com', 'Shivraj pump, Satara', 'female', 'Satara', 'Ankita', 'chotheankita'),
('Jyoti Mansing Kadam', '7057588384', 'jyoti17@gmail.com', 'A/p- Pusegao, Dist-Satara', 'female', 'Satara', 'jyoti', '1713'),
('Malika Adhik Kadam', '9989764865', 'malikakadam03@gmail.com', 'Wadhe Phata, Satara.', 'female', 'Satara', 'Malika Kadam', 'malikakadam'),
('Pooja Ramesh Patil', '7588863674', 'pooja65@yahoo.com', 'Moti Chauk, Satara.', 'female', 'Satara.', 'Pooja Patil', 'poojapatil@65'),
('Pranali Ganesh Jadhav', '7778864591', 'pranali01@gmail.com', 'Somwar Peth, Satara.', 'female', 'Satara', 'Pranali Jadhav', 'pranalijadhav@1'),
('Deepika Prasad Vedpathak', '9489967410', 'deepikaprasad@gmail.com', 'shanivar Peth, Satara.', 'female', 'Satara.', 'prasika', 'prasika@2'),
('Purva Navin Jadhav', '7654894329', 'purva200@gmail.com', 'A/p-Phaltan, Dist-Satara', 'female', 'Satara', 'Purva Jadhav', 'purva@200'),
('Rajeshree Bhaurao Langote', '9879854675', 'rajeshree09@gmail.com', 'Near RTO Office, Satara.', 'female', 'Satara.', 'Rajeshree Langote', 'rajeshree09'),
('Sai Rajendra Chavan', '8275040860', 'chavansai033@gmail.com', 'yashwant nagar, Vita\r\nDist-Sangli Tal- Khanapur', 'female', 'Vita', 'saichavan', 'sai@9'),
('Sakshi Kishor Mane', '7846372945', 'sakshimane90@gmail.com', 'Koregao, Dist-Satara', 'female', 'Koregaio', 'Sakshimane', 'sakshi@12'),
('Sanika Ramesh Kamble', '7778456732', 'sanika@yahoo.com', 'A/p-karad', 'female', 'Karad', 'Sanika Kamble', 'sanu@123'),
('Santosh Rajendra Kadam', '8865958523', 'santu13@gmail.com', 'A/p-Khatav, Dist-Satara.', 'male', 'Satara', 'Santosh', 'santoshkadam'),
('Tanuja Rajendra Kadam', '8275698532', 'tanujak@gmail.com', 'A/p-satara', 'female', 'Satara', 'tanuja', '12345'),
('Vaishnavi Vishal Kakde ', '9976444776', 'vaishanvikakde@gmail.com', 'Manglvar Peth, Satara.', 'female', 'Satara', 'Vaishnavi Kakde', 'Vaishnavi@12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`Admission_Id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Appointment_Id`);

--
-- Indexes for table `manage_batch`
--
ALTER TABLE `manage_batch`
  ADD PRIMARY KEY (`Batch_Id`);

--
-- Indexes for table `manage_courses`
--
ALTER TABLE `manage_courses`
  ADD PRIMARY KEY (`Course_Id`);

--
-- Indexes for table `manage_fee`
--
ALTER TABLE `manage_fee`
  ADD PRIMARY KEY (`Fee_Id`);

--
-- Indexes for table `manage_gallery`
--
ALTER TABLE `manage_gallery`
  ADD PRIMARY KEY (`Gallery_Id`);

--
-- Indexes for table `manage_makeuporder`
--
ALTER TABLE `manage_makeuporder`
  ADD PRIMARY KEY (`Makeup_Id`);

--
-- Indexes for table `manage_offers`
--
ALTER TABLE `manage_offers`
  ADD PRIMARY KEY (`Offer_Id`);

--
-- Indexes for table `manage_services`
--
ALTER TABLE `manage_services`
  ADD PRIMARY KEY (`Service_Id`);

--
-- Indexes for table `manage_staffgallery`
--
ALTER TABLE `manage_staffgallery`
  ADD PRIMARY KEY (`Staff_Id`);

--
-- Indexes for table `manage_student_gallery`
--
ALTER TABLE `manage_student_gallery`
  ADD PRIMARY KEY (`Gal_Id`);

--
-- Indexes for table `paymentmode`
--
ALTER TABLE `paymentmode`
  ADD PRIMARY KEY (`Payment_Id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `product_report`
--
ALTER TABLE `product_report`
  ADD PRIMARY KEY (`Pr_Id`);

--
-- Indexes for table `student_feedback`
--
ALTER TABLE `student_feedback`
  ADD PRIMARY KEY (`Stu_Fullname`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`Studentname`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`Fullname`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`User_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `Admission_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Appointment_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `manage_batch`
--
ALTER TABLE `manage_batch`
  MODIFY `Batch_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manage_courses`
--
ALTER TABLE `manage_courses`
  MODIFY `Course_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manage_fee`
--
ALTER TABLE `manage_fee`
  MODIFY `Fee_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `manage_gallery`
--
ALTER TABLE `manage_gallery`
  MODIFY `Gallery_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `manage_makeuporder`
--
ALTER TABLE `manage_makeuporder`
  MODIFY `Makeup_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manage_offers`
--
ALTER TABLE `manage_offers`
  MODIFY `Offer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_services`
--
ALTER TABLE `manage_services`
  MODIFY `Service_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `manage_staffgallery`
--
ALTER TABLE `manage_staffgallery`
  MODIFY `Staff_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manage_student_gallery`
--
ALTER TABLE `manage_student_gallery`
  MODIFY `Gal_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `paymentmode`
--
ALTER TABLE `paymentmode`
  MODIFY `Payment_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `Order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_report`
--
ALTER TABLE `product_report`
  MODIFY `Pr_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
