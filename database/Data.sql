-- DROP DATABASE store;
CREATE DATABASE store CHARACTER SET UTF8;
USE store;

CREATE TABLE Categories (
    Id				INT AUTO_INCREMENT PRIMARY KEY,
    ParentId		INT,
    Name 			VARCHAR(255)
);

INSERT INTO Categories VALUES (NULL, 0, 'Phone'); -- 1
INSERT INTO Categories VALUES (NULL, 1, 'Apple');  -- 2
INSERT INTO Categories VALUES (NULL, 1, 'Asus'); -- 3
INSERT INTO Categories VALUES (NULL, 1, 'HTC'); -- 4
INSERT INTO Categories VALUES (NULL, 1, 'Lenovo'); -- 5

INSERT INTO Categories VALUES (NULL, 0, 'Laptop'); -- 6
INSERT INTO Categories VALUES (NULL, 6, 'HP'); -- 7
INSERT INTO Categories VALUES (NULL, 6, 'Asus'); -- 8
INSERT INTO Categories VALUES (NULL, 6, 'Dell'); -- 9
INSERT INTO Categories VALUES (NULL, 6, 'Lenovo'); -- 10


CREATE TABLE Kinds
(
	Id			INT AUTO_INCREMENT PRIMARY KEY,
    Name		VARCHAR(255)
);
INSERT INTO Kinds VALUES (NULL, 'Phone');
INSERT INTO Kinds VALUES (NULL, 'Laptop');


CREATE TABLE Products (
    Id					INT AUTO_INCREMENT PRIMARY KEY,
    CategoryId			INT,
    Name 				VARCHAR(255),
    Description 		TEXT,
    Specification		TEXT,
    Price				INT,
    KindId				INT,
    Image				VARCHAR(255),
    
    
    FOREIGN KEY (CategoryId) REFERENCES Categories (Id),
    FOREIGN KEY (KindId) REFERENCES Kinds (Id)
);
INSERT INTO Products VALUES (NULL, 2, 'IPHONE SE 64GB SILVER', 'Product of Apple','12MP primary camera with 720p HD video recording, retina flash, ƒ/2.4 aperture, auto HDR for photos, backside illumination sensor, exposure control, improved local tone mapping, face detection, timer mode, burst mode and 1.2MP front facing camera', 13990000 , 1, 'images/products/1_26IPhone.jpg');
INSERT INTO Products VALUES (NULL, 2, 'IPHONE 6', 'Product of Apple','4.7-inch (diagonal) Retina HD display with 1334-by-750 resolution.1080p HD video recording at 60 fps and slo-mo video recording at 240 fps', 9990000, 1, 'images/products/iphone-6-32gb-vang-400-400x460.png');
INSERT INTO Products VALUES (NULL, 2, 'IPHONE 7', 'Product of Apple','12MP primary camera with optical image stabilisation, Quad-LED True Tone flash and Live Photos, 4K video recording at 30 fps and slow-motion video recording in 1080p at 120 fps, 7MP front facing FaceTime HD camera with Retina Flash', 18790000, 1, 'images/products/iphone-7-128gb-4-400x460.png');
INSERT INTO Products VALUES (NULL, 2, 'IPHONE 5S', 'Product of Apple','8MP primary camera with true tone flash, auto focus, geo tagging, face detection burst mode, 1.2MP front facing camera with HD video recording and backside illumination sensor', 6490000, 1, 'images/products/iphone-5s-16gb-7-400x460.png');

INSERT INTO Products VALUES (NULL, 3, 'Zenfone Max ', 'Product of Asus','13MP primary camera with auto focus, Dual Tone LED flash and 5MP front facing camera.13.97 centimeters (5.5-inch) IPS capacitive touchscreen with 1280 x 720 pixels resolution', 2840500, 1, 'images/products/asus-zenfone-max-400x460.png');
INSERT INTO Products VALUES (NULL, 3, 'Zenfone Selfie ', 'Product of Asus','13MP primary camera with f/2.0-aperture, auto-laser focus lens with dual-color real tone flash, macro photography to capture objects over than 6 centimeters and 13MP front facing camera',  3240500, 1, 'images/products/asus-zenfone-selfie-new-400x460.png');

