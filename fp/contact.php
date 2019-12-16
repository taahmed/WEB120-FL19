
<?php include 'includes/header.php';?>

<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */
        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "ahmmedth1@gmail.com";  //place your/your client's email address here
        $toName = "Tahero"; //place your client's name here
        $website = "Tahero's Website";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements
	?>
</section>
<!-- END LEFT COL -->
<!-- START RIGHT COL -->
<aside>
 <h3>Lorem Ipsum Lorem Ipsum</h3>

 <ul class='resources'>
     <li><b>Lorem Ipsum Lorem Ipsum</b>
     </li>
     <li><b>Lorem Ipsum Lorem Ipsum </b></li>
     
     <li><b>Lorem Ipsum Lorem Ipsum</b></li>
     
     <li><b>Lorem Ipsum Lorem Ipsum</b></li>
     
     <li><b>Lorem Ipsum Lorem Ipsum</b></li>
 </ul>    
    
</aside>
<?php include 'includes/footer.php';?>