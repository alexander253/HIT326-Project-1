/*USE dac_db; dac short for Darwin Art Company*/

CREATE TABLE `CustomerDetails` (
  CustId int (12) NOT NULL auto_increment,
  CustFName varchar(255) NOT NULL,
  CustLName varchar(255) NOT NULL,
  CustTitle varchar(5) NOT NULL,
  CustEmail varchar(254) NOT NULL,
  Cust_hashed_Password varchar(64) NOT NULL,
  Cust_salt char(16) NOT NULL,
  CustAddress varchar(255) NOT NULL,
  CustCity varchar(150) NOT NULL,
  CustState varchar(150) NOT NULL,
  CustCountry varchar(150) NOT NULL,
  CustPostCode int(10) NOT NULL,
  CustPhone int (25) NOT NULL,
  PRIMARY KEY (CustId)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `PurchaseDetails` (
  PurchaseID int(12) NOT NULL auto_increment,
  CustEmail varchar(254) references `CustomerDetails` (CustEmail),
  OrderDate varchar(255) NOT NULL,
  PRIMARY KEY (PurchaseID)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `OrderDetails` (
  OrderID int(12) NOT NULL auto_increment,
  ProductID char(100) NOT NULL,
  OrderDate varchar(255) NOT NULL,
  PRIMARY KEY (OrderID)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


CREATE TABLE `ProductDetails` (
  ProductID int(11) NOT NULL auto_increment,
  ProductName char(50) NOT NULL,
  ProductPrice float(10) NOT NULL,
  ProductSize varchar (50) NOT NULL,
  ProductImage varchar(150) NOT NULL,
  PRIMARY KEY (ProductID)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `Reviews` (
  ReviewID int(11) NOT NULL auto_increment,
  Title char(50) NOT NULL,
  Review varchar(255) NOT NULL,
  CustEmail varchar(254) references `CustomerDetails` (CustEmail),
  PRIMARY KEY (ReviewID)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
