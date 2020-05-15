/*USE dac_db; dac short for Darwin Art Company*/

CREATE TABLE `CustomerDetails` (
  CustFName varchar(255) NOT NULL,
  CustLName varchar(255) NOT NULL,
  CustTitle varchar(5) NOT NULL,
  CustEmail varchar(254) NOT NULL,
  CustAddress varchar(255) NOT NULL,
  CustCity varchar(150) NOT NULL,
  CustState varchar(150) NOT NULL,
  CustCountry varchar(150) NOT NULL,
  CustPostCode int(10) NOT NULL,
  CustPhone int (25) NOT NULL,
  PRIMARY KEY (CustEmail)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `PurchaseDetails` (
  PurchasedID int(12) NOT NULL auto_increment,
  CustEmail varchar(254) references `CustomerDetails` (CustEmail),
  OrderID int(12) references `OrderDetails` (OrderID),
  PRIMARY KEY (PurchasedID)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `OrderDetails` (
  OrderID int(12) NOT NULL auto_increment,
  PurchasesID int(12) references `ProductPurchase` (PurchasesID),
PRIMARY KEY (OrderID)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `ProductPurchase` (
  PurchasesID int(11) NOT NULL auto_increment,
  ProductID int(11) references `ProductDetails` (ProductID),
  ProductQuantity int(3) NOT NULL,
  OrderID int(12) references `OrderDetails` (OrderID),
  PRIMARY KEY (PurchasesID)

) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
CREATE TABLE `ProductDetails` (
  ProductID int(11) NOT NULL auto_increment,
  ProductName char(50) NOT NULL,
  ProductDesc varchar(255) NOT NULL,
  ProductPrice float(10) NOT NULL,
  ProductCategory varchar(50) NOT NULL,
  ProductSize varchar (50) NOT NULL,
  PRIMARY KEY (ProductID)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
