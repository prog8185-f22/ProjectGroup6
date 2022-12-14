# ProjectGroup6
1 INTRODUCTION 
    Project Overview 
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
        •	Generate sales graph to identify most selling item to least

2 Architectural Diagram 
 
![Architectural Diagram](https://github.com/anjana-varadan/Assignment04/blob/main/MicrosoftTeams-image%20(5).png)

The registered customer, seller, and admin can access the website through the  internet using their Laptop, Smart Phone, Tablet or Desktop Computer. The System’s application program processes the user’s request and provides the required services by taking data from the system database. 
 
3 Language and Technology used:<br />
    • Front End - HTML, CSS<br />
    • Back End - PHP<br />
    • Database - MYSQL, Firebase<br />
    • Technologies used - JS, HTML5, AJAX, PHP, CSS<br />

4 Users and their Functionalities :
    1 Administrator : Admin must have a login into this system. He has the overall control of the system. He can perform the functionalities like :<br />
        • Login to the Application<br />
        • Add/View/Update/Delete product category.<br />
        • View registered sellers.<br />
        • Approve/Reject Registered Sellers<br />
        • Manage Profile and password<br />
    2 Seller : shops registered to sell their products through the platform. They can perform the functionalities like:
        • Registration/Login and View/Manage profile/change password<br />
        • View Product items sold.<br />
        • Add/View/Update/Delete Products in stock<br />
        • Add price discount in percentage<br />
        • Manage customer order in different states like pending / cancelled /
        delivered orders<br />
        • View/Replay Complaints from Customer.<br />
        • Seller will receive notification for new orders, new complaints and for
        product running out of stock.<br />
        • Generate sales graph to identify most selling item to least.<br />
    3 Buyer : Customer can register and they can place their order and do
    secure online payment. Customer can perform functionalities like:<br />
        • Registration/Login and view/manage profile/change password<br />
        • View products category wise, subcategory wise, based on locations etc.<br />
        • Search products by products name<br />
        • Add/View/Update products in cart/wish list<br />
        • View/Download order summary<br />
        • Add Review, Rating and Post Complaints for the purchased products<br />
        • Pay with Payment Gateway<br />
    4 Guest : customer who can view or search items.<br />

![db Diagram](https://github.com/anjana-varadan/Form-Validation/blob/main/dbDesign.png)

A database is an organized mechanism that has the capability of storing information through which a user can retrieve stored information in an effective and efficient manner.<br />

Relational Database Management System (RDBMS)<br /> 
A relational model represents the database as a collection of relations. Each relation resembles a table of values or file of records. <br />
 
Normalization <br />
Normalization is formal process of data structures in manners that eliminates redundancy and promotes o 
integrity. All tables are normalised to maximum of 3NF.<br />
 
NoSQL Firebase<br />

It is used for log every action of user thus admin can do various analysis over the data. Its easy to embed in the system as well as google provides various methods to view the data<br />

6 Challenges<br />

• Git collaboration
• Sending mail on order confirmation and forgot password<br />
• Complexity of coding due to normalization<br />
• Implementing dark mode over legacy code<br />
• Connection with firebase on php<br />