INSERT INTO Products VALUES (NULL, 4, 'HTC Desire 10', 'Product of HTC','20MP primary camera with f/2.2, 28mm, laser auto focus, dual-LED (dual tone) flash, touch focus, face detection, auto-HDR, panorama and 13MP front facing camera', 7990000, 1, 'images/products/htc-desire-10-pro-400x460.png');
INSERT INTO Products VALUES (NULL, 4, 'HTC One A9', 'Product of HTC','13MP primary camera with auto focus and UltraPixel front facing camera. 5-inch (12.7 centimeters) Full HD 1080p capacitive touchscreen', 6190000, 1, 'images/products/htc-one-a9-2-400x460.png');
INSERT INTO Products VALUES (NULL, 4, 'HTC Desire 728G i3 6006U', 'Product of HTC','16MP primary camera (f/2.0 Aperture, 1.12 µm Pixel size) with high speed autofocus technology (PDAF), updated Electronic (EIS) and Optical (OIS) stabilization technologies protected by a more durable sapphire glass with a 16 MP front camera (f/2.0 Aperture, 1.0 µm Pixel size) capable of capturing improved low-light selfies and videos', 9670000, 1, 'images/products/htc-one-me9-global-gold-sepia-sketchfab-443x425.png');


INSERT INTO Products VALUES (NULL, 5, 'Lenovo K6 Note ', 'Product of Lenovo ','Vibrant 13.97cm(5.5") Full HD Screen, Equipped with Single rear speaker with Dolby Atmos, 3.5mm jack', 5990000, 1, 'images/products/lenovo-vibe-k6.png');
INSERT INTO Products VALUES (NULL, 5, 'Lenovo Vibe C2 ', 'Product of Lenovo ','5.5" (13.97cm) full HD 1920 x 1080 pixels IPS screen Gorilla glass display with 401ppi resolution - 450 Nits brightness & contrast ratio of 1000:1', 4300000, 1, 'images/products/lenovo-vibe-c2-400x460.png');
INSERT INTO Products VALUES (NULL, 5, 'Lenovo Phab 2 Plus ', 'Product of Lenovo ','13 MP primary Dual Camera Milbeaut ISP, f2.0 aperture, 1.34 big pixel, laser focus, PDAF light supplement with Professional Mode, Background Swap and Post Shot Refocus capability. 8 MP front camera with f2.2 aperture and 1.4 μm big pixel with light supplement', 4000000, 1, 'images/products/lenovo-phab-plus-hero-400x460.png');


INSERT INTO Products VALUES (NULL, 7, 'HP ENVY 15-AS105TU', 'Product of HP','CPU Intel® Core™ i7-7500U(2.7GHz up to 3.5Ghz, 4MB cache), RAM 8GB DDR4, HDD 1TB +  SSD 128GB, VGA Intel HD Graphics 620, Display 15.6"Full HD ( 1920 x 1080 )', 24190000, 2, 'images/products/hp-15-ay526tu-i3-6006u-400a-400x400.png');
INSERT INTO Products VALUES (NULL, 7, 'HP Pavilion', 'Product of HP','2.5GHz Intel Core i5-7200U 7th Gen processor. 8GB DDR4 RAM. 1TB 5400rpm Serial ATA hard drive', 11990000, 2, 'images/products/hp-pavilion-15-au067tx-400-400x400.png');
INSERT INTO Products VALUES (NULL, 7, 'HP 15-AU003TX ', 'Product of HP','2.3GHz Intel Core i5-6200U processor. 8GB DDR4 RAM. 1TB 5400rpm Serial ATA hard drive', 22360000, 2, 'images/products/hp-15-ay072tu-x3b54pa-400-400x400.png');


INSERT INTO Products VALUES (NULL, 8, 'Asus A540LA i3 5005U', 'Product of Asus',' CPU Intel Core i5-7200U(2.5Ghz up to 3.1Ghz, 3MB L3 Cache), RAM 4GB DDR4 2133Mhz, HDD 500GB SATA 5400rpm , VGA Intel HD Graphics 620 , Display 15.6" Full HD LED(1920x1080) ', 11790000, 2, 'images/products/asus-a540la-i3-5005u-4gb-500gb-win10-400-400x400.png');
INSERT INTO Products VALUES (NULL, 8, 'Asus X441SA N3710', 'Product of Asus', ' 2.0 GHz Intel Core i3-5005U processor. 4GB DDR3 RAM. 1TB 5400rpm Serial ATA hard drive. 15.6-inch screen, Intel HD Graphics ', 16240000, 2, 'images/products/asus-x441sa-n3710-400-400x400.png');
INSERT INTO Products VALUES (NULL, 8, 'Asus A441UA i3 6006U', 'Product of Asus', '15.6" (39.62 cm) display, 1920 x 1080 px. Intel Core i5 (7th Gen) Processor. 4 GB DDR4 RAM', 23520000, 2, 'images/products/asus-a441ua-i3-6006u-400-400x400.png');


