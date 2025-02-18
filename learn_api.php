<!-- HTTP protocoles for Api  -->
 <!-- 1=> SOAP  -->
 <!-- 2=> XML-RPC  -->
 <!-- 3=> JSON-RPC  -->
 <!-- 4=> REST  -->

<!-- REST => Representational State Transfer -->
<!-- sports => JSON  ,  XML ,  Text ,  user define -->
<!-- but the SOAP are supported of => only XML  -->

<!-- HTTP methods for making Api  -->
 <!-- 1=> GET  => READ data --> 
 <!-- 2=> POST => INSERT / CREATE  data  -->
 <!-- 3=> PUT => UPDATE data -->
 <!-- 4=> DELETE => DELETE data  -->

 <!-- REST full API with php => The main one thing is used to create Api is (header) -->
<!-- 1=> Content-Type: application/json   => key = Content-Type ,,, value = application/json  --> 
 <!-- Its mean teling the page that the retrun response is json  -->


 <!-- 2=> Access-control-allow-methods: PUT --> 
 <!-- lts optional parameter ok use of defing method you can write all methods in place of one -->
<!-- 3=> Access-Control-Allow-Origin: * --> 
<!-- Its mean evry website Access your Api ok if you want that only the specific website Access it so you have to set the name of website expect the * -->

<!-- 4=> Access-Control-Allow-Headers: <headers> -->  
<!-- eg Content-Type, Accept   => Mean the headers which are allowed to access the Api  -->



<!-- Php Rest Api to read data from database -->
 <!-- start -->


<!-- Read data using Api  -->
<!-- for All data reading we simple use the GET method && retrn data in json format using the header  && json_encode () function  -->
<!-- for reading data from specific parameter || id we use json_decode(file_get_content(php://input) , true) -->
<!-- json_decode() mean json to array && true mean return array not object  && file_get_content(php://input) mean get the data from the body of the request   -->

<!-- create/insert and read data using Api  -->
 
<!-- Start with cloning my repo  ownar Ahmad Riaz -->