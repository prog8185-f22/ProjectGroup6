# NGMart_Main
OOP + core php integrated
 
1 INTRODUCTION 
    1.1 Project Overview 
    Online stores are numerous when it comes to grocery shopping, NGMart is a web based application which ensures the availability of groceries especially in the small towns. Its currently based on three modules one for the seller enabling them to take part in e-commerce , the other for buyers who will have an idea about the availability of the required items and finally for administrator who has the central control over the whole system.  
    It helps the buyers get an idea about what product is available where and once ordered online can avail it directly from shop of order thus eliminating the need to search numerous shops for its availability and saves one’s energy and time as well.  
 
    1.2 Project Specification 
    The proposed system is a website in where the buyers get an idea about what product is available where and once ordered online can avail it directly from shop of order thus eliminating the need to search numerous shops for its availability and thus saves one’s energy and time. 
    The system includes 3 modules. They are: 
 
        1. Admin Module 
        Admin must have a login into this system. He has the overall control of the system. He can perform the functionalities like : 
        •	Login to the Application 
        •	Add/View/Update/Delete product category. 
        •	View registered sellers. 
        •	Approve/Reject Registered Sellers 
        •	Manage Profile and password 
        
        2. Customer Module 
        Customer can register and they can place their order and do secure online payment. Customer can perform functionalities like: 
        •	Registration/Login and view/manage profile/change password 
        •	View products category wise, subcategory wise, based on locations etc. 
        •	Search products by products name 
        •	Add/View/Update products in cart/wish list 
        •	View/Download order summary 
        •	Add Review, Rating and Post Complaints for the purchased products 
        •	Pay with Payment Gateway 
        
        3. Seller Module 
        Sellers can register and add products to this system thus enabling them to take part in e- commerce as a means to boost their revenue as well as do business management efficiently. 
        They can perform the functionalities like, 
        •	Registration/Login and View/Manage profile/change password 
        •	Create/View/Update/Delete Product items sold. 
        •	Add/View/Update/Delete Products in stock 
        •	Add price discount in percentage 
        •	Manage customer order in different states like pending / cancelled / delivered orders 
        •	View/Replay Complaints from Customer. 
        •	Seller will receive notification for new orders, new complaints and for product running out of stock. 
        •	Generate sales graph to identify most selling item to least. 

2 Architectural Diagram 
 