INSERT INTO Products VALUES (NULL, 9, 'Dell Inspiron 3567 i3 6006U', 'Product of Dell', '2GHz Intel 5th Gen Core i3 processor. 4GB DDR3L RAM. 1TB hard drive. 15.6-inch screen, Intel HD Graphics 5500. Ubuntu Linux operating system. HD (720p) capable webcam, microphone', 26240000, 2, 'images/products/dell-inspiron-3567-i3-6006u-400-400x460.png');
INSERT INTO Products VALUES (NULL, 9, 'Dell Vostro 3468 i5 7200U', 'Product of Dell', ' 2GHz Intel Core i3-5005U 5th processor. 4GB DDR3 RAM. 1TB 5400rpm Serial ATA hard drive. 15.6-inch screen, Integrated Graphics. Windows 10 operating system ', 22140000, 2, 'images/products/dell-vostro-3468-i5-7200u-400-400x460.png');
INSERT INTO Products VALUES (NULL, 9, 'Dell Inspiron 3467 i5 7200U', 'Product of Dell', ' 2.5GHz Intel Core i5 5200U processor. 4GB DDRL3 RAM. 1TB hard drive. 15.6 inch screen, Intel HD Graphics 5500 ', 28120000, 2, 'images/products/dell-inspiron-3467-i5-7200u-c4i5107w-1-400-400x460.png');


INSERT INTO Products VALUES (NULL, 10, 'Lenovo IdeaPad 100S 11IBY Z3735', 'Product of Lenovo', ' 2GHz Intel Core i3-5005U 5th Gen processor. 8GB DDR3L RAM. 500GB 5400rpm Serial ATA hard drive. 15.6-inch screen, Integrated Graphics ', 27210000, 2, 'images/products/lenovo-ideapad-100s-400-400x400.png');
INSERT INTO Products VALUES (NULL, 10, 'Lenovo IdeaPad 110 15ISK i7 6498DU', 'Product of Lenovo', ' 2.5GHz AMD A8-7410 processor. 8GB DDR3L RAM. 1TB 5400rpm Serial ATA hard drive. 15.6-inch screen, AMD R16M-M1-30 2GB Graphics ' , 19880000, 2, 'images/products/lenovo-ideapad-310-15isk-80sm010xvn-400-400x400.png');
INSERT INTO Products VALUES (NULL, 10, 'Lenovo IdeaPad 110 15ISK i3 6006U', 'Product of Lenovo', ' 2GHz Intel Core i3 5005U processor. 4GB DDR3 RAM. 1TB 5400rpm Serial ATA hard drive. 15.6-inch screen, ATI Exo Pro R5 M330 2GB Graphics ', 16250000, 2, 'images/products/lenovo-ideapad-110-15isk-i3-6006u-400-1-400x400.png');


CREATE TABLE Address
(
	Id			INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    UserId		INT UNSIGNED,
    Address		VARCHAR(255)
);

CREATE TABLE Users
(
	Id 			INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    Username	VARCHAR(255),
    Email		VARCHAR(255),
    Password	VARCHAR(70),
    Firstname	VARCHAR(50),
    Lastname	VARCHAR(50),
    Phone		VARCHAR(15),
    Type		INT,			-- 0: Admin, 1: User, 2: Pending, 3: Suspend
    Token		VARCHAR(32),
    
    CONSTRAINT UC_Users_Username UNIQUE(Username),
    CONSTRAINT UC_Users_Email UNIQUE(Email)
);

CREATE TABLE Activates
(
	Id			INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    UserId		INT UNSIGNED,
    Code		VARCHAR(6), -- Ex: 123456
    Expried		DATETIME,
    Count		INT UNSIGNED
);

INSERT INTO Users VALUES (NULL, 'admin', 'admin@gmail.com', '$2y$10$7400x9q/a7f2qpKNUT/EgORNQTXiBvh76a1x8WljoRmfbY6P6gX86', 'Đào', 'Hoài Phương', '01682216954', 0, NULL);


CREATE TABLE Feedbacks
(
	Id		 	INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    Name		VARCHAR(100),
    Email		VARCHAR(255),
    Subject		VARCHAR(100),
    Message		VARCHAR(255),
    Status		TINYINT -- 0: New, 1: Responsed
);