![Architectural Diagram](https://github.com/anjana-varadan/Assignment04/blob/main/MicrosoftTeams-image%20(5).png)

The registered customer, seller, and admin can access the website through the  internet using their Laptop, Smart Phone, Tablet or Desktop Computer. The System’s application program processes the user’s request and provides the required services by taking data from the system database. 
 
3 Language and Technology used:
    • Front End - HTML, CSS
    • Back End - PHP
    • Database - MYSQL, Firebase
    • Technologies used - JS, HTML5, AJAX, PHP, CSS

4 Users and their Functionalities :
    1 Administrator : Admin must have a login into this system. He has the overall control of the system. He can perform the functionalities like :
        • Login to the Application
        • Add/View/Update/Delete product category.
        • View registered sellers.
        • Approve/Reject Registered Sellers
        • Manage Profile and password
    2 Seller : shops registered to sell their products through the platform. They can perform the functionalities like:
        • Registration/Login and View/Manage profile/change password
        • View Product items sold.
        • Add/View/Update/Delete Products in stock
        • Add price discount in percentage
        • Manage customer order in different states like pending / cancelled /
        delivered orders
        • View/Replay Complaints from Customer.
        • Seller will receive notification for new orders, new complaints and for
        product running out of stock.
        • Generate sales graph to identify most selling item to least.
    3 Buyer : Customer can register and they can place their order and do
    secure online payment. Customer can perform functionalities like:
        • Registration/Login and view/manage profile/change password
        • View products category wise, subcategory wise, based on locations etc.
        • Search products by products name
        • Add/View/Update products in cart/wish list
        • View/Download order summary
        • Add Review, Rating and Post Complaints for the purchased products
        • Pay with Payment Gateway
    4 Guest : customer who can view or search items.

5 Database Design 

A database is an organized mechanism that has the capability of storing information through which a user can retrieve stored information in an effective and efficient manner. The data is the purpose of any database and must be protected. 
The database design is a two level process. In the first step, user requirements are gathered together and a database is designed which will meet these requirements as clearly as possible. This step is called Information Level Design and it is taken independent of any individual DBMS. 
In the second step, this Information level design is transferred into a design for the specific DBMS that will be used to implement the system in question. This step is called Physical Level Design, concerned with the characteristics of the specific DBMS that will be used. A database design runs parallel with the system design. The organization of the data in the database is aimed to achieve the following two major objectives: 
•	Data Integrity 
•	Data independence 
 
Relational Database Management System (RDBMS) 
A relational model represents the database as a collection of relations. Each relation resembles a table of values or file of records. In formal relational model terminology, a row is called a tuple, a column header is called an attribute and the table is called a relation. A relational database consists of a collection of tables, each of which is assigned a unique name. A row in a tale represents a set of related values. 
 
Relationships 
•	Table relationships are established using Key. The two main keys of prime importance are Primary Key & Foreign Key. Entity Integrity and Referential Integrity  Relationships can be established with these keys. 
•	Entity Integrity enforces that no Primary Key can have null values. 
•	Referential Integrity enforces that no Primary Key can have null values. 
•	Referential Integrity for each distinct Foreign Key value, there must exist a matching Primary Key value in the same domain. Other key are Super Key and Candidate Keys. 
 
Normalization 
Data are grouped together in the simplest way so that later changes can be made with minimum impact on data structures. Normalization is formal process of data structures in manners that eliminates redundancy and promotes integrity. 
Normalization is a technique of separating redundant fields and breaking up a large table into a smaller one. It is also used to avoid insertion, deletion, and updating anomalies.  
Normal form in data modelling use two concepts, keys and relationships. A key uniquely identifies a row in a table.  
There are two types of keys, primary key and foreign key. A primary key is an element or a combination of elements in a table whose purpose is to identify records from the same table. A foreign key is a column in a table that uniquely identifies record from a different table. All the tables have been normalized up to the third normal form. 

First Normal Form 
The First Normal Form states that the domain of an attribute must include only atomic values and that the value of any attribute in a tuple must be a single value from the domain of that attribute. In other words, 1NF disallows “relations within relations” or “relations as attribute values within tuples”. The only attribute values permitted by 1NF are single atomic or indivisible values. The first step is to put the data into First Normal Form. This can be donor by moving data into separate tables where the data is of similar type in each table. Each table is given a Primary Key or Foreign Key as per requirement of the project. In this we form new relations for each non-atomic attribute or nested relation. This eliminated repeating groups of data. A relation is said to be in first normal form if only if it satisfies the constraints that contain the primary key only. 
 
Second Normal Form 
According to Second Normal Form, for relations where primary key contains multiple attributes, no non-key attribute should be functionally dependent on a part of the primary key. In this we decompose and setup a new relation for each partial key with its dependent attributes. Make sure to keep a relation with the original primary key and any attributes that are fully functionally dependent on it. This step helps in taking out data that is only dependent on a part of the key.  A relation is said to be in second normal form if and only if it satisfies all the first normal form conditions for the primary key and every non-primary key attributes of the relation is fully dependent on its primary key alone. 
 
Third Normal Form 
According to Third Normal Form, Relation should not have a non-key attribute functionally determined by another non-key attribute or by a set of non-key attributes. That is, there should be no transitive dependency on the primary key. In this we decompose and set up relation that includes the non-key attributes that functionally determines other non-key attributes. This step is taken to get rid of anything that does not depend entirely on the Primary Key. A relation is said to be in third normal form if only if it is in second normal form and more over the non key attributes of the relation should not be depend on other non-key attribute. 
 
 
TABLES Examples
 
Table No  	:  01 
Table Name 	:  tbl_login 
Primary Key :  login_id 
 
Serial No 	Field name 	Field Type 	Description 
1 	        Login _id 	Integer 	Primary key 
2 	        Email 	    Varchar 	User’s Email ID 
3 	        Password 	Varchar 	Login password 
4 	        Status 	    Varchar 	1-active / 0- inactive 
 
 
Table No  	:  02 
Table Name 	:  tbl_customer_registration 
Primary Key :  customer_id 
Foreign Key :  login_id, state_id, district_id 
 
Serial No 	   Field name 	   Field Type 	    Description 
1 	            Customer _id 	Integer 	    Primary key 
2 	            Login _id 	    Integer 	    Foreign key references login table 
3 	            Cust_name 	    Varchar 	    User name 
4 	            Cust _image 	Varchar 	    Profile picture 
5 	            Cust_phone_no 	Character 	    Customer contact number 
6 	            Cust_address 	Varchar 	    Customer registered address 
7 	            state_id 	    Integer 	    Foreign key references states table 
8 	            district_id 	Character 	    Customer district 
 
 
NoSQL Firebase

It is used for log every action of user thus admin can do various analysis over the data. Its easy to embed in the system as well as google provides various methods to view the data

6 Challenges

• Git collaboration
• Sending mail on order confirmation and forgot password
• Complexity of coding due to normalization
• Implementing dark mode over legacy code
• Connection with firebase on php